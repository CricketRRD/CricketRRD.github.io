#!/usr/local/bin/perl

# pmlines.pl
#
# 1998/08/04

#
# Created by  Carlos.Canau@EUnet.pt with cfgmaker  from Tobias Oetiker
# <oetiker@ee.ethz.ch> as skeleton
#
# returns:
# #modems
# #isdn
# sysName
# sysUptime
#

# 1998/10/30
#
# Modified by Butch Kemper <kemper@tstar.net> to allow multiple PortMasters
# to be specified on the argument line and to output the totals.
#

# 1999/4/18
#
# Modified by Butch Kemper <kemper@tstar.net> to process PM2 systems and
# to distingish between async and isdn ports.
#
# Changed name to PM2lines.pl
#

# 1999/4/19
#
# Modified by Butch Kemper <kemper@tstar.net> to process both PM2 and PM3
# systems.
#
# Changed name to PMlines.pl
#

# 990803
#
# modified to output total lines for use by cricket
# modified to work around pm4 problem -- sort of
#
# eric@svjava.com
#
# now returns:
# total ports in use
# modems in use
# isdn connections in use
# sysName
# sysUptime
#
# it appears that the pm4 is broken, at least w/ 4.1b23, in that
# it returns a 1 (type=other) for PhysType.  i've modified things
# so you at least get a total port count on the pm4.
#

use SNMP_Session;
use BER;
use Socket;
use strict;

%snmpget::OIDS = (  'sysName' => '1.3.6.1.2.1.1.5.0',
		    'sysUptime' => '1.3.6.1.2.1.1.3.0',
		    'ifNumber' =>  '1.3.6.1.2.1.2.1.0',
		    'PMip' => '1.3.6.1.4.1.307.3.2.1.1.1.14',
		    'PMty' => '1.3.6.1.4.1.307.3.2.1.1.1.3',
		);

my($tot_isdn,$tot_modems,$total,$args) = (0,0,0,0);
my($input_string,$PROGNAME,$sysUptime,$sysName,$interfaces)="";
($PROGNAME = $0) =~ s/.*\///;

diexit(0) if $#ARGV < 0;

for ($args=0; $args < $#ARGV+1; $args++) {
   $input_string = $ARGV[$args];
   my($community,$router) = split /\@/, $input_string;

   diexit(0) unless $community && $router;

   ($sysName,$sysUptime,$interfaces) =
      snmpget($router,$community,'sysName','sysUptime','ifNumber');
   my @PMip = snmpgettable($router,$community,'PMip');
   my @PMty = snmpgettable($router,$community,'PMty');
   my ($i);

   for ($i=0; $i < $#PMip+1; $i++) {
      if ($PMip[$i] ne "0.0.0.0") {
         if ($PMty[$i] == 2 || $PMty[$i] == 5) {
            $tot_modems++;
            $total++;
         }
         elsif ($PMty[$i] == 4 || $PMty[$i] == 6 || $PMty[$i] == 7) {
            $tot_isdn++;
            $total++;
         }
         elsif ($PMty[$i] == 1) {
            $total++;
         }
      }
   }
}

printf "$total\n";
printf "$tot_modems\n";
printf "$tot_isdn\n";
printf "$sysUptime\n";
printf "$sysName\n";

exit(0);

sub diexit {
   die ("USAGE: $PROGNAME  community\@portmaster [community\@portmaster]" .
        " \.\.\.\n" .
        "       community   = snmp read community string\n" .
        "       portmaster  = FQN of PortMaster\n");
}

sub snmpget{
  my($host,$community,@vars) = @_;
  my(@enoid, $var,$response, $bindings, $binding, $value, $inoid,$outoid,
     $upoid,$oid,@retvals);
  foreach $var (@vars) {
    die "Unknown SNMP var $var\n"
      unless $snmpget::OIDS{$var};
    push @enoid,  encode_oid((split /\./, $snmpget::OIDS{$var}));
  }
  srand();
  my $session = SNMP_Session->open ($host ,
                                 $community,
                                 161);
  if ($session->get_request_response(@enoid)) {
    $response = $session->pdu_buffer;
    ($bindings) = $session->decode_get_response ($response);
    $session->close ();
    while ($bindings) {
      ($binding,$bindings) = decode_sequence ($bindings);
      ($oid,$value) = decode_by_template ($binding, "%O%@");
      my $tempo = pretty_print($value);
      $tempo=~s/\t/ /g;
      $tempo=~s/\n/ /g;
      $tempo=~s/^\s+//;
      $tempo=~s/\s+$//;

      push @retvals,  $tempo;
    }

    return (@retvals);
  } else {
    die "No answer from $input_string. You may be using the wrong community\n";
  }
}

sub snmpgettable{
  my($host,$community,$var) = @_;
  my($next_oid,$enoid,$orig_oid,
     $response, $bindings, $binding, $value, $inoid,$outoid,
     $upoid,$oid,@table,$tempo);
  die "Unknown SNMP var $var\n"
    unless $snmpget::OIDS{$var};

  $orig_oid = encode_oid(split /\./, $snmpget::OIDS{$var});
  $enoid=$orig_oid;
  srand();
  my $session = SNMP_Session->open ($host ,
                                 $community,
                                 161);
  for(;;)  {
    if ($session->getnext_request_response(($enoid))) {
      $response = $session->pdu_buffer;
      ($bindings) = $session->decode_get_response ($response);
      ($binding,$bindings) = decode_sequence ($bindings);
      ($next_oid,$value) = decode_by_template ($binding, "%O%@");
      # quit once we are outside the table
      last unless BER::encoded_oid_prefix_p($orig_oid,$next_oid);
      $tempo = pretty_print($value);
      #print "$var: '$tempo'\n";
      $tempo=~s/\t/ /g;
      $tempo=~s/\n/ /g;
      $tempo=~s/^\s+//;
      $tempo=~s/\s+$//;
      push @table, $tempo;

    } else {
      die "No answer from $input_string\n";
    }
    $enoid=$next_oid;
  }
  $session->close ();
  return (@table);
}


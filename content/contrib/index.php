<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("Contributed Software","contrib.css")
?>

            <p>
                Here are various configurations, scripts and utilities
                useful for enhancing your Cricket installation. Please
                contact individual authors for assistance, or ask on
                the <a href="http://lists.sourceforge.net/mailman/listinfo/cricket-users">mailing list</a>
                and someone there might be able to help you.
            </p>
            <p>
                This repository was hosted by <a href="http://www.certaintysolutions.com/">Certainty Solutions</a>
                and generously maintained by Emmett Hogan for a long time
                prior to arriving in its current location. Our sincere
                gratitude goes to them for their contributions to the Cricket
                community.
            </p>
            <p>
                Select from: <a href="#device">Device Support</a> | <a
                href="#software">Server Software Support</a> | <a
                href="#util">Utilities</a>
            </p>

            <div id="device" class="contrib">
                <h2><a name="device">Device Support</a></h2>
                <p>
                    This section offers configuration samples or
                    generators for monitoring network devices and other
                    complex special-purpose devices like NAS appliances.
                </p>
                <table class="contriblist">
                    <tr>
                        <th> File Name </th>
                        <th> Description </th>
                        <th> Author </th>
                        <th> Size </th>
                        <th> Date Submitted </th>
                    </tr>
                    <tr>
                        <td> <a href="files/mge-ups-cricket-1.0.tar.gz">mge-ups-cricket-1.0.tar.gz</a> </td>
                        <td> Config tree for MGE UPS devices </td>
                        <td> <a href="mailto:cricket%40%2eoisec%2enet">Cliff Albert</a> </td>
                        <td> 1K </td>
                        <td> 2/13/2003 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/genCatConfig-1.4.1.tar.gz">genCatConfig-1.4.1.tar.gz</a> </td>
                        <td> Config subtree generator for Catalyst switches </td>
                        <td> <a href="mailto:mlf%40users%2esourceforge%2enet">Mike Fisher</a> </td>
                        <td> 14K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/aironet1.tar">aironet1.tar</a> </td>
                        <td> monitors Aironet and Cisco wireless access points </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 7K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/ascend1.tar">ascend1.tar</a> </td>
                        <td> monitors Ascend Remote Access Servers </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 7K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/filer1.tar">filer1.tar</a> </td>
                        <td> monitors Network Appliance filers (enhanced to support all major Ontap releases) </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 15K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/netapp_ext.zip">netapp_ext.zip</a> </td>
                        <td> More help for monitoring NetApp Boxen. </td>
                        <td> <a href="mailto:jsanjuan%40satec%2ees">Jose Antonio San Juan Sampr&oacute;n</a> </td>
                        <td> 4K </td>
                        <td> 2/26/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://www.acktomic.com/cricket/cricket-genRtrConfig.htm">genRtrConfig</a> </td>
                        <td> Config subtree generator for routers </td>
                        <td> <a href="mailto:fmikus%40acktomic%2ecom">Fran&ccedil;ois Mikus</a><br />Original by: <a href="mailto:mlf%40users%2esourceforge%2enet">Mike Fisher</a> </td>
                        <td> 16K </td>
                        <td> 1/24/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/listInterfaces+.tar.gz">listInterfaces+.tar.gz</a> </td>
                        <td> listInterfaces+ is an enhanced Cricket configuration generator </td>
                        <td> <a href="mailto:cliftonr%40lava%2enet">Clifton Royston</a> </td>
                        <td> 4K </td>
                        <td> 12/01/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/cacheflow.tar.gz">cacheflow.tar.gz</a> </td>
                        <td> This is a config tree to watch all Cacheflow proxies and other appliances.<br /> It's based on the proxy-mib. </td>
                        <td> <a href="mailto:jjmts%40spirou%2eeasynet%2efr">Jean-Jacques Martres</a> </td>
                        <td> 3K </td>
                        <td> 11/20/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/netapp.tar">netapp.tar</a> </td>
                        <td> Get Network Appliance filer OID's to behave under Cricket </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 13K </td>
                        <td> 8/15/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/foundry-switches.tar.gz">foundry-switches.tar.gz</a> </td>
                        <td> This is a config tree to monitor all Foundry products. It's based on the Foundry MIBs. </td>
                        <td> <a href="mailto:jjmts%40spirou%2eeasynet%2efr">Jean-Jacques Martres</a> </td>
                        <td> 2.3K </td>
                        <td> 8/8/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/serveriron.tar.gz">serveriron.tar.gz</a> </td>
                        <td> This a config tree to monitor Foundry L4 Operation (ServerIron and BigServerIron). It's based on the Foundry MIBs </td>
                        <td> <a href="mailto:jjmts%40spirou%2eeasynet%2efr">Jean-Jacques Martres</a> </td>
                        <td> 5.5K </td>
                        <td> 8/8/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/listports-0.1.tar.gz">listports-0.1.tar.gz</a> </td>
                        <td> Aids in the creation of switch-port target files for many switches. Includes VLAN and aggregate traffic information on Cisco Catalyst 550x switches. </td>
                        <td> <a href="mailto:jon%40pdx%2eedu">Jon Snyder</a> </td>
                        <td> 5K </td>
                        <td> 4/20/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/3subtrees.tar.gz">3subtrees.tar.gz</a> </td>
                        <td> 3 subtree configs for monitoring CPU, Disk, RAM and FoundryNet ServerIrons </td>
                        <td> <a href="mailto:mkrenz%40kiva%2enet">Mark Krenz</a> </td>
                        <td> 3.4K </td>
                        <td> 1/8/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/switches.tgz">switches.tgz</a> </td>
                        <td> Using Cricket to monitor Cisco Switches </td>
                        <td> <a href="mailto:tagreen%40awardsforfjords%2ecom">Todd A Green</a> </td>
                        <td> 10K </td>
                        <td> 12/8/1999 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://www.sugarat.net/software/fr-config.tar.gz">fr-config.tar.gz</a> </td>
                        <td> Frame Relay config tree changes and a new listinterfaces script for handling frames. </td>
                        <td> <a href="mailto:sugarat%40thunderhold%2esugarat%2enet">Tim Kennedy</a> </td>
                        <td> 5.5K </td>
                        <td> 12/6/1999 </td>
                    </tr>
                </table>
            </div>

            <div id="software" class="contrib">
                <h2><a name="software">Server Software Support</a></h2>
                <p>
                    These are configuration samples and generators for
                    monitoring general-purpose servers or server software.
                </p>
                <table class="contriblist">
                    <tr>
                        <th> File Name </th>
                        <th> Description </th>
                        <th> Author </th>
                        <th> Size </th>
                        <th> Date Submitted </th>
                    </tr>
                    <tr>
                        <td> <a href="files/ldap.tar">ldap1.tar</a> </td>
                        <td> Monitor a Netscape LDAP Server </td>
                        <td> <a href="mailto:Lufan%2eChen%40synopsys%2ecom">Lufan Chen</a> </td>
                        <td> 20K </td>
                        <td> 6/6/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/sar-0.1.tgz">sar-0.1.tgz</a> </td>
                        <td> Monitor system activity via the system activity reporter (SAR). </td>
                        <td> <a href="mailto:B%2eSchofield%40mailbox%2egu%2eedu%2eau">Brook Schofield</a> </td>
                        <td> 5K </td>
                        <td> 5/28/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/system-status.tar.gz">system-status.tar.gz</a> </td>
                        <td> monitor the CPU temp and fan speeds on linux servers which have lm_sensors installed </td>
                        <td> <a href="mailto:Rich%2eWest%40wesmo%2ecom">Rich West</a> </td>
                        <td> 20K </td>
                        <td> 4/29/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://www.mikehan.com/cricket/oracle.html">oracle</a> </td>
                        <td> Defaults file and script to generate cricket trees to monitor Oracle </td>
                        <td> <a href="mailto:mikehan+cricket%40mikehan%2ecom">Michael Han</a> </td>
                        <td> - </td>
                        <td> 4/25/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://www.mikehan.com/cricket/weblogic.html">weblogic</a> </td>
                        <td> Sample configurations for monitoring BEA Weblogic Server 6.1 and above </td>
                        <td> <a href="mailto:mikehan+cricket%40mikehan%2ecom">Michael Han</a> </td>
                        <td> - </td>
                        <td> 4/25/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/flexlm1.tar">flexlm1.tar</a> </td>
                        <td> monitors FlexLM license servers </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 6K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/flexlm.tar.gz">flexlm.tar.gz</a> </td>
                        <td> Config tree generator and polling scripts for flexlm based licenses and servers. </td>
                        <td> <a href="mailto:gulfie%40mmcnet%2ecom">Gulfie (Tom Rutledge)</a> </td>
                        <td> 6K </td>
                        <td> 6/28/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/http1.tar">http1.tar</a> </td>
                        <td> The standard Cricket http config, with a twist to support proxy servers) </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 7K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/ntp1.tar">ntp1.tar</a> </td>
                        <td> monitors Network Time Protocol servers </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 6K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/sun1.tar">sun1.tar</a> </td>
                        <td> monitors disk space, temperature, and performance of Sun Microsystem servers </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 22K </td>
                        <td> 4/18/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://members.optusnet.com.au/peteblack/pooter/cricket/latency/">cricket-latency</a> </td>
                        <td> Measure latency using ping and a shell script </td>
                        <td> <a href="mailto:dezwart%40froob%2enet">Pete de Zwart</a> </td>
                        <td> 2K </td>
                        <td> 2/4/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://members.optusnet.com.au/peteblack/pooter/cricket/boxen/">cricket-linux-boxen</a> </td>
                        <td> Monitor your Linux boxen via SNMP </td>
                        <td> <a href="mailto:dezwart%40froob%2enet">Pete de Zwart</a> </td>
                        <td> 5K </td>
                        <td> 2/4/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/sendmail-stats-1.0.tar.gz">sendmail-stats-1.0.tar.gz</a> </td>
                        <td> A Module for monitoring SENDMAIL statistics! </td>
                        <td> <a href="mailto:dan%40klein%2ecom">Daniel V. Klein</a> </td>
                        <td> 3K </td>
                        <td> 10/30/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/apache-stats-1.0.tar.gz">apache-stats-1.0.tar.gz</a> </td>
                        <td> Apache Stats is a package to pull some useful information from the mod_status Apache module. </td>
                        <td> Update by: <a href="mailto:dan%40klein%2ecom">Daniel V. Klein</a><br /> Original by: <a href="mailto:amw1%40yahoo%2ecom">Andrew Williams</a> </td>
                        <td> 5K </td>
                        <td> 10/30/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/server-uptime-SNMP.tar.gz">server-uptime-SNMP.tar.gz</a> </td>
                        <td> Monitor Server uptime via SNMP rather than ruptime! </td>
                        <td> <a href="mailto:Rich%2eWest%40wesmo%2ecom">Rich West</a> </td>
                        <td> 1K </td>
                        <td> 6/25/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/disk-space.tar.gz">disk-space.tar.gz</a> </td>
                        <td> Monitor Server disk space via SNMP. </td>
                        <td> <a href="mailto:Rich%2eWest%40wesmo%2ecom">Rich West</a> </td>
                        <td> 1K </td>
                        <td> 6/25/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://www.mikehan.com/cricket/dynamo.html">cricket-dynamo</a> </td>
                        <td> Defaults file for monitoring the ATG Dynamo application server. </td>
                        <td> <a href="mailto:mikehan+cricket%40mikehan%2ecom">Michael Han</a> </td>
                        <td> 1K </td>
                        <td> 1/28/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/server-uptime.tar.gz">server-uptime.tar.gz</a> </td>
                        <td> UNIX server CPU monitoring via ruptime command! </td>
                        <td> <a href="mailto:cliftonr%40lava%2enet">Clifton Royston</a> </td>
                        <td> 2K </td>
                        <td> 12/01/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/dnsmon.tar.gz">dnsmon.tar.gz</a> </td>
                        <td> Monitor the load on Bind 8 DNS servers using the UCD snmpd. </td>
                        <td> <a href="mailto:pschoo%40playbeing%2ecom">Patrick Schoo</a> </td>
                        <td> 20K </td>
                        <td> 11/29/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/suntemp.tar">suntemp.tar</a> </td>
                        <td> Config tree and supporting scripts to query temperature data from Sun Ultra Enterprise Servers (Model 4000 - 6500) </td>
                        <td> <a href="mailto:Matthew%2eStier%40fnc%2efujitsu%2ecom">Matthew Stier</a> </td>
                        <td> 12K </td>
                        <td> 8/15/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://www.afn.org/~jam/software/cricket/">unix_host_resources</a> </td>
                        <td> With this Defaults file and this script you can monitor disk utilization, # of users, and # of processes on a unix machine running snmpd. </td>
                        <td> <a href="mailto:jm%40ufl%2eedu">James Moore</a> </td>
                        <td> 1.5K </td>
                        <td> 1/11/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="http://www.afn.org/~jam/software/cricket/">novell_netware_resources</a> </td>
                        <td> With this Defaults file and this script you can monitor cpu, connections, caches, buffers, and disk utilization on a netware server. </td>
                        <td> <a href="mailto:jm%40ufl%2eedu">James Moore</a> </td>
                        <td> 5K </td>
                        <td> 1/11/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="ftp://ftp.cybertrails.com/sysadmin/netsaintcricket/netsaintcricket.tar">netsaintcricket.tar</a> </td>
                        <td> Configs and Utils for graphing Netstaint information with Cricket </td>
                        <td> <a href="mailto:nathan%40cybertrails%2ecom">Nathan Alan Haneysmith</a> </td>
                        <td> 40K </td>
                        <td> 12/20/1999 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/cricket-linux-box.tar.gz">cricket-linux-box.tar.gz</a> </td>
                        <td> Sample config tree for a linux box </td>
                        <td> <a href="mailto:sg%40comfuture%2enet">Stefan Gruber</a> </td>
                        <td> 11K </td>
                        <td> 12/9/1999 </td>
                    </tr>
                </table>
            </div>

            <div id="util" class="contrib">
                <h2><a name="util">Utilities</a></h2>
                <p>
                    Here are scripts, utilities and extensions for
                    improving your Cricket framework.
                </p>
                <table class="contriblist">
                    <tr>
                        <th> File Name </th>
                        <th> Description </th>
                        <th> Author </th>
                        <th> Size </th>
                        <th> Date Submitted </th>
                    </tr>
                    <tr>
                        <td> <a href="http://sourceforge.net/tracker/index.php?func=detail&aid=742601&group_id=1210&atid=301210">(see "Attached Files" section at bottom of page)</a> </td>
                        <td> Access control lists for Cricket pages </td>
                        <td> <a href="mailto:eravin%40panix%2ecom">Ed Ravin</a> </td>
                        <td> - </td>
                        <td> 5/23/2003 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/traffic_1_7.tar.gz">traffic_1_7.tar.gz</a> </td>
                        <td> Traffic is a pair of scripts that will allow you to graph month, week, or year-to-date bandwidth usage for things like DSL and T1 customers, so you can bill them according to their use </td>
                        <td> <a href="mailto:dkelly%40inav%2enet">Dave Kelly</a> </td>
                        <td> 6K </td>
                        <td> 6/6/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/killspike2">killspike2</a> </td>
                        <td> Remove (presumably erroneous) peaks from RRD files </td>
                        <td> <a href="mailto:mdz%40debian%2eorg">Matt Zimmerman</a> </td>
                        <td> 1K </td>
                        <td> 6/6/2002 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/rrdcut">rrdcut</a> </td>
                        <td> Perl script which quickly removes spikes from Cricket graphs </td>
                        <td> <a href="mailto:eravin%40panix%2ecom">Ed Ravin</a> </td>
                        <td> 3K </td>
                        <td> 6/4/2002 </td>
                    </tr>
            
                    <tr>
                        <td> <a href="files/anichols.tar.gz">anichols.tar.gz</a> <br /> <a href="files/SNMP_Simple.tar.gz">SNMP_Simple.tar.gz</a> </td>
                        <td> A few sample config trees plus scripts in use %40 Sun<br /> An SNMP library needed for the above config trees. </td>
                        <td> Alan Nichols </td>
                        <td> 6K<br /> 68K </td>
                        <td> 5/27/1999 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/project-0-3.tar.gz">project-0-3.tar.gz</a> </td>
                        <td> Polynomial Least Squares forward time projections! </td>
                        <td> <a href="mailto:ross%2ebiro%40learningnetwork%2ecom">Ross Biro</a> </td>
                        <td> 12K </td>
                        <td> 8/3/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/rgb.txt2colors.tar.gz">rgb.txt2colors.tar.gz</a> </td>
                        <td> An rgb.txt too cricket config file traslator. Should not every one be able to share in the joy of the darkorchid3 graphs? </td>
                        <td> <a href="mailto:gulfie%40mmcnet%2ecom">Gulfie (Tom Rutledge)</a> </td>
                        <td> 1K </td>
                        <td> 6/28/2001 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/cricket_client.tar.gz">cricket_client.tar.gz</a> </td>
                        <td> Cricket extension that adds client/server abilities for use in gathering target data. </td>
                        <td> <a href="mailto:richmond%40wildfire%2ecom">Christopher Richmond</a> </td>
                        <td> 16K </td>
                        <td> 12/14/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/chirp-0.5.tar.gz">chirp-0.5.tar.gz</a> </td>
                        <td> CHIRP is a modular system for writing "drivers" for generating configuration files for Cricket!!! </td>
                        <td> <a href="mailto:tom%40honermann%2enet">Tom Honermann</a><br /> <a href="mailto:sm%2efeldmann%40hosp%2ewisc%2eedu">Scott Feldmann</a> </td>
                        <td> 30K </td>
                        <td> 5/15/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/add_ds.tgz">add_ds.tgz</a> </td>
                        <td> A script to add a DS to an existing RRD!! </td>
                        <td> <a href="mailto:selena%40chesnok%2ecom">Selena</a> </td>
                        <td> 3.1K </td>
                        <td> 1/13/2000 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/test-url-proxied.tar.gz">test-url-proxied.tar.gz</a> </td>
                        <td> A modified version of test-url which is "proxie aware" </td>
                        <td> <a href="mailto:kadokev%40msg%2enet">Kevin A. Kadow</a> </td>
                        <td> 2K </td>
                        <td> 8/31/1999 </td>
                    </tr>
                    <tr>
                        <td> <a href="files/PatchB.zip">PatchB.zip</a> </td>
                        <td> This patch enable build "computed graphs" so you can build new "data-source". </td>
                        <td> <a href="mailto:Kamil%2eVojtisek%40gecapital%2ecom">Kamil Vojtisek</a> </td>
                        <td> 30K </td>
                        <td> 7/15/1999 </td>
                    </tr>
                </table>
            </div>

<?php endpage(__FILE__, "\$Author$", "\$Date$"); ?>

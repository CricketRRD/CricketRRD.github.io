<?php
    $gRoot = "."; 
    include("$gRoot/lib/common.inc");
    page("About RRD Tool");
?>

<p>
RRD Tool is a C program written by Tobi Oetiker, which
does all the hard work for Cricket. RRD Tool takes care of
storing and normalizing the data after the collector fetches
it, and draws the data onto graphs when the grapher asks it
to. Without RRD Tool, Cricket would be useless.

<p>
Like Cricket, RRD Tool is distributed under the GNU General
Public License. Tobi has asked authors of frontends (like Cricket) to
also include an RRD Tool logo and a link on all pages generated
using RRD Tool. The Cricket sample-config tree ships configured
to put this logo on the bottom of all the pages created by the
grapher. Please respect Tobi's wishes and leave the
logo on pages that you configure. The logo looks like this:

<p align="center">
<a href="http://ee-staff.ethz.ch/~oetiker/webtools/rrdtool">
<img src="img/rrdtool.gif"
	alt="http://ee-staff.ethz.ch/~oetiker/webtools/rrdtool"
	border="0" width="120" height="34"></a>

<p>
There's more information available about RRD Tool
from its homepage at
<a href="http://ee-staff.ethz.ch/~oetiker/webtools/rrdtool"><tt>http://ee-staff.ethz.ch/~oetiker/webtools/rrdtool</tt></a>.

<? endpage(__FILE__); ?>


<?php
    $gRoot = ".";
    include("$gRoot/lib/common.inc");
    page("Cricket Home");
?>

        <div id="about">
            <h2>About Cricket</h2>
            <p>
                Cricket is a high performance, extremely flexible system for
                monitoring trends in time-series data. Cricket was expressly
                developed to help network managers visualize and understand
                the traffic on their networks, but it can be used all kinds of
                other jobs, as well. 
            </p>
            <p>
                Cricket has two components, a collector and a grapher. The
                collector runs from <tt>cron</tt> every 5 minutes (or at a
                different rate, if you want), and stores data into a data
                structure managed by <a href="rrd.php">RRD Tool</a>. Later,
                when you want to check on the data you have collected, you can
                use a web-based interface to view graphs of the data.
            </p>
            <p>
                Cricket reads a set of config files called a config tree. The
                config tree expresses everything Cricket needs to know about
                the types of data to be collected, how to get it, and from which
                targets it should collect data. The config tree is designed to
                minimize redundant information, making it compact and easy to
                manage, and preventing silly mistakes from occurring due to
                copy-and-paste errors. 
            </p>
            <p>
                Cricket is written entirely in Perl and is distributed under
                the <a href="license.php">GNU General Public License</a>.
            </p>
        </div>

        <div id="os">
            <h2>Supported OS's</h2>
            <p>
                Cricket is developed on Solaris machines running under Apache.
                It is known to work on Linux, HP-UX, variants of BSD, and other
                operating systems. Some users are successfully using Cricket
                under Windows NT and/or Windows 2000, but at this time, no one
                has documented this.
            </p>
        </div>

        <div id="sponsors">
            <h2>Sponsors</h2>
            <p>
                Cricket was originally written for <a
                    href="http://www.webtv.net/">WebTV Networks, Inc.</a>
                It was subsequently publically released under the <a
                    href="license.php">GNU General Public License</a>. Without
                the full support of WebTV's management, Cricket would still be
                an internal tool. You can thank them for their support
                indirectly by supporting <a href="literacy">literacy
                    programs</a>, which (among other great things) increase
                WebTV's potential market!
            </p>
            <p>
                Cricket's home page is hosted by <a
                    href="http://www.sourceforge.net">SourceForge</a>.
                Cricket's <a
                    href="http://sourceforge.net/project/?group_id=1210">project
                        page</a> shows all the nifty services that we get for
                free from the SourceForge guys. Thanks a bunch for your
                support.
            </p>
            <p style="text-align: center">
                <!-- we fetch the image locally, since the PHP one is slow, but
                    we follow the rules and fetch the PHP one too. -->
                <a href="http://sourceforge.net">
                    <img src="img/sf.gif" width="88" height="31"
                        style="border: solid white 0px"
                        alt="SourceForge.Net" /></a>
                <img
                    src="http://sourceforge.net/sflogo.php?group_id=1210&amp;type=1"
                    width="0" height="0" alt="SourceForge.Net" />
            </p>
        </div>

<? endpage(__FILE__); ?>

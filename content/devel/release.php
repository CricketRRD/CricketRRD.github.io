<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("Release Checklist");
?>

		<p>
			Here's the things that I have to remember to do when making a
			release:
		</p>
		<ul>
			<li>Update CHANGES file, check it in.</li>
			<li>
				Verify that there are no modified files that should be
				checked in. <pre>cvs state</pre>
			</li>
			<li>Make the release. <pre>make-dist cricket 1.0.2</pre></li>
			<li>Post it to SourceForge</li>
			<li>
				Fetch it, extract it, and install it to find out if it
				works. <tt>:)</tt>
			</li>
			<li>
				Extract the doc directory out to the website:
				<pre>
cd /home/groups/cricket/htdocs/support
rm -rf doc
tar zxvf /tmp/cricket-1.0.2.tar.gz cricket-1.0.2/doc
mv cricket-1.0.2/doc .
rmdir cricket-1.0.2/
</pre>
			</li>
			<li>Send mail to the interested parties.</li>
		</ul>

<? endpage(__FILE__); ?>


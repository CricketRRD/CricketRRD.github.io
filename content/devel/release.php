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
	<li> Update CHANGES file, check it in.
	<p></li>
	<li> Verify that there are no modified files that should be checked
	in.
<blockquote><pre>cvs state</blockquote></pre>
	<p></li>
	<li> Make the release
<blockquote><pre>make-dist cricket 1.0.2</blockquote></pre>
	<p></li>
	<li> Post it to SourceForge
	<p></li>
	<li> Fetch it, extract it, and install it to find out if it works. <tt>:)</tt>
	<p></li>
	<li> Extract the doc directory out to the website:
<blockquote><pre>cd /home/groups/cricket/htdocs/support
rm -rf doc
tar zxvf /tmp/cricket-1.0.2.tar.gz cricket-1.0.2/doc
mv cricket-1.0.2/doc .
rmdir cricket-1.0.2/</blockquote></pre>
	<p></li>
	<li> Send mail to the interested parties.</li>
</ul>

<? endpage(__FILE__); ?>


<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("Release Checklist");
?>

Here's the things that I have to remember to do when making a
release:

<ul>
	<li> Update CHANGES file, check it in.
	<p>
	<li> Verify that there are no modified files that should be checked
	in.
<blockquote><pre>cvs state</blockquote></pre>
	<p>
	<li> Make the release
<blockquote><pre>make-dist cricket 1.0.2</blockquote></pre>
	<p>
	<li> Post it to SourceForge
	<p>
	<li> Fetch it, extract it, and install it to find out if it works. <tt>:)</tt>
	<p>
	<li> Extract the doc directory out to the website:
<blockquote><pre>cd /home/groups/cricket/htdocs/support
rm -rf doc
tar zxvf /tmp/cricket-1.0.2.tar.gz cricket-1.0.2/doc
mv cricket-1.0.2/doc .
rmdir cricket-1.0.2/</blockquote></pre>
	<p>
	<li> Send mail to the interested parties.
</ul>

<? endpage(__FILE__); ?>


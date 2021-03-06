<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("cvs-wrap");
?>

<p>
The dev-tools module has a script in it called "cvs-wrap"
which adds some features to CVS. It does this by checking
the first argument, then intercepting control if it's
one of the known extension commands. Otherwise, it simply launches
cvs as usual.
</p>

<div>
<h2> Using cvs-wrap </h2>

<p>
To use it, you need to get it in your path. The best idea
is probably to just make sure the dev-tools directory is
always in your path.
</p>

<p>
Once it's in your path, you can either remember to always
type "cvs-wrap" instead of "cvs", or you can define an alias.
In bash, it looks like this: <tt>alias cvs=cvs-wrap</tt>.
</p>
</div>

<div>
<h2>cvs-wrap commands</h2>

<p>
Here are the extensions to cvs written so far:
</p>

<div>
<h3>select</h3>

<p>
This calls the cvs-select command (assuming it is in your path),
which prints a list of files which all have a certain CVS tag.
</p>

<p>
Here's an example:
</p>

<blockquote>
<pre>% cvs tag the-tag README 
% cvs select the-tag
README</pre></blockquote>

<p>
See make-dist for an example of how these per-file tags are used.
</p>
</div>

<div>
<h3>state</h3>

<p>
This command is a pared-down version of "cvs status" which will
tell you at a gance what the heck is going on with your files.
It helps you
figure out which files need to be checked back in, and which are
out of date with respect to the repository.
</p>

<p>
For example:
</p>

<blockquote>
<pre>% cvs state
File: README            Status: Locally Modified
File: VERSION           Status: Locally Modified
File: Version.pm        Status: Locally Modified
</pre></blockquote>
</div>

<div>
<h3>up</h3>

<p>
This is a shortcut for "cvs update -d -P". The <tt>-d</tt> insures that
CVS fetches any new directories that have been created in the project
since your copy was last updated. The <tt>-P</tt> insures that empty
directories don't end up in your local copy.
</p>
</div>
</div>

<?php endpage(__FILE__, "\$Author$", "\$Date$"); ?>


<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("A note on how CVS treats directories");
?>

<p>
As it says in the <a href="http://cvsbook.red-bean.com/cvsbook.html">CVS
Book</a> CVS deals with directories with a series of hacks that mostly
do the right thing.
</p>

<p>
One place where they don't do the right thing is if you are a bozo and
accidentally check in a file inside a directory, then realize you did it
in the wrong directory, and you decide you need to "move" the directory
to somewhere else. I put move in quotes, since from CVS's point of view,
the best you can do is delete everything from the first directory,
then create another directory in the right place and put the files there.
</p>

<p>
The first directory exists in the repository for all time. It's up
to people who check out the files to decide wether they want to
fetch new directories as they pop up, and wether they want to keep
directories after they are emptied. To 
</p>

<p>
The reason I am explaining all this is that due to boneheadedness
on my part, there is an empty directory in the root of the cricket
project called "Bundle". It should not be there. It is not part of
the distribution, and if you see it there, it's because you are not
asking CVS to ignore empty directories.
</p>

<p>
I recommend that you always use <a href="cvs-wrap.php">cvs-wrap</a>'s
up command, which will take care of this for you.
</p>

<? endpage(__FILE__); ?>


<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("Notes on setting things up");
?>

		<p>
			Here are some notes I took on how to setup a CVS repository for
			stable/devel concurrent releases, including a script to merge
			changes in a regular way. These notes may be useful to other
			people learning CVS. Or they may just turn out to be useful to
			me later to understand what I did.
		</p>
		<pre>
I made a fake project called super-hello. Were it to be completed,
this project would knock gnu-hello out as the premier hello application
available on the Internet. For now, it's just a few files to play
with.

	&gt; ls -lR pre-import-super-hello/
	pre-import-super-hello:
	total 3
	-rw-r--r--   1 jallen   students       55 Feb 15 22:28 Makefile
	-rw-r--r--   1 jallen   students       26 Feb 15 22:26 README
	-rw-r--r--   1 jallen   students       95 Feb 15 22:27 hello.c

Then I made a new repository to play in. The SourceForge guys
already did this for us on cvs.cricket.sourceforge.net. This will
be a local repository, that one is a remote one. Hopefully the
differences won't be too important.

	&gt; cvs -d /home/jra/practice/newrepos init

Now, I set the CVSROOT variable:

	&gt; export CVSROOT=/home/jra/practice/newrepos 

Now, I'll import super-hello.

	&gt; cd pre-import-super-hello
	&gt; cvs import supoer-hello $LOGNAME start

Now, I want to check out a copy of it. We want this copy in a directory
called main, since there are no branches yet.

	&gt; cd ..
	&gt; cvs co -d main super-import

Now, we make a root tag for the branch:

	&gt; cd main
	&gt; cvs tag v_1_0_x_root
	cvs tag: Tagging .
	T Makefile
	T README
	T hello.c

The next step is to make the branch:

	&gt; cvs tag -b v_1_0_x     
	cvs tag: Tagging .
	T Makefile
	T README
	T hello.c

The final step is to make a merge base tag, which will be used by the
merge script to find the most recently merged stuff. By (my) convention,
merge base tags are the name of the branch, followed by a "_m" and
a serial number. This base one will be v_1_0_x_m0, then.

We want to tag to only go on the branch, so we need to check out the
branch now. We put it into a directory called stable, since changes
made onto this branch are supposed to be the little bugfix
ones, and changes on the main branch are for new development.

	&gt; cd ..
	&gt; cvs co -d stable -r v_1_0_x super-hello

The result is that I now have two copies of the stuff, one under
main/ and one under stable/.

Now for the merge base tag:

	&gt; cd stable
	&gt; cvs tag v_1_0_x_m0

Now we are ready to start hacking. Make a change to stable and
check it in:

	&gt; vi README
	&gt; cvs ci

To merge the change over to main, use the merge-changes program
from the dev-tools module:

	&gt; cd ..	(to workspace directory)
	&gt; cvs co dev-tools
		(this module is checked into the Cricket project's repository)
	&gt; cd stable
	&gt; ../dev-tools/merge-changes	(you could add dev-tools to $PATH)
	&lt;output goes here&gt;

You need to be in either the main or stable directory when you
run merge-changes. It assumes your directory structure will be
like this:

	workspace/ 	(this can actually be named anything)
		stable/
		main/
		dev-tools/

merge-changes will not work unless your main tree is up-to-date
and there are no uncommited changes. This is because the last step
to merge-changes is a checkin, and it wouldn't be good for it to
commit stuff you were still working on.

If merge-changes makes a conflict when it's doing the merge, it will
abort the commit, and make you clean up the mess. You will need to
commit the fixed merge yourself.

Bugs: If there were no changes, merge-changes will still make
the new tag. It should probably be more careful about this.

Setting up commit-email
-----------------------

To setup commit email, first get a copy of the module called
CVSROOT:

	&gt; cd ..  (to workspace directory)
	&gt; cvs co CVSROOT

Caution: No one but the project administrator should be messing
with these files. They are very sensitive to goofed up changes.

Now, write a script which takes the info from the CVS system
and formats it nicely. Mine is called format-log, and it's checked
into the Cricket repository under the CVSROOT module. Put your script
under the CVSROOT directory you just made, and add it:

	&gt; cd CVSROOT
	&gt; cp /tmp/fetch-log .
	&gt; cvs add fetch-log

Now, you need to tell CVS that it should de-RCSify format-log
after you commit it. So, add this line to checkoutlist:

	format-log      Could not check out format-log.

Now, tell CVS to use your script to format a log message and
send it upon every checkin. Add this line to the loginfo file:

	ALL $CVSROOT/CVSROOT/format-log list-name@host.com '%{sVv}' 
		| /usr/lib/sendmail -t

It should all be on one line.

Finally, check in your changes:

	&gt; cvs ci

If there are any errors in your format-log script, you should see
them now. Remember, your script will be run in the context of
the remote machine, with the privledges of the user doing the commit.
If Perl is installed in /usr/local/bin on your test machine, but in
/usr/bin on the CVS server, then you'll be very sad and bash your head
against a wall for a long time. Not that I did that. :)
		</pre>

<?php endpage(__FILE__); ?>


<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("How to be a Cricket Developer");
?>

<p>
It's simple:
</p>

<p>
You need to get access, then you need to check out a branch,
then you need to make changes and test them, then you need
check in your changes. If you check things into the stable
branch (in which case, you are probably named Jeff Allen),
then you sometimes need to merge your changes too.
</p>

<p>
See? It simple!
</p>

<div>
<h2>Getting Access</h2>

<p>
Here are some brief notes on how to access Cricket's CVS repository.
</p>

<p>
First, please review
<a href="http://sfdocs.sourceforge.net/sfdocs/display_topic.php?topicid=14">this page</a>,
which talks about how to talk to CVS remotely.
</p>

<p>
To use get access to the CVS repository, you need to:
</p>

<ol>
	<li> Get a <a href="https://sourceforge.net/account/register.php">
		SourceForge account</a>.</li>
	<li> Send mail to one of the Cricket
		<a href="mailto:jeff.allen@acm.org">Project Admins</a>
		to get added as a member of the
		<a href="https://sourceforge.net/project/?group_id=1210">
		Cricket project</a>.</li>
	<li> Use "ssh-keygen" on your local machine to create an RSA
		public/private key, protected by a passphrase.</li>
	<li> Go to the account maintenance page, and click on Edit Keys,
		then paste in the contents of the identity.pub file you made
		in step 3. There is a delay until this kicks in. Until it does,
		you'll need to type your password for each CVS command.</li>
	<li> Start your shell under ssh-agent. For instance,
		<tt>ssh-agent bash</tt>.</li>
	<li> Set the environment variable CVS_RSH to <tt>ssh</tt>.</li>
	<li> Set the environment variable CVSROOT to 
		<tt>username@cvs.cricket.sourceforge.net:/cvsroot/cricket</tt>.</li>
</ol>

<p>
For more information about all of these steps, see the
<a href="http://sfdocs.sourceforge.net/sfdocs/">SourceForge Docs</a>.
</p>

<p>
If you need to give ssh some options to make it work right,
you'll need to use ssh-wrap, which is in the dev-tools module.
Read the comments near the start of ssh-wrap to understand how to
use it.
</p>
</div>

<div>
<h2> Branches </h2>

<p>
Cricket has two branches, a development branch, and a stable branch.
Most people will only need to check out the development branch. The only
person who should be checking anything into the stable branch is
Jeff Allen, but anyone who's interested is welcome to check it out.
</p>

<p>
To fetch the development branch, use a set of commands like this:
</p>

<p>
<pre>
	mkdir workspace
	cd workspace
	cvs -d$LOGNAME@cvs.cricket.sourceforge.net:/cvsroot/cricket co -d devel cricket
</pre>
</p>

<p>
This will put the tip-of-tree sources to Cricket into a directory
named workspace/devel. There you can work on them using the normal CVS
techniques.
</p>

<p>
To fetch the stable branch, use commands like this:
</p>

<p>
<pre>
	cd workspace
	cvs -d$LOGNAME@cvs.cricket.sourceforge.net:/cvsroot/cricket co -r v_1_0_x -d stable cricket 
</pre>
</p>
</div>

<div>
<h2>Branch and tag structure</h2>

<p>
Here's a picture of how things look so far:
</p>

<p>
<pre>
        start
          |
          |
      v_1_0_x_root
          |
          |
          |\
          | \ v_1_0_x
          |  \
              \
        devel  \
         tip   | v_1_0_x_m0
               |

              stable
               tip
</pre>
</p>

<div>
<h3>The Gory Details</h3>

<p>
The system gave me "start" for free, upon importing Cricket. The
<a href="http://cvsbook.red-bean.com/">CVS book</a> recommends
putting an "root" tag before making a branch, which is why the
"v_1_0_x_root" tag is there. The branch is named "v_1_0_x", since that's
where I will be releasing the 1.0.x line of Cricket releases
from.
</p>

<p>
The "v_1_0_x_m0" tag will be used to compute diffs when we are moving
changes from the stable version to the development version. After
each merge is done, I'll add a new tag (_m1, _m2, etc).
</p>

<p>
When I make a release on the stable branch, I'll make a tag
named v_1_0_0, followed by v_1_0_1, etc.
</p>
</div>
</div>

<? endpage(__FILE__); ?>


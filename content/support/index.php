<?php
    $gRoot = "..";
    include("$gRoot/lib/common.inc");
    page("Cricket Support");
?>

		<p>
			If you are having a problem with Cricket you can get help from
			these places:
		</p>
		<ul>
			<li>the <a href="doc">documentation</a></li>
			<li>the <a href="FAQ">FAQ</a></li>
			<li>other users, via the mailing lists and IRC</li>
			<li>companies who offer <a href="commercial.php">Cricket support</a></li>
		</ul>

		<h3>Mailing Lists</h3>

		<p>There are four mailing lists related to Cricket:</p>
		<ul>
			<li><a href="http://lists.sourceforge.net/mailman/listinfo/cricket-users">cricket-users@lists.sourceforge.net</a></li>
			<li><a href="http://lists.sourceforge.net/mailman/listinfo/cricket-announce">cricket-announce@lists.sourceforge.net</a></li>
			<li><a href="http://lists.sourceforge.net/mailman/listinfo/cricket-developers">cricket-developers@lists.sourceforge.net</a></li>
			<li><a href="http://lists.sourceforge.net/mailman/listinfo/cricket-commits">cricket-commits@lists.sourceforge.net</a></li>
		</ul>
		<p>
			You can subscribe to a list by clicking on one of the links
			above and following the instructions. Please note, your mailling
			list password <b>will</b> be sent to you on a regular basis, so
			choose a simple throwaway one.
		</p>
		<p>
			The users list is for open discussion of Cricket, how to use it,
			and how to extend it. The announce list is a low-traffic,
			moderated list that lets maintainers announce new versions of
			Cricket and other packages related to Cricket. The developers
			and commits lists are for messages about hacking the next
			version of Cricket. Only the hardcore geeks need to subscribe to
			those lists.
		</p>

		<h3>IRC</h3>
		<p>
 			Use any IRC client of your choice. Connect to this server:
			<tt>irc.slashnet.org</tt>. Choose a nick and register it by typing:
			<tt>/msg NickServ HELP</tt>. This will show you the options
			and help you register your nickname. Then join the channel:
 			<tt>/join #cricket</tt>
		</p>

		<div>
			<h2>Archives</h2>
			<p>
				There are archives from April 1999 to late January 2000 <a
				href="cricket-users-archive">here</a>, or in a compressed
				archive, <a
				href="cricket-users-archive/cricket-users.gz">here</a>.
			</p>
			<p>
				After January, 2000, the Cricket mailing lists moved to
				Sourceforge, and are available on GeoCrawler:
			</p>
			<ul>
				<li><a href="http://www.geocrawler.com/lists/3/SourceForge/1089/0/">cricket-users</a></li>
				<li><a href="http://www.geocrawler.com/lists/3/SourceForge/1360/0/">cricket-announce</a></li>
				<li><a href="http://www.geocrawler.com/lists/3/SourceForge/1745/0/">cricket-developers</a></li>
				<li><a href="http://www.geocrawler.com/lists/3/SourceForge/1744/0/">cricket-commits</a></li>
			</ul>
		</div>

		<div>
			<h2>Contributed Stuff</h2>
			<p>
				There is a collection of contributed stuff (scripts,
				patches, example configuration trees) at the <a
				href="http://www.certaintysolutions.com/tech-advice/cricket-contrib/">Cricket Contributed Software</a> website.
			</p>
			<p>
				Our thanks go out to <a href="http://www.gnac.com">GNAC</a>
				for hosting the site.
			</p>
		</div>

		<div>
			<h2>Talk Slides</h2>
			<p>
				If you have attended one of Jeff Allen's talks on Cricket,
				and want to find the slides, check this <a
				href="talks">directory</a>.
			</p>
		</div>

		<div>
			<h2>Developing New Versions</h2>
			<p>
				If you are really stumped by something, it just <b>may</b>
				be a bug. <tt>:)</tt>
			</p>
			<p>
				In that case, your best bet is to visit the <a
				href="../devel">Cricket Developers Pages</a> and learn how
				to be a developer, to fix your own bug, and help other
				Cricket users out by giving them new features you are
				interested in adding. Or you can also file a <a href="bugreq.php">bug report</a> and hopefully someone will be able to help you out.
			</p>
		</div>

<?php endpage(__FILE__, "\$Author$", "\$Date$"); ?>

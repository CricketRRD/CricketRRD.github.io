<?php

function navBit($link, $name, $sep) {
	echo "<a href=\"$link\">[ $name ]</a> $sep\n";
}

function nav() {
	global $gRoot;
	echo "<div class=\"nav\">";
	navBit("$gRoot", "home", "|");
	navBit("$gRoot/download/", "download", "|");
	navBit("$gRoot/support/", "support", "|");
	navBit("$gRoot/literacy/", "literacy", "");
	echo "</div>";
}

function page($title) {
	global $gRoot;
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n";
	echo "    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
	echo "<html>\n";
	echo "    <head>\n";
	echo "        <title> $title </title>\n";
	echo "        <link rel=\"stylesheet\" type=\"text/css\"" .
			" href=\"" . $gRoot . "/lib/cricket.css\" />\n";
	echo "     </head>\n";
	echo "     <body>\n";
	
	nav();
	echo "<h1>$title</h1>\n";
}

function endpage($file) {

	echo "        <div class=\"footer\">\n";
	nav();
	echo "            <address>\n";

	$owner = fileowner($file);
	$owner = uid2name($owner);

	$date = strftime("%Y-%m-%d", filectime($file));

	echo "Last modified on $date by $owner.\n";
	echo "            </address>\n";
	echo "        </div>\n";
	echo "    </body>\n";
	echo "</html>\n";
}

function uid2name($uid) {
  $ent   = posix_getpwuid($uid);
  $name  = $ent["name"];
  $gecos = $ent["gecos"];
  return "$gecos &lt;<a href=\"mailto:$name@users.sf.net\">$name@users.sf.net</a>&gt;";
}

function ex($ex) {
	echo "<p><blockquote><pre>$ex</pre></blockquote></p>";
}

?>

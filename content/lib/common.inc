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

function page() {
	global $gRoot;

	$title = func_get_arg(0);

	if (func_num_args() >= 2) {
	  $css = func_get_arg(1);
	} else {
	  $css = $gRoot . "/lib/cricket.css";
	}

	header("Content-Type: text/html; charset=utf-8");

	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n";
	echo "    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
	echo "<html>\n";
	echo "    <head>\n";
	echo "        <title>$title</title>\n";
	echo "        <link rel=\"stylesheet\" type=\"text/css\"" .
			" href=\"" . $css . "\" />\n";
	echo "     </head>\n";
	echo "     <body>\n";
	
	nav();
	echo "<h1>$title</h1>\n";
}

function endpage($file, $author, $date) {
	echo "        <div class=\"footer\">\n";
	nav();
	echo "            <address>\n";

	# Strip leading and trailing gunk off "$Author$"..
	$author = substr_replace($author, "",  0, 9); # First 9...
	$author = substr_replace($author, "", -2, 2); # Last 2...

	# Strip leading and trailing gunk off "$Date$"..
	$date = substr_replace($date, "",  0, 7); # First 7...
	$date = substr_replace($date, "", -2, 2); # Last 2...

	# Fake an SF.net email address for last comitter...
	$address = "&lt;<a href=\"mailto:$author@users.sf.net\">$author@users.sf.net</a>&gt;";

	echo "Last modified at $date UTC by $address.\n";
	echo "            </address>\n";
	echo "        </div>\n";
	echo "    </body>\n";
	echo "</html>\n";
}

function ex($ex) {
	echo "<p><blockquote><pre>$ex</pre></blockquote></p>";
}

?>

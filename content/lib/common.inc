<?php
function navBit($link, $name, $title, $sep) {
  echo "      <a href=\"$link\" title=\"$title\">[&nbsp;$name&nbsp;]</a> $sep\n";
}

function nav() {
  global $gRoot;
  echo "    <div class=\"nav\">\n";
  navBit("$gRoot",           "home",     "Go to the Cricket Home Page", "|");
  navBit("$gRoot/download/", "download", "Download Cricket",            "|");
  navBit("$gRoot/support/",  "support",  "Support for Cricket",         "|");
  navBit("$gRoot/contrib/",  "contrib",  "Contributed Utilities",       "|");
  navBit("$gRoot/literacy/", "literacy", "Support Literacy Programs!",   "");
  echo "    </div>\n";
}

function page($title) {
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
  echo "  <head>\n";
  echo "    <title> $title </title>\n";
  echo "    <link rel=\"stylesheet\" type=\"text/css\"" .
      " href=\"" . $css . "\" />\n";
  echo " </head>\n";
  echo " <body>\n";
  
  nav();
  echo "    <h1>$title</h1>\n";
}

function endpage($file, $author, $date) {
  $gAuthors = array( # Add your uid<=>Name when you update any docs.
                    "jra"     => "Jeff R. Allen",
                    "tbe"     => "Terje Bless",
                    "mikehan" => "Michael Han"
                   );

  echo "    <div class=\"footer\">\n";
  nav();
  echo "      <address>\n";

  # Strip leading and trailing gunk off "$Author$"..
  $author = substr_replace($author, "",  0, 9); # First 9...
  $author = substr_replace($author, "", -2, 2); # Last 2...

  # Strip leading and trailing gunk off "$Date$"..
  $date = substr_replace($date, "",  0, 7); # First 7...
  $date = substr_replace($date, "", -2, 2); # Last 2...

  # Fake an SF.net email address for last comitter...
  $address = "&lt;<a href=\"mailto:$author@users.sf.net\">$author@users.sf.net</a>&gt;";

  if (array_key_exists($author, $gAuthors)) {
    echo "Last modified at $date UTC by $gAuthors[$author] $address.\n";
  } else {
    echo "Last modified at $date UTC by $address.\n";
  }
  echo "      </address>\n";
  echo "    </div>\n";
  echo "  </body>\n";
  echo "</html>\n";
}

function ex($ex) {
  echo "<p><blockquote><pre>$ex</pre></blockquote></p>";
}

?>

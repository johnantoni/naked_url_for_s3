<?php
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$referred = $_SERVER['HTTP_REFERER']; // a quirky spelling mistake that stuck in php

print "<strong>Display IP address:</strong><br />\n";
print "$ip<br /><br />\n";
print "<strong>More detailed host address:</strong><br />\n";
print "$hostaddress<br /><br />\n";
print "<strong>Display browser info</strong>:<br />\n";
print "$browser<br /><br />\n";
print "<strong>Where you came from (if you clicked on a link to get here</strong>:<br />\n";
if ($referred == "") {
print "Page was directly requested";
}
else {
print "$referred";
}

// header("Location: http://www.tripwiremagazine.com/");

?>

<?php
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
print "<br/><br/><strong>".$url."</strong>";

$url="http://www.".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
print "<br/><br/><strong>".$url."</strong>";

?>

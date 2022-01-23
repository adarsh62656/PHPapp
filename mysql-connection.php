<?php
$link = mysql_connect('localhost','root','gnu123');
if ($link){
	die('Could not Connect: '.mysql_error());
}
echo "Connected Successfully";
mysql_close($link);
?>


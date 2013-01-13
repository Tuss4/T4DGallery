<?php
/*
Tuss4 Gallery v1.0
*/
//Database Variables
$host = "localhost";
$db ="yourdb";
$user ="yourname";
$pass ="yourpassword";
$connect = mysql_connect($host, $user,$pass);
if (!$connect)
	{
	die('Could not connect: '.mysql_error());
	}
else
	{
	echo "T4D Gallery <br /><br />";
	}
mysql_select_db($db,$connect);
?>
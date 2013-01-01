<?php
/*
Tuss4 Gallery v1.0
*/
$dbuser = ""; //set database user
$dbpass = ""; //set database pass
$dbname = ""; //set database name
$connect = mysql_connect("localhost", $dbuser,$dbpass);
if (!$connect)
	{
	die('Could not connect: '.mysql_error());
	}
else
	{
	echo "T4D Gallery <br /><br />";
	}
mysql_select_db($dbname,$connect);
?>
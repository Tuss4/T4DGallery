<?php
/*
Tuss4 Gallery v1.0
*/
$connect = mysql_connect("localhost", "tuss4_test","testdb");
if (!$connect)
	{
	die('Could not connect: '.mysql_error());
	}
else
	{
	echo "T4D Gallery <br /><br />";
	}
mysql_select_db("tuss4_gallery",$connect);
?>
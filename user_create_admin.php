<?php
require('sqlconnect.php');

$add = "INSERT INTO Users (user, pass) 
VALUES ('$_POST[user]','$_POST[pass]')";
if(!mysql_query($add,$connect))
	{
		echo "<br />Sorry, the account was not created: ".mysql_error();
	}
else
	{
		echo $_POST["user"].", your account was created successfully!";
	}

mysql_close($connect);
?>
<?php
session_start();
require('sqlconnect.php');
$getit = mysql_query("SELECT * FROM Users
WHERE user='$_POST[username]'
AND pass='$_POST[password]'");
while($yeh = mysql_fetch_array($getit))
	{
		echo"Welcome back, ".$yeh[user]."! What's good?<br />";
		$_SESSION['user'] = $yeh[user];
		echo "<a href='user_admin_upload_form.php?u=".$yeh[user]."'>Upload an image?</a>";
	}
mysql_close($connect);
?>
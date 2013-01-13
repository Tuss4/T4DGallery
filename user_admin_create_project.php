<?php
/*
Just the server side script, for creating a new project category.
*/
require("sqlconnect.php");
$addproject = "INSERT INTO Projects (projectname,projectauthor,projectdescription)
VALUES ('$_POST[prjname]','$_POST[prjauthor]','$_POST[prjdescription]')";
if(!mysql_query($addproject,$connect))
	{
		echo"There was an error adding the project to the database. ".mysql_error();
	}
else
	{
		echo"The project was successfully added.";
	}
mysql_close($connect);
?>
<?php
require("sqlconnect.php");
//image table setup
$createimagetable = "CREATE TABLE Images
(
imageID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(imageID),
imageNAME varchar(50),
description text,
who varchar(50),
project varchar(255)
)
";
//user table setup
$createusertable = "CREATE TABLE Users
(
userID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(userID),
user varchar(50),
pass varchar(50)
)
";
//project category table setup
$createprojecttable = "CREATE TABLE Projects
(
projectID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(projectID),
projectname varchar(255),
projectauthor varchar(15),
projectdescription text
)
";
//Images Table Creation
if(!mysql_query($createimagetable,$connect))
	{
		echo "There was an error creating the Images Table: ".mysql_error()."<br />";
	}
else
	{
		echo "The Images Table was added to the gallery database, yo!<br />";
	}
//Users Table Creation
if(!mysql_query($createusertable,$connect))
	{
		echo "There was an error creating the Users Table: ".mysql_error()."<br />";
	}
else
	{
		echo "The Users Table was added to the gallery database, yo!<br />";
	}
//Projects Table Creation
if(!mysql_query($createprojecttable,$connect))
	{
		echo "There was an error creating the Projects Table: ".mysql_error()."<br />";
	}
else
	{
		echo "The Projects Table was added to the gallery database, yo!<br />";
	}
//Close Connection
mysql_close($connect);
?>
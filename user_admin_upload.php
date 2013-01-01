<?php
	/*
	Tuss4 Gallery v1.0
	*/
	if(file_exists("upload/".$_FILES["file"]["name"]))
		{
		echo "This file already exists, brah!";
		}
	else
		{
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
		echo "The file has been uploaded to: upload/".$_FILES["file"]["name"].", broseph!";
		$path = $_FILES['file'];
		$img = $path['name'];
		$desc = $_POST['description'];
		$user = $_POST['user'];
		$connect = mysql_connect("localhost","tuss4_test","testdb");
		if(!$connect)
			{
			die('Could not connect: '.mysql_error());
			}
		else
			{
			echo "<br />Connected to mysql, yo!";
			}
		}
		mysql_select_db("tuss4_gallery",$connect);
		$add = "INSERT INTO Images (imageNAME, description, who)
		VALUES
		('".mysql_real_escape_string($img)."','$_POST[description]','$_POST['user']')";
		if(!mysql_query($add,$connect))
			{
			echo "<br />There was an error adding the image to the database: ".mysql_error();
			}
		else
			{
			echo "<br />The image was added to the database, brosaurus! Check out the <a href='galleryv1.php'>gallery</a>!";
			echo "<br /><a href='user_admin_upload_form.php?u=".$user."'>Upload another image?</a>";
			}
		mysql_close($connect);
?>
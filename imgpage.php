<html>
<head>
</head>
<body>
<?php
if(file_exists("upload/".htmlspecialchars($_GET["img"])))
	{
	echo "<img src='upload/".htmlspecialchars($_GET["img"])."' />";
	$desc = htmlspecialchars($_GET[img]);
	require('sqlconnect.php');
	$script = mysql_query("SELECT * FROM Images
	WHERE imageNAME='$desc'");
	while($tion = mysql_fetch_array($script))
		{
			echo"<br /> Uploaded by: ".$tion['who'];
			echo "<br />".$tion['description'];
		}
	mysql_close($connect);
	}
else
	{
	echo "File not found";
	}
?>
<br />
<a href="galleryv1.php">Return to gallery.</a>
</body>
</html>
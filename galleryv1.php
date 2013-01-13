<html>
<head>
<style type="text/css">
img {
	max-width: 25%;
	padding: .1%;
}
img:hover {
	background-color: #ff9933;
}

</style>
</head>
<body>
<?php
/*
We're fetching all the images in our gallery and listing them below. 
Using the css above we create tiny thumbnails that are responsive to screen size.
The thumbnails then link to a full size image on the image page.
*/
require("sqlconnect.php");
$imgnames = mysql_query("SELECT imageNAME FROM Images");
while ($gal = mysql_fetch_array($imgnames))
	{
	echo "<a href='imgpage.php?img=".$gal['imageNAME']."'><img src='upload/".$gal['imageNAME']."' alt='".$gal['imageNAME']."' title='".$gal['imageNAME']."' /></a> ";
	}
?>
</body>
</html>
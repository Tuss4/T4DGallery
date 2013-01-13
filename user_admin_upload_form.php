<?php
$u = $_GET['u'];
?>
<html>
<head>
</head>
<body>
<form action="user_admin_upload.php" method="post" enctype="multipart/form-data">
<label>Project: </label>
<select name='project'>
<?php
require("sqlconnect.php");
$option = mysql_query("SELECT * FROM Projects");
while($getopt = mysql_fetch_array($option))
	{
		echo "<option value='$getopt[projectname]'>$getopt[projectname]</option>";
	}
?>
</select><br />
<label for="user">User: </label>
<input type="text" name="user" value="<?php echo $u; ?>" /><br />
<label for="description">Description: </label>
<input type="text" name="description" /><br/>
<label for="file">Filename: </label>
<input type="file" name="file" id="file" /><br />
<input type="submit" name="submit" value="Upload" />
</form><br />
</body>
</html>
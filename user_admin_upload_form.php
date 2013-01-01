<?php
$u = $_GET['u'];
?>
<html>
<head>
</head>
<body>
<form action="user_admin_upload.php" method="post" enctype="multipart/form-data">
<label for="user">User: </label>
<input type="text" name="user" value="<?php echo $u; ?>" /><br />
<label for="description">Description: </label>
<input type="text" name="description" /><br/>
<label for="file">Filename: </label>
<input type="file" name="file" id="file" /><br />
<input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>
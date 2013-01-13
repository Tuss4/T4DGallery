<form action="user_admin_create_project.php" method="post">
<label for="prjname">Project Name: </label><input type="text" name="prjname"><br />
<label for="prjauthor"> Project Author: </label><input type="text" name="prjauthor" value="<?php echo $_GET['user']; ?>"><br />
<label for="prjdescription">Project Description: </label><textarea name="prjdescription"></textarea><br />
<input type="submit" value="Create">
</form>
<?php  
	include("function.php");
	if(isset($_POST['submit']))
	{
		$qry = "INSERT INTO `user` VALUES('".mysqli_real_escape_string($link,$_POST['userid'])."','".md5(md5($_POST['userid']).$_POST['password'])."','admin')";
		echo $qry;
		$result = mysqli_query($link,$qry);
		$qry = "INSERT INTO `admins`(`userid`,`name`) VALUES('".mysqli_real_escape_string($link,$_POST['userid'])."','".mysqli_real_escape_string($link,$_POST['name'])."')";
		$result = mysqli_query($link,$qry);
		
	}
?>
<form method="POST">
	<input name="userid" type="text">
	<input name="name" type="text">
	<input name="password" type="password">
	<input type="submit" name="submit" value="submit"/>
</form>
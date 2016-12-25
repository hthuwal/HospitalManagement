<?php  
	include("function.php");
	if(isset($_POST['submit']))
	{
		$qry = "INSERT INTO `user` VALUES('".mysqli_real_escape_string($link,$_POST['userid'])."','".md5(md5($_POST['userid']).$_POST['password'])."','doctor')";
		echo $qry;
		$result = mysqli_query($link,$qry);
		$qry = "INSERT INTO `doctor`(`userid`) VALUES('".mysqli_real_escape_string($link,$_POST['userid'])."')";
		$result = mysqli_query($link,$qry);
		
	}
?>
<form method="POST">
	<input name="userid" type="text">
	<input name="password" type="password">
	<input type="submit" name="submit" value="submit"/>
</form>
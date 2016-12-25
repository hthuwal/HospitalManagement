<?php  	
	session_start();
	include("function.php");
	$qry="SELECT * FROM `user` WHERE `userid`='".mysqli_real_escape_string($link,$_POST['userid_admin'])."' AND `password`='".md5(md5($_POST['userid_admin']).$_POST['password_admin'])."' AND `type`='admin'";
	
	$result = mysqli_query($link,$qry);
	$row=mysqli_num_rows($result);
	if($row==1)
	{

		$_SESSION['userid']=$_POST['userid_admin'];
		$_SESSION['type']='admin';
		$qry="SELECT `aid` from `admins` where `userid`='".$_POST['userid_admin']."'";
		$result=mysqli_query($link,$qry);
		$row=mysqli_fetch_array($result);
		$_SESSION['aid']=$row['aid'];
		echo 1;
	}
	else
	{
		echo 0;
	}
?>
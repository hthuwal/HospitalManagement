<?php 
	session_start();
	include("connection.php");
	if(isset($_POST['submit'])&&$_POST['submit']=="LogIn")
	{
		
		if($_POST['userid']=="")
		{
			$nouser="<div class='alert alert-warning'>Please Enter a username</div>";
		}
		if($_POST['password']=="")
		{
			$nopassword="<div class='alert alert-warning'>Please Enter a password</div>";
		}
		if($_POST['userid']!="" && $_POST['password']!="")
		{
			$qry="SELECT * FROM `user` WHERE `userid`='".mysqli_real_escape_string($link,$_POST['userid'])."' AND `password`='".md5(md5($_POST['userid']).$_POST['password'])."' AND `type`='doctor'";
			// echo $qry; 
			$result=mysqli_query($link,$qry);
			$row=mysqli_num_rows($result);
			if($row==1)
			{
				$_SESSION['userid']=$_POST['userid'];
				$_SESSION['type']='doctor';
				$success="<div class='alert alert-success'>You Have Successfully Logged In!</div>";
				$qry="SELECT `did` from `doctor` where `userid`='".$_POST['userid']."'";
				$result=mysqli_query($link,$qry);
				$row=mysqli_fetch_array($result);
				$_SESSION['did']=$row['did'];
				echo '<meta http-equiv="refresh" content="1;url=doctor.php">';
			}
			else
			{
				$wrong="<div class='alert alert-danger'>Please enter correct username and password!</div>";
			}
		}
	}
?>
<?php  
	include("connection.php");
	$qry="SELECT  *  from `user` WHERE `userid`='".$_POST['userid']."'";
	$result=mysqli_query($link,$qry);
	$row=mysqli_num_rows($result);
	echo $row;
?>
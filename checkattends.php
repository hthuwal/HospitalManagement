<?php  
	session_start();
	include("connection.php");
	$qry="SELECT * from `attends` where `pid`='".$_SESSION['editpid']."' AND `end_date` IS NULL";
	$result=mysqli_query($link,$qry);
	if(mysqli_num_rows($result))
		echo "0";
	else
		echo "1";
?>
<?php
	session_start();
	include("connection.php");
	$ans=array();
	if(isset($_SESSION['pid']))
		$pid = $_SESSION['pid'];
	else if(isset($_SESSION['editpid']))
		$pid = $_SESSION['editpid'];

	$qry="SELECT `name`,`did` FROM `doctor` WHERE `specialization`='".mysqli_real_escape_string($link,$_POST['type'])."' AND `did` NOT IN (SELECT `did` FROM `appointment` WHERE `pid`='".$pid."' AND `status`='pending')";
	$result=mysqli_query($link,$qry);
	while($row=mysqli_fetch_array($result))
	{
		array_push($ans,$row[0]."~".$row[1]);
	}
	echo json_encode($ans);
?>
<?php
	session_start();
	include("connection.php");
	$ans=array();
	$pid = $_SESSION['editpid'];

	$qry="SELECT `name`,`did` FROM `doctor` WHERE `specialization`='".mysqli_real_escape_string($link,$_POST['doctype'])."'";
	$result=mysqli_query($link,$qry);
	while($row=mysqli_fetch_array($result))
	{
		array_push($ans,$row[0]."~".$row[1]);
	}
	echo json_encode($ans);
?>
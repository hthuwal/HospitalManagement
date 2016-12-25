<?php  
	include("connection.php");
	function get_all($table,$id,$value)
	{
		include("connection.php");
		$qry="SELECT * FROM `".$table."` WHERE `".$id."`='".$value."' order by ".$id." desc";
		//echo $qry;
		$result=mysqli_query($link,$qry);
		$details=array();
		$i=0;
		while($row = mysqli_fetch_array($result))
		{
			$details[$i]=$row;
		}	
		return $details;
	}
	function updatevalue($table,$id,$valueid,$key,$value)
	{
		include("connection.php");
		try{
			$qry="UPDATE `".$table."` SET `".$key."`='".$value."' WHERE `".$id."`='".$valueid."'";
			//echo $qry;
			$result = mysqli_query($link,$qry);
		}
		catch(exception $e)
		{
			return 0;
			die("There was some problem updating values:");
		}
		return 1;
	}

?>
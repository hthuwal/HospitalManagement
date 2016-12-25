<?php 
session_start();
include("function.php");

if(isset($_SESSION['type']) and $_SESSION['type']=="admin" and isset($_SESSION['aid']) and isset($_SESSION['userid']))
{
	$details=get_all($_SESSION['type']."s"	,'aid',$_SESSION['aid']);
	$adminname=ucwords($details[0]['name']);
	$adminaddress=$details[0]['address'];

	$adminsex=ucwords($details[0]['sex']);
	$admindob=$details[0]['dob'];

	if($admindob!="0000-00-00")
	{
		$admindob=date_create($admindob);
		$admindob=date_format($admindob,"j F, Y");
	}
	else
	{
		$admindob="";
	}
	$adminmobile=$details[0]['mobile'];
	$admindoj=$details[0]['doj'];
	if($admindoj!="0000-00-00")
	{
		$admindoj=date_create($admindoj);
		$admindoj=date_format($admindoj,"j F Y");
	}
	else
	{
		$admindoj="";
	}
	$adminsalary=$details[0]['salary'];

}
else
{
	echo "Please Login First";
	echo '<meta http-equiv="refresh" content="1;url=index.php">';
	sleep(1);
	die();
}
if(isset($_POST['action'])and $_POST['action']=="save")
{

	$admindob=new DateTime(mysql_real_escape_string($_POST['admindob']));
	$admindob = date_format($admindob,'Y-m-d');

	$qry = "UPDATE `admins` SET `dob`='".$admindob."',`name`='".$_POST['adminname']."',`address`='".mysqli_real_escape_string($link,$_POST['adminaddress'])."',`mobile`='".mysqli_real_escape_string($link,$_POST['adminmobile'])."' WHERE `aid`='".$_SESSION['aid']."'";
	echo $qry;
	$result = mysqli_query($link,$qry);

	if(isset($_POST['adminsex']))
	{
		$qry="UPDATE `admins` SET `sex`='".$_POST['adminsex']."'";
		$result = mysqli_query($link,$qry);
	}
	header('Location:admin.php');
}
if(isset($_POST['submit'])and $_POST['submit']="Log Out")
{
	session_destroy();
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Admin Page</title>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Materialize -->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">


	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button { 
		-webkit-appearance: none; 
		margin: 0; 
	}
	body{
		padding-top: 50px;
		min-width: 100%;
		max-width: 100%;
		background-color: #F8F8F8;
	}
	.container{
		min-width: 100%;
	}
	.navbar-brand{
		font-size:1.8em;
	}
	#topContainer{


		width:100%;
		padding-top:7%;
		background-size: cover;
	}
	.jp{
		padding-left:15px;
	}
	.mybtn{
		padding-left:0px;
		padding-right: 10px;
	}
	.hc{
		padding-left:50px;
	}
	#logout{
		padding-left:5px;
		text-transform: capitalize;
		padding-right:5px;
	}
	.aadi{
		padding-right:50px;
	}
	#myadminlogin{
		display:none;
	}
	.fixed{
    
    position: fixed;
  }
</style>
</head>
<body>

	<?php include('header.php') ?>

	<div class="container" id="topContainer">
		<div class="row">
			<div class="col s12 m10 offset-m1">
				<ul class="mytr collapsible popout" data-collapsible="accordion">
					<li>
						<div class="collapsible-header"><i class="material-icons">account_circle</i>Profile</div>
						<div class="collapsible-body">
							<table class=" bordered responsive-table">

								<tbody id="mybody1" >

									<tr>
										<td class="hc"><b>Name</b></td>
										<td><i class="material-icons">trending_flat</i></td>
										<td><?php if(isset($adminname)) echo ucwords($adminname) ?></td>
									</tr>
									<tr>
										<td class="hc"><b>Date of Birth</b></td>
										<td><i class="material-icons">trending_flat</i></td>
										<td><?php if(isset($admindob)) echo $admindob ?></td>
									</tr>
									<tr>
										<td class="hc"><b>Sex</b></td>
										<td><i class="material-icons">trending_flat</i></td>
										<td><?php if(isset($adminsex)) echo ucwords($adminsex) ?></td>
									</tr>
									<tr>
										<td class="hc"><b>Address</b></td>
										<td><i class="material-icons">trending_flat</i></td>
										<td><?php if(isset($adminaddress)) echo $adminaddress ?></td>
									</tr>
									<tr>
										<td class="hc"><b>Mobile</b></td>
										<td><i class="material-icons">trending_flat</i></td>
										<td><?php if(isset($adminmobile)) echo $adminmobile ?></td>
									</tr>
									<tr>
										<td class="hc"><b>Date of Joining</b></td>
										<td><i class="material-icons">trending_flat</i></td>
										<td><?php if(isset($admindoj)) echo $admindoj ?></td>
									</tr>
									<tr>
										<td class="hc"><b>Salary</b></td>
										<td><i class="material-icons">trending_flat</i></td>
										<td><?php if(isset($adminsalary)) echo $adminsalary ?></td>
									</tr>
									<tr>
										<td></td>
										<td></td> 
										<td ><button id="editbtn" class="btn waves-effect waves-light">Edit<i class="material-icons right>send"></i></button></td>
									</tr>
								</tbody>  

								<tbody id="mybody2" style="display:none">
									<form method="POST">
										<tr>
											<td class="hc"><b>Name</b></td>
											<td><i class="material-icons">trending_flat</i></td>
											<td class="aadi"><input type="text" name="adminname" value="<?php if(isset($adminname)) echo ucwords($adminname) ?>"></td>

										</tr>
										<tr>
											<td class="hc"><b>Date of Birth</b></td>
											<td><i class="material-icons">trending_flat</i></td>
											<td class="aadi"><input type='date' name='admindob' class="datepicker" value="<?php if(isset($admindob)) echo $admindob ?>"></input></td>
										</tr>
										<tr>
											<td class="hc"><b>Sex</b></td>
											<td><i class="material-icons">trending_flat</i></td>
											<td  class="aadi">
												<select name="adminsex" class="browser-default">
													<option value="" disabled selected>Choose your option</option>
													<option value="male">Male</option>
													<option value="female">Female</option>
													<option value="transgender">Transgender</option>
												</select>

											</td>
										</tr>
										<tr>
											<td class="hc"><b>Address</b></td>
											<td><i class="material-icons">trending_flat</i></td>
											<td class="aadi"><textarea name="adminaddress" maxlength="400" length="400" class="materialize-textarea" ><?php if(isset($adminaddress)) echo $adminaddress ?></textarea></td>
										</tr>
										<tr>
											<td class="hc"><b>Mobile</b></td>
											<td><i class="material-icons">trending_flat</i></td>
											<td class="aadi"><input name="adminmobile" type="number" pattern="[0-9]*" min="100000" value="<?php if(isset($adminmobile)) echo $adminmobile ?>"></td>
										</tr>
										<tr>
											<td class="hc"><b>Date of Joining</b></td>
											<td><i class="material-icons">trending_flat</i></td>
											<td class="aadi"><?php if(isset($doj)) echo $doj ?></td>
										</tr>
										<tr>
											<td class="hc"><b>Salary</b></td>
											<td><i class="material-icons">trending_flat</i></td>
											<td class="aadi"><?php if(isset($salary)) echo $salary ?></td>
										</tr>
										<tr>
											<td></td>
											<td ><a id="cancel" class="btn waves-effect waves-light">Cancel<i class="material-icons right">replay</i></a></td>
											<td class="aadi"><button class="btn waves-effect waves-light" type="submit" name="action" value="save">Save<i class="material-icons right">send</i></button></td>
										</tr>
									</form>

								</tbody>
							</table>
						</div>
					</li>
					<li>
						<div class="collapsible-header active"><i class="material-icons">whatshot</i>Doctors</div>
						<div class="collapsible-body">
							<table class=" bordered ">
								<tbody>
									<?php  
									$qry="SELECT * FROM `doctor`";
									$result=mysqli_query($link,$qry);
									$row=mysqli_fetch_array($result,MYSQL_ASSOC);
									echo "<tr>";
									$keys = array_keys($row);
									$i=0;
									foreach ($keys as $key)
									{
										if($key=='did')
										{
											echo "<th class='jp'>".ucwords($key)."</th>";
										}
										else
										{
											echo "<th>".ucwords($key)."</th>";	
										}
	
									}
									echo"<th>More Details</th>";
									echo"</tr>";
									echo "<tr>";
									$did = $row['did'];
									$keys = array_keys($row);
									foreach ($keys as $key)
									{
										if($key=='did')
										{
											echo "<td class='jp'>".$row[$key]."</td>";
										}
										else if($key=="dob" or $key=="doj")
										{	
											$date=$row[$key];
											if($date!="0000-00-00")
											{
												$date=date_create($date);
												$date=date_format($date,"j F, Y");
											}
											else
											{
												$date="";
											}
											echo "<td>$date</td>";
										}
										else if($key=="mobile")
										{
											if($row[$key]==0)
												echo "<td></td>";
											else 
												echo "<td>".$row[$key]."</td>";
										}
										else if($key!="userid" && $key!="address")
											echo "<td>".ucwords($row[$key])."</td>";
										else 
											echo "<td>".$row[$key]."</td>";
									}
									echo "<td ><a href='admin_doctor.php?did=$did' id='more' class='btn waves-effect waves-light'><i class='material-icons right'>send</i></a></td>";
									echo"</tr>";
									while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
									{
										echo "<tr>";
										$did = $row['did'];
										$keys = array_keys($row);
										foreach ($keys as $key)
										{
											if($key=='did')
											{	
												echo "<td class='jp'>".$row[$key]."</td>";
											}
											else if($key=="dob" or $key=="doj")
											{	
												$date=$row[$key];
												if($date!="0000-00-00")
												{
													$date=date_create($date);
													$date=date_format($date,"j F, Y");
												}
												else
												{
													$date="";
												}
												echo "<td>$date</td>";
											}
											else if($key=="mobile")
											{	
												if($row[$key]==0)
													echo "<td></td>";
												else 
													echo "<td>".$row[$key]."</td>";
											}
											else if($key!="userid" && $key!="address")
												echo "<td>".ucwords($row[$key])."</td>";
											else
												echo "<td>".$row[$key]."</td>";
										}
										echo "<td ><a href='admin_doctor.php?did=$did' id='more' class='btn waves-effect waves-light'><i class='material-icons right'>send</i></a></td>";
										echo"</tr>";
									}
									?>

								</tbody>
							</table>
						</div>
					</li>
					<li>
						<div class="collapsible-header active"><i class="material-icons">whatshot</i>Patients</div>
						<div class="collapsible-body">
							<table class=" bordered ">
								<tbody>
									<?php  
									$qry="SELECT * FROM `patient`";
									$result=mysqli_query($link,$qry);
									$row=mysqli_fetch_array($result,MYSQL_ASSOC);
									echo "<tr>";
									$keys = array_keys($row);
									foreach ($keys as $key)
									{
										echo "<th>".ucwords($key)."</th>";
									}
									echo"<th>More Details</th>";
									echo"</tr>";
									echo "<tr>";
									$pid = $row['pid'];
									$keys = array_keys($row);
									foreach ($keys as $key)
									{

										if($key=="dob" or $key=="doj")
										{	
											$date=$row[$key];
											if($date!="0000-00-00")
											{
												$date=date_create($date);
												$date=date_format($date,"j F, Y");
											}
											else
											{
												$$date="";
											}
											echo "<td>$date</td>";
										}
										else if($key == "admitted" or $key=="discharged")
										{
											$datetime=$row[$key];
											if($datetime!="")
											{
												$datetime=date_create($datetime);
												$datetime=date_format($datetime,"j F, Y g:i A");

											}
											else
											{
												$datetime="";
											}
											echo "<td>$datetime</td>";
											if($key=="discharged")
											{
												$age=date_diff(date_create($row['dob']), date_create('today'))->y;
												echo "<td>$age</td>";
											}
										}
										else if($key=="mobile")
										{
											if($row[$key]==0)
												echo "<td></td>";
											else 
												echo "<td>".$row[$key]."</td>";
										}
										else 
											echo "<td>".ucwords($row[$key])."</td>";
									}
									echo "<td ><a href='admin_patient.php?pid=$pid' id='more' class='btn waves-effect waves-light'><i class='material-icons right'>send</i></a></td>";
									echo"</tr>";
									while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
									{
										echo "<tr>";
										$pid = $row['pid'];
										$keys = array_keys($row);
										foreach ($keys as $key)
										{
										if($key=="dob" or $key=="doj")
										{	
											$date=$row[$key];
											if($date!="0000-00-00")
											{
												$date=date_create($date);
												$date=date_format($date,"j F, Y");
											}
											else
											{
												$$date="";
											}
											echo "<td>$date</td>";
										}
										else if($key == "admitted" or $key=="discharged")
										{
											$datetime=$row[$key];
											if($datetime!="")
											{
												$datetime=date_create($datetime);
												$datetime=date_format($datetime,"j F, Y g:i A");

											}
											else
											{
												$datetime="";
											}
											echo "<td>$datetime</td>";
											if($key=="discharged")
											{
												$age=date_diff(date_create($row['dob']), date_create('today'))->y;
												echo "<td>$age</td>";
											}
										}
										else if($key=="mobile")
										{
											if($row[$key]==0)
												echo "<td></td>";
											else 
												echo "<td>".$row[$key]."</td>";
										}
										else 
											echo "<td>".ucwords($row[$key])."</td>";
									}
									echo "<td ><a href='admin_patient.php?pid=$pid' id='more' class='btn waves-effect waves-light'><i class='material-icons right'>send</i></a></td>";
									echo"</tr>";
									}
									?>

								</tbody>
							</table>
						</div>
					</li>
				</ul>
			</div>
		</div>


		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large red">
				<i class="large material-icons">add</i>
			</a>
			<ul>
				<li><a class="btn-floating red" href="add_doctor.php"><img class="responsive-img" src="images.png"></a></li>
				<li><a class="btn-floating yellow darken-1" href="add_patient.php"><img class="responsive-img" src="patient.png"></a></li>
			</ul>
		</div>
        
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script src="pickadate/lib/picker.js"></script>
	<script src="pickadate/lib/picker.time.js"></script>
	<script src="pickadate/lib/legacy.js"></script>
	<script >
		$("#topContainer").css("height",$(window).height());
		$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 100, // Creates a dropdown of 15 years to control year
max:true
});
		$("input:checkbox").on('click', function() {
// in the handler, 'this' refers to the box clicked on
var $box = $(this);
if ($box.is(":checked")) {
// the name of the box is retrieved using the .attr() method
// as it is assumed and expected to be immutable
var group = "input:checkbox[name='" + $box.attr("name") + "']";
// the checked state of the group/box on the other hand will change
// and the current value is retrieved using .prop() method
$(group).prop("checked", false);
$box.prop("checked", true);
} else {
	$box.prop("checked", false);
}
});
		$('.mydatepicker').pickatime({
			min:true,
			interval:15
		});
		$("#editbtn").click(function(){
			$("#mybody1").hide();
			$("#mybody2").show();
		});
		$("#cancel").click(function(){

			$("#mybody1").show();
			$("#mybody2").hide();
		});
	</script>
</body>
</html>
<?php 
	session_start();
	include("function.php");
  
  if(isset($_SESSION['type']) and $_SESSION['type']=="doctor" and isset($_SESSION['did']) and isset($_SESSION['userid']))
  {
    
    $details=get_all($_SESSION['type'],'did',$_SESSION['did']);
    
    $name=ucwords($details[0]['name']);
    $address=$details[0]['address'];
    
    $sex=ucwords($details[0]['sex']);
    $dob=$details[0]['dob'];
    
    if($dob!="0000-00-00")
    {
      $dob=date_create($dob);
      $dob=date_format($dob,"j F, Y");
    }
    else
    {
      $dob="";
    }
    $mobile=$details[0]['mobile'];
    if($mobile==0)
      $mobile="";
    $doj=$details[0]['doj'];
    if($doj!="0000-00-00")
    {
      $doj=date_create($doj);
      $doj=date_format($doj,"j F, Y");
    }
    else
    {
      $doj="";
    }
    $salary=$details[0]['salary'];
    $specialization=ucwords($details[0]['specialization']);
  }
  else
  {
    echo "Please Login First";
    echo '<meta http-equiv="refresh" content="1;url=doctor_login.php">';
    sleep(1);
    die();
  }

  if(isset($_POST['action'])and $_POST['action']=="submit")
  {
    $todo=$_POST['i'];
    if(isset($_POST[$todo]) and $_POST[$todo]=="confirm")
    {
      if($_POST['time']=="" || $_POST['date']=="")
      {
        $error="Please Select date and time of appointment";
      }
      else
      {
        
        $date = new DateTime(mysqli_real_escape_string($link,$_POST['date']));
        $date = date_format($date,'Y-m-d');
        $time = new DateTime(mysqli_real_escape_string($link,$_POST['time']));
        $time = date_format($time,'H:i:s');
        $datetime = $date." ".$time;
        $qry="UPDATE `appointment` set `datetime`='".$datetime."',`status`='confirmed' WHERE `apid`='".$_POST['apid']."'";
        $result=mysqli_query($link,$qry);
      }
    }
    else if((isset($_POST[$todo])and $_POST[$todo]=="cancel"))
    {
       $qry="UPDATE `appointment` set `status`='cancelled' WHERE `apid`='".mysqli_real_escape_string($link,$_POST['apid'])."'";
      $result=mysqli_query($link,$qry);
    }
    else
    {
      $error="Please select either to cancel or confirm the appointment";
    }
	}
  if(isset($_POST['action'])and $_POST['action']=="save")
  {

    $newdob=new DateTime(mysql_real_escape_string($_POST['dob']));
    $newdob = date_format($newdob,'Y-m-d');
    echo $newdob;
    $qry = "UPDATE `doctor` SET `dob`='".$newdob."',`name`='".$_POST['name']."',`address`='".mysqli_real_escape_string($link,$_POST['address'])."',`mobile`='".mysqli_real_escape_string($link,$_POST['mobile'])."' WHERE `did`='".$_SESSION['did']."'";
    $result = mysqli_query($link,$qry);
    if(isset($_POST['specialization']))
    {
      $qry="UPDATE `doctor` SET `specialization`='".$_POST['specialization']."'";
      $result = mysqli_query($link,$qry);
    }
    if(isset($_POST['sex']))
    {
      $qry="UPDATE `doctor` SET `sex`='".$_POST['sex']."'";
      $result = mysqli_query($link,$qry);
    }
    header('Location:doctor.php');
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
  <title>Doctor Details</title>

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
 
</style>
</head>
<body>

<?php include('header.php') ?>

<div class="container" id="topContainer">
<div class="row">
<div class="col s12 m8 offset-m2">

 <ul class="mytr collapsible popout" data-collapsible="accordion">
    <?php 
      if(isset($error))
      {
        echo "<div class='alert alert-dismissable alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>$error</div>";
      }
    ?>
    <li>
      <div class="collapsible-header active"><i class="material-icons">whatshot</i>Appointments</div>
      <div class="collapsible-body">
        <table class="highlight bordered responsive-table">
          <tbody>
            <tr>
              <th class="jp">Name of Patient</th>
              <th>Requested on. At</th>
              <th>Date</th>
              <th>Time</th>
              <th>Confirm/Cancel</th>
              <th>Submit</th>
              <th>Status</th>
            </tr>
            <?php  
              $qry="SELECT * FROM `appointment` WHERE `did`='".$_SESSION['did']."' ORDER BY `status` ";
              $result=mysqli_query($link,$qry);
              $i=0;
              while($row=mysqli_fetch_array($result))
              {
                $i=$i+1;
                $qry="SELECT `name` FROM `patient` where `pid`='".$row['pid']."'";
                $myresult=mysqli_query($link,$qry);
                $myrow=mysqli_fetch_array($myresult);
                $patient_name=ucwords($myrow['name']);
                $request_at=$row['request_at'];
                $pid=$row['pid'];
                $apid=$row['apid'];
                $status=$row['status'];
                if($status=="pending")
                {
                  $cls="alert-warning";
                }
                else if($status=="confirmed")
                {
                  $cls="alert-success";
                }
                else if($status=="cancelled")
                {
                  $cls="alert-danger";
                }
                echo "<tr class=''>";
                echo "<form method='POST'>";
                echo "<input type='hidden' name='apid' value='$apid'></input>";
                echo "<input type='hidden' name='i' value='$i'></input>";
                echo "<td class='jp'>$patient_name</td>";
                echo "<td>$request_at</td>";
                if($status=="pending")
                {
                  echo "<td><input type='date' name='date' class='datepicker'></input></td>";
                  echo "<td><input type='date' name='time' class='mydatepicker'></input></td>";
                }
                else
                {
                  $datetime=$row['datetime'];
                  if($datetime!="0000-00-00 00:00:00")
                  {
                    $datetime=date_create($datetime);
                    $date=date_format($datetime,"j F, Y");
                    $time=date_format($datetime,'g:i A');
                  }
                  else
                  {
                    $date="";
                    $time="";
                  }
                  echo "<td>$date</td>";
                  echo "<td>$time</td>";
                }
                if($status=="pending")
                {
                  echo "<td><div class='switch'><label><input type='checkbox' name='$i' value='confirm'><span class='lever'></span>Confirm</label></div>
                            <div class='switch'><label><input type='checkbox' name='$i' value='cancel'><span class='lever'></span>Cancel</label></div></td>";
                  echo "<td><button class='btn mybtn waves-effect waves-light' type='submit' name='action' value='submit'><i class='material-icons right'>send</i></button></td>";
                }
                else if($status=="confirmed")
                {
                   echo "<td><div class='switch'><label><input type='checkbox' name='$i' value='cancel'><span class='lever'></span>Cancel</label></div></td>";
                  echo "<td><button class='btn mybtn waves-effect waves-light' type='submit' name='action' value='submit'><i class='material-icons right'>send</i></button></td>"; 
                }
                else
                {
                  echo "<td></td>";
                  echo "<td></td>";
                }
                echo "<td class='$cls'>".ucwords($status)."</td>";
                echo "</form>";
                echo "</tr>";
                
              }
            ?>
          </tbody>
        </table>
      </div>
    </li>
      <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Patients</div>
      <div class="collapsible-body">
        <table class="highlight  responsive-table bordered ">
          <tbody>
             <tbody>
            <tr>
              <th class="jp">Pid</th>
              <th>Name</th>
              <th>Disease</th>
              <th>Age</th>
              <th>Start Date</th>
              <th>End Date</th>
            </tr>
            <?php
                $qry="SELECT `patient`.`dob`,`patient`.`disease`, `patient`.`name`,`attends`.`pid`,`attends`.`start_date`,`attends`.`end_date` FROM `patient`,`attends` where `attends`.`did`='".  $_SESSION['did']."' AND `patient`.`pid`=`attends`.`pid` order by `end_date` limit 30";
                
                $result=mysqli_query($link,$qry);
                while($row=mysqli_fetch_array($result))
                {
                  echo "<tr>";
                  echo"<td  class='jp'>".$row['pid']."</td>";
                  $ppid=$row['pid'];
                  echo"<td>".ucwords($row['name'])."</td>";
                  echo"<td>".ucwords($row['disease'])."</td>";
                  $age=date_diff(date_create($row['dob']), date_create('today'))->y;
                  echo"<td>".$age."</td>";
                  $start_date=$row['start_date'];
                  if($start_date!="")
                  {
                    $start_date=date_create($start_date);
                    $start_date=date_format($start_date,"j F, Y g:i A");

                  }
                  else
                  {
                    $start_date="";
                  }
                  echo"<td>".$start_date."</td>";
                  $end_date=$row['end_date'];
                  if($end_date!="")
                  {
                    $end_date=date_create($end_date);
                    $end_date=date_format($end_date,"j F, Y g:i A");

                  }
                  else
                  {
                    $end_date="";
                  }
                  echo"<td>".$end_date."</td></tr>";
                }
              ?>          
            
          </tbody>
        
        </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">account_circle</i>Profile</div>
      <div class="collapsible-body">
        <table class=" bordered responsive-table">
     
          <tbody id="mybody1" >
            
            <tr>
              <td class="hc"><b>Name</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($name)) echo ucwords($name) ?></td>
            </tr>
            <tr>
              <td class="hc"><b>Date of Birth</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($dob)) echo $dob ?></td>
            </tr>
            <tr>
              <td class="hc"><b>Sex</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($sex)) echo ucwords($sex) ?></td>
            </tr>
            <tr>
              <td class="hc"><b>Address</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($address)) echo $address ?></td>
            </tr>
            <tr>
              <td class="hc"><b>Mobile</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($mobile)) echo $mobile ?></td>
            </tr>
            <tr>
              <td class="hc"><b>Date of Joining</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($doj)) echo $doj ?></td>
            </tr>
            <tr>
              <td class="hc"><b>Salary</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($salary)) echo $salary ?></td>
            </tr>
            <tr>
              <td class="hc"><b>Specialization</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td><?php if(isset($specialization)) echo ucwords($specialization) ?></td>
            </tr>
            <tr>
              <td></td>
              <td></td> 
              <td ><button id="editbtn" class="btn waves-effect waves-light">Edit<i class="material-icons right>send"></i></button></td>
            </tr>
          </tbody>  
            <!--  -->
            <!--  -->
            <!--  -->
          <tbody id="mybody2" style="display:none">
            <form method="POST">
              <tr>
                <td class="hc"><b>Name</b></td>
                <td><i class="material-icons">trending_flat</i></td>
                <td class="aadi"><input type="text" name="name" value="<?php if(isset($name)) echo ucwords($name) ?>"></td>
                
              </tr>
              <tr>
                <td class="hc"><b>Date of Birth</b></td>
                <td><i class="material-icons">trending_flat</i></td>
                <td class="aadi"><input type='date' name='dob' class="dobdatepicker" value="<?php if(isset($dob)) echo $dob ?>"></input></td>
              </tr>
              <tr>
                <td class="hc"><b>Sex</b></td>
                <td><i class="material-icons">trending_flat</i></td>
                <td  class="aadi">
                <select name="sex" class="browser-default">
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
                <td class="aadi"><textarea name="address" maxlength="400" length="400" class="materialize-textarea" ><?php if(isset($address)) echo $address ?></textarea></td>
              </tr>
              <tr>
                <td class="hc"><b>Mobile</b></td>
                <td><i class="material-icons">trending_flat</i></td>
                <td class="aadi"><input name="mobile" type="number" pattern="[0-9]*" min="100000" value="<?php if(isset($mobile)) echo $mobile ?>"></td>
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
                <td class="hc"><b>Specialization</b></td>
                <td><i class="material-icons">trending_flat</i></td>
                <td class="aadi">
                  <select name="specialization" class="browser-default">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="dentist">Dentist</option>
                    <option value="cardiologist">Cardiologist</option>
                    <option value="neurosergon">Neurosergon</option>
                  </select>
                </td>
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
  </ul>
</div>
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
    selectYears: 1, // Creates a dropdown of 15 years to control year
    min:true
  });
  $('.dobdatepicker').pickadate({
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
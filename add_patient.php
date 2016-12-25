<?php 
  session_start();
  include("function.php");
  if(isset($_SESSION['type']) and $_SESSION['type']=="admin" and isset($_SESSION['aid']) and isset($_SESSION['userid']))
  {
    $list=array("a",'b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
    $psw="";
    while(strlen($psw)!=8)
    {
      $psw.=$list[rand(0,61)];
    }
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
    $qry="INSERT INTO `user` values('".mysqli_real_escape_string($link,$_POST['userid'])."','".md5(md5($_POST['userid']).$_POST['password'])."','patient')";   
    $result=mysqli_query($link,$qry);
    $qry="INSERT INTO `patient`(`userid`) values('".mysqli_real_escape_string($link,$_POST['userid'])."')";
    $result=mysqli_query($link,$qry);
    $id=mysqli_insert_id($link);
    $keys = array_keys($_POST);
    foreach ($keys as $key )
    {
      if($key!="userid" && $key!="password")
      {
        if(isset($_POST[$key]))
        {
          if($key=="dob" || $key=="admitted" || $key=="discharged")
          {
             $value = new DateTime(mysqli_real_escape_string($link,$_POST[$key]));
             $value = date_format($value,'Y-m-d');
          }
          else
            $value = $_POST[$key];
          $qry = "UPDATE `patient` SET `".$key."`='".$value."' WHERE `userid`='".$_POST['userid']."'" ;
          $result = mysqli_query($link,$qry);
        }
      }
    }
    header('Location:admin_patient.php?pid='.$id);
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Add Patient</title>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Materialize -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="jqueryui/jquery-ui.css">  

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
  .required{
    color:red;
  }
  .fixed{
    
    position: fixed;
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
    padding-top:4%;
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
  #useralert{
    display:none;
  }
  #passalert{
    display:none;
  }
</style>
</head>
<body>

<?php include('header.php') ?>

<div class="container" id="topContainer">
<div class="row">
  <div class="col s12 m10 offset-m1">
  <a href="admin.php" class="fixed pull-left btn-floating btn-large waves-effect waves-light red"><i class="material-icons">replay</i></a>
  </div>
</div>
<div class="row">
<div class="col s12 m8 offset-m2">


<ul class="mytr collapsible popout" data-collapsible="accordion">
    <div id="useralert"class='alert alert-dismissable alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>
    <div id="passalert"class='alert alert-dismissable alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>
    <li>
      <div class="collapsible-header active"><i class="material-icons">account_circle</i>Add Patient</div>
      <div class="collapsible-body">
        <table class="striped bordered responsive-table">
          <tbody id="mybody1" >
           <form id="saveform" method="POST">
            <tr>
          <td class="hc"><b>User Id <span class="required">*</span></b></td>
          <td><i class="material-icons">trending_flat</i></td>
          <td class="aadi"><input id="userid" type="text" name="userid"></td>
          </tr>
          <tr>
          <td class="hc"><b>Password <span class="required">*</span></td>
          <td><i class="material-icons">trending_flat</i></td>
          <td class="aadi"><input id="password" type="text" name="password" value="<?php if(isset($psw)) echo $psw; ?>"></td>
          </tr>
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
              <td class="hc"><b>Admitted</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td class="aadi"><input type='date' name='admitted' class="dobdatepicker" value="<?php if(isset($admitted)) echo $admitted ?>"></input></td>
            </tr>
            <tr>
              <td class="hc"><b>Discharged</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td class="aadi"><input type='date' name='discharged' class="dobdatepicker" value="<?php if(isset($discharged)) echo $discharged ?>"></input></td>
            </tr>
            </tr>
            <tr>
              <td class="hc"><b>Disease</b></td>
              <td><i class="material-icons">trending_flat</i></td>
              <td class="aadi"><input type="text" name="disease" value="<?php if(isset($disease)) echo ucwords($disease) ?>"></td>
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
<script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>  
<script >
  $(document).ready(function(){

    function idcheck()//to check whether id already used or not
    {
      var message;    
      if($("#userid").val().length<6)
      {
      if($("#userid").val().length==0)
        message="Please Enter User Id!";
      else
        message="UserId must be 6 characters long!!";
      $("#useralert").html(message).css('display','block');
      flag1=0;    
      }
      else
      {
      $.ajax({
      type:"POST",
      url:"checkid.php",
      data:{userid:$("#userid").val()},
      success:function(data){
      if(data==1)
      {
      message="UserId Already Exists.Please choose a different User Id!";
      $("#useralert").html(message).css('display','block');
      flag1=0;
      }
      else if(data==0)
      {
      $("#useralert").html("").css('display','none');
      flag1=1;
      }
      }
      });  
      }
    }
    function passcheck()
    {
      if($("#password").val()=="")
      {
        $("#passalert").html("Please Enter Password!!").css('display','block');
        flag2=0;
      }
      else
      {
        $("#passalert").html("").css('display','none'); 
        flag2=1;
      }
    }
    $("#userid").keyup(function(){
      idcheck();
    });
    $("#password").keyup(function(){
      passcheck();
    });

    $("#saveform").submit(function(event){
      idcheck();
      passcheck();
      if(flag1==0 || flag2==0)
      {
        event.preventDefault();
      }
    });
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
  });
</script>
</body>
</html>
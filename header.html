
<style type="text/css">
 .hiddenalert{
    display:none;
  }
  #adminloginform{
    width:25%;
    height:50%;
    padding-left:10px;
    padding-right:10px; 
  }
  body
  {
    background-image: url("images/back2.jpg");
    background-size: cover;
    background-attachment: fixed;
  }
  .background {     
    z-index: -1;      
  }
</style>
<div class="nav  z-depth-3 navbar-inverse navbar-fixed-top" style="color:#212121">

  <div class="container-fluid">

    <div class="navbar-header">

      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand flow-text" href="index.php">Hospital Management</a>
    </div>

    <div class="collapse navbar-collapse">
      <form id="logoutform"class="navbar-form navbar-right" method="POST">
        <button id="logout" type="submit" name="submit" value="Log Out" class="btn btn-success waves-effect waves-light cyan">Log Out</button>
      </form>
      <ul class="navbar-right nav navbar-nav">
        <li class="home active"><a href="index.php">Home</a></li>
        <li><a  href="#about">About</a></li>
        <li><a  id="myadminlogin" class="modal-trigger" href="#adminloginform">Admin</a></li>
      </ul>        
      <div id="adminloginform" class="modal">
        <br>
         <div class="center-align row">
          <p class="lead flow-text">Admin Login</p>
        </div>
        <hr/>
        <div class="row">
          <form class="cols12" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="userid_admin"name="userid_admin" type="text" class="validate" value=""/>
                <label for="userid_admin">User Id</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="password_admin"name="password_admin" type="password" class="validate" value="<?php if(isset($_POST['password_admin']))echo$_POST['password_admin'];?>"/>
                <label for="password_admin">Password</label>
              </div>
            </div>
            <hr/>
            <div class="row">  
              <div class="center-align">
                <button id="adminlogin" class="btn waves-effect waves-light" type="submit" name="adminlogin" value="adminlogin">Log In
                <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col s10 offset-s1 center">
              <div id="error" class="hiddenalert alert alert-danger">Please Enter User Id!</div>
              <div id="error1" class="hiddenalert alert alert-danger">Please Enter Password</div>
              <div id="error2" class="hiddenalert alert alert-danger">Please Enter a correct set of userid and password</div>
              <div id="success" class="hiddenalert alert alert-success">You Have Successfully Logged In!!</div>
            </div>
          </div>

        </div>
      </div>
    </div>  
  </div>
</div>

<script src="jquery.min.js"></script>
<script>
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    var flag1=0,flag2=0;
    $('.modal-trigger').leanModal({
      dismissible:true
    });
    
    $("#adminlogin").click(function(event){
      event.preventDefault();
      $("#error").css("display","none");
      $("#error1").css("display","none");
      $("#error2").css("display","none");
      if($("#userid_admin").val()=="")
      {
        $("#error").css("display","block");
        flag1=0;
      }
      else
      {
        $("#error").css("display","none");
        flag1=1; 
      }
      if($("#password_admin").val()=="")
      {
        $("#error1").css("display","block");
        flag2=0;
      }
      else
      {
        $("#error1").css("display","none");
        flag2=1;
      }
      if(flag1==1 && flag2==1)
      {
         $.ajax({
            type:"POST",
            url:"adminlogin.php",
            data:{userid_admin:$("#userid_admin").val(),password_admin:$("#password_admin").val()},
            success:function(data){
              
              if(data==1)
              {
                $("#error2").css("display","none");
                $("#success").css("display","block");
                window.location = "admin.php";
              }
              else if(data==0)
              {
                $("#error2").css("display","block");
              }
            }
          });  
      }

     });
  });
      $('.parallax').parallax();
</script>
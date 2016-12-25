
$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
var flag1=0,flag2=0,flag3=0,flag4=0,flag5=0,flag6=0;
$("#topContainer").css("height",$(window).height());

$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears:100, // Creates a dropdown of 15 years to control year
max:true
});

function idcheck()//to check whether id already used or not
{
  var message;
  if($("#userid_signup").val().length<6)
  {
    message="UserId must be 6 characters long!!";
    $("#useralert").html(message).css('display','block');
    flag1=0;    
  }
  else
  {
    $.ajax({
      type:"POST",
      url:"checkid.php",
      data:{userid:$("#userid_signup").val()},
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

function namecheck()//name cannot be empty
{
   var message="Please Enter a Name!";
  if($("#name_signup").val()=="")
  { 
    $("#namealert").html(message).css('display','block');
    flag2=0;
  }
  else
  {
    $("#namealert").html("").css('display','none');
    flag2=1;
  }
}

function passcheck()//password should be atleast 8 character long
{
  var message="Password should be atleast 8 characters long!";

  if($("#password_signup").val().length<8)
  { 
    $("#passalert").html(message).css('display','block');
    flag3=0;
  }
  else
  {
    $("#passalert").html("").css('display','none');
    flag3=1;
  }
}

function passmatch()//both password must match
{
  var message="Passwords do not match!";
  if($("#password_signup").val().length<8)
  { 
    $("#passalert").html("Password should be atleast 8 characters long!").css('display','block');
    flag3=0;
  }
  else if($("#password_signup_confirm").val()!=$("#password_signup").val())
  {
    $("#passalert").html(message).css('display','block');
    flag4=0;
  }
  else
  {
    $("#passalert").html("").css('display','none');
    flag4=1;
  }
}
function datecheck()//dob cant be empty
{
  if($("#dob").val()=="")
  { 
    var message="Date can't be left empty!";
    $("#dobalert").html(message).css('display','block');
    flag5=0;
  }
  else
  {
    $("#dobalert").html("").css('display','none');
    flag5=1;
  }   
}
function sexcheck()
{
  var message = "Please Enter Your Gender/Sex!";
  if($("#sex option:selected").val()=="")
  {
    $("#sexalert").html(message).css('display','block');
    flag6=0;
  }
  else
  {
    flag6=1;
    $("#sexalert").html("").css('display','none');
  }
}
$("#userid_signup").keyup(function(){
  //alert("hi");
  idcheck();
});

$("#name_signup").keyup(function(){
  namecheck();
});

$("#password_signup").keyup(function(){
  passcheck();
});

$("#password_signup_confirm").keyup(function(){
  passmatch();
});
$("#signup").submit(function(event){
  idcheck();
  namecheck();
  passcheck();
  datecheck();
  passmatch();
  sexcheck();
  if(flag1!=1 || flag2!=1 || flag3!=1 || flag4!=1 || flag5!=1 || flag6!=1)
  {
    event.preventDefault();
  }
});
});
  

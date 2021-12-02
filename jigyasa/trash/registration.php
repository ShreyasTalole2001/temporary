<?php

session_start();
include 'database.php';


$FirstName = mysqli_real_escape_string($conn,$_POST['FirstName']);
$LastName = mysqli_real_escape_string($conn,$_POST['LastName']);
$MobileNo = mysqli_real_escape_string($conn,$_POST['MobileNo']);
$Email = mysqli_real_escape_string($conn,$_POST['Email']);
$Password = mysqli_real_escape_string($conn,$_POST['Password']);
$PasswordC = mysqli_real_escape_string($conn,$_POST['PasswordC']);
$error="";
// Varification key
$Vkey = md5(time().$FirstName);
echo $Vkey;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $query="SELECT * FROM registration WHERE Email='$Email' OR MobileNo='$MobileNo' ";
   if ($result=mysqli_query($conn,$query)) {
      $rowcount=mysqli_num_rows($result);

        if ($rowcount>0) {
        $error="you have already signup";
        $roboterror=1;
         
       }
       elseif ($Password!=$PasswordC) {
        $error="password dosint match";
        $roboterror=1;
       }
       else{
        $query = "INSERT INTO registration(FirstName, LastName, MobileNo, Email, Password, PasswordC, Vkey) VALUES('$FirstName', '$LastName' , '$MobileNo', '$Email', '$Password' , '$PasswordC', '$Vkey') ";
       mysqli_query($conn,$query);

       $query = "INSERT INTO userinfo(FirstName, LastName, MobileNo, Email) VALUES('$FirstName', '$LastName' , '$MobileNo', '$Email') ";
       mysqli_query($conn,$query);

       $query = "INSERT INTO studentdetails(FirstName, LastName, Email) VALUES('$FirstName', '$LastName' , '$Email') ";
       mysqli_query($conn,$query);

       $_SESSION['Email']=$_POST['Email'];
       // header('Location: dashbord.php');
        
       
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <noreply@myjigyasa.com>' . "\r\n";       
$message = "<a href='https://www.myjigyasa.com/verify.php?Vkey=$Vkey'&Email=$Email>Register account</a>";

       mail($Email, 'Test',$message,$headers);
       $error="Check your email";



       
       }

     
   }


}





?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #F1F7FD;
      }
      /*-----------------------------------------------------------------*/
      /* Main Menu Bar */
      .menu_wrapper{
     
        font-family: Arial, Helvetica, sans-serif;
      
      
      }
      .nav-link {
       color: black !important;
       margin-right: 20px;
       font-size: 120%;
      }


      /*-----------------------------------------------------------------*/
    
      #register_wrapper{
        background-color: white;
      /*  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);*/
       /* border: 1px solid black;*/
        box-shadow:0 0 10px #9ecaed;
        
        width: 500px;
        margin: 0px auto;
        margin-top: 10px;
        border-radius: 5px;
        font-family: Arial, Helvetica, sans-serif;
      }
      #register_wrapper h4{
        text-align: center;
        padding-top: 10px;
      }
      #register_wrapper form{
        padding: 30px;
        padding-top: 40px;
        padding-bottom: 0px;
      }
      #old_user{
        text-align: right;
        padding: 5px;
      }
       #old_user a{
        text-decoration: none;
       

       } 
       #error{
        color: red;
        text-align: center;

      }
      input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}


       @media all and (max-width: 800px) {
        #register_wrapper{
       border-radius: 0px;
       box-shadow: none;
        
        width: 100%;
        margin: 0px auto;
      }

       }
       /*-----------------------------------------------------------------*/
        /* alert*/
     #alert_wrapper{
      width: 400px;
      text-align:left; 
      z-index: 2000;
      display: none;

     }
     @media all and (max-width: 800px) {
      #alert_wrapper{
      width: 100%;
      text-align:left; 
      z-index: 2000;
      display: none;

     }
     }

     /*-----------------------------------------------------------*/
   /*  Password strength*/

#Bad{
display:none;
color: red;
}
#Weak{
display:none;
color: red;
}
#Good{
display:none;
color: yellow;
}
#Strong{
  display:none;
  color: green;
}


      
    </style>

    <title>TEST REGISTER</title>
  </head>
  <body>
    <! Main Menu Bar !>
          <div  class="container_fluid menu_wrapper ">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: green;font-size: 120%;">JIGYASA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item" style="margin-right: 5px">
              <form method="get" action="login.php">
                  <button type="submit" class="btn btn-primary" ><b><i class="fa fa-lock" aria-hidden="true"></i> Account</b></button>
              </form>
            </li>
          
          
          </ul>
        </div>
      </nav>

      </div>
    </div>

     <!--  --------------------------------------------------------- -->



<div id="alert_wrapper" class="alert alert-danger alert-dismissible fade show ml-auto p-2" role="alert">
  <strong><?php echo $error;  ?> </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>








    <!-- ------------------------------------------------------------------------ -->
    <div class="Container_fluid" >

      <div id="register_wrapper">

        <h4>REGISTER</h4>
   
           <form method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" id="FirstName" placeholder="First Name" name="FirstName" required="" >
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="LastName" placeholder="Last Name" name="LastName" required="">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="MobileNo" placeholder="Mobile No" name="MobileNo" required="">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" required="">
                  </div>
                  <div class="form-group d-flex">
                    <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" required="" >
                    <i class="fa fa-eye" onclick="myFunction()" style="font-size:24px;color: white;padding: 1px;margin-left: 5px;background-color: green;padding: 10px;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);"></i>
                  </div>
                   <div id='show_message'>
                       <p id='Bad'>Bad Password</p>
                       <p id='Weak'>WeakPassword</p>
                       <p id='Good'>Good Password</p>
                       <p id='Strong'>Strong Password</p>
                     </div>


                  <div class="form-group">
                    <input type="text" class="form-control" id="PasswordConform" placeholder="Conform password" name="PasswordC" required="">
                  </div>
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width: 100%;" id="submitbtn" type="submit" class="btn btn-primary" value="REGISTER">
                  </div>
                </form> 



                

         <div id="old_user">
           <a href="login.php">Already have an account? Log In</a>
         </div>
         <div id="error">
           <?php echo $error;  ?>
         </div>
           
    
    </div>


    <br>
    <br>
 


   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jq/jquery.js"></script>
    <script type="text/javascript">

      var x = <?php echo $roboterror; ?>;
      if (x == 1) {
        document.getElementById('alert_wrapper').style.display = "block";
      }

    </script>
    <script type="text/javascript">
      
function myFunction() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
    x.style.color="black"
  } else {
    x.type = "password";
  }
}

    </script>
    <script type="text/javascript">
      

var myInput = document.getElementById("Password");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  var upperCaseLetters = /[A-Z]/g;
  var numbers = /[0-9]/g;
  if(myInput.value.match(lowerCaseLetters) || myInput.value.match(upperCaseLetters) || myInput.value.match(numbers)) {  
   document.getElementById('Bad').style.display = "block";
    document.getElementById('Weak').style.display = "none";
    document.getElementById('Good').style.display = "none";
    document.getElementById('Strong').style.display = "none";
  } else {
   document.getElementById('Bad').style.display = "none";
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(upperCaseLetters) && myInput.value.match(lowerCaseLetters) ) {  
   document.getElementById('Bad').style.display = "none";
    document.getElementById('Weak').style.display = "block";
    document.getElementById('Good').style.display = "none";
    document.getElementById('Strong').style.display = "none";
  } else {
   document.getElementById('Weak').style.display = "none";
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  var upperCaseLetters = /[A-Z]/g;
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(numbers) && myInput.value.match(upperCaseLetters) && myInput.value.match(lowerCaseLetters)) {  
    document.getElementById('Bad').style.display = "none";
    document.getElementById('Weak').style.display = "none";
    document.getElementById('Good').style.display = "block";
    document.getElementById('Strong').style.display = "none";
  } else {
   document.getElementById('Good').style.display = "none";
  }
  
  // Validate length
  if(myInput.value.length >= 8 && myInput.value.match(numbers) && myInput.value.match(upperCaseLetters) && myInput.value.match(lowerCaseLetters)) {
    document.getElementById('Bad').style.display = "none";
    document.getElementById('Weak').style.display = "none";
    document.getElementById('Good').style.display = "none";
    document.getElementById('Strong').style.display = "block";
    
  }
  else{
    document.getElementById('Strong').style.display = "none";
  }
}






    </script>
  </body>
</html>
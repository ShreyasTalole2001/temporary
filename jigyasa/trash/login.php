<?php

session_start();
include 'database.php';

$Email = mysqli_real_escape_string($conn,$_POST['Email']);
$Password = mysqli_real_escape_string($conn,$_POST['Password']);
$roboterror=0;
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$query = "SELECT * FROM registration WHERE Email='$Email' AND Password='$Password' ";
 
 if ($result = mysqli_query($conn,$query)) {
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==1) {
      $_SESSION['Email']=$_POST['Email'];
      echo "success";
      header('Location: dashbord.php');
      
    }
    else{
       $error="invalid username and password";
       $roboterror=1;

       
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
   /*   -----------------------------*/
 /* Main Menu Bar */
      .menu_wrapper{
     
        font-family: Arial, Helvetica, sans-serif;
      
      
      }
      .nav-link {
       color: black !important;
       margin-right: 20px;
       font-size: 120%;
      }













      /*----------------------------------*/
    
      #login_wrapper{
        background-color: white;
        /*box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);*/
        width: 400px;
        margin: 0px auto;
        margin-top: 100px;
        border-radius: 5px;
        font-family: Arial, Helvetica, sans-serif;
         box-shadow:0 0 10px #9ecaed;

      }
      #login_wrapper h4{
        text-align: center;
        padding-top: 10px;
      }
      #login_wrapper form{
        padding: 30px;
        padding-top: 40px;
      }
      #new_user{
        text-align: right;
        padding: 5px;
      }
       #new_user a{
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
        #login_wrapper{
       border-radius: 0px;
       box-shadow: none;
        width: 100%;
        margin: 0px auto;
      }

       }


      /* ------------------------------------*/
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
      
    </style>

    <title>TEST</title>
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
              <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
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
  <strong>Invalid </strong>username and password.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


















   <!--  --------------------------------------------------------- -->

   
    <div class="Container_fluid" >

      <div id="login_wrapper">

        <h4>Log In</h4>
   
                <form method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="MobileNo" placeholder="Password" name="Password" required="">
                  </div>
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width:100px;" id="submitbtn" type="submit" class="btn btn-primary" value="Log In">
                  </div>
                </form> 

         <div id="new_user">
           <a href="registration.php">New User? Sign Up</a>
         </div>
         <div id="error">
           <?php echo $error;  ?>
         </div>
           
    
    </div>


   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">

      var x = <?php echo $roboterror; ?>;
      if (x == 1) {
        document.getElementById('alert_wrapper').style.display = "block";
      }
      
      




    </script>
  </body>
</html>
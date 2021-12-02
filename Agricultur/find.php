<?php
session_start();     
include "database.php";



$AdharNo=mysqli_real_escape_string($conn,$_POST['AdharNo']);
$_SESSION['AdharNo']= $AdharNo;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
   $query="SELECT * FROM farmerregistration WHERE AdharNo='$AdharNo' ";
   if ($result=mysqli_query($conn,$query)) {
       $row=mysqli_fetch_array($result);
           
           
           $FullName = $row['FullName'];
             $id = $row['id'];

         }



}
 
  
   


?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #F1F7FD;
        background-image: url("images/42.jpg");
      }
      /* Main Menu Bar */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: white;
      }
      .nav-link {
       color: black !important;
      }

      #card_wrapper{
        background-color: white;
        padding: 20px;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         margin-top: 80px;

      }
      #message_wrapper{
        text-align: center;
        border: 2px solid green;
        font-weight: 500;
       font-size: 130%;
       background-color: white;
       margin-top: 20px;
      }

    </style>

    <title>Find your no</title>
  </head>
  <body>

     <! Main Menu Bar !>
          <div  class="container_fluid menu_wrapper ">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: green;font-size: 120%;">APMC</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><b>मुख्य पान </b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sercicesection"><b>सुविधा </b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php"><b>बातम्या</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><b>माहिती</b></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="photogalarry.php"><b>गॅलरी</b></a>
            </li>

<li>
 <div class="dropdown">
  <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <b>संचालक मंडळ</b> 
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="boardmembers.php"><b>संचालक मंडळ</b> </a>
    <a class="dropdown-item" href="apmcemployees.php"><b>कर्मचारी</b> </a>
    
  </div>
</div>
</li>

             <li class="nav-item">
              <a class="nav-link" href="contact.php"><b>संपर्क</b></a>
            </li>
            <li class="nav-item" style="margin-right: 5px">
            <form action="bajarbhav.php">
              <button type="submit" class="btn btn-success" ><b>बाजार भाव</b></button>
            </form>   
            </li>
            <li class="nav-item">
              <form action="registrationform.php">
                  <button type="submit" class="btn btn-success" ><b>Register</b></button>
              </form>
              
              
            </li>
          
          </ul>
        </div>
      </nav>

      </div>
    </div>



    <div class="container" id="card_wrapper">

<form method="post">
  <div class="form-group">
    <label for="AdharNo">आधार क्रमांक</label>
    <input type="number" class="form-control" id="AdharNo" name="AdharNo" placeholder="">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
      
    </div>

    <div >
       <?php

    if (isset($FullName)) {
         print("

           
           <div class='container' id='result_wrapper'>
               
               <div id='message_wrapper'>
                      <p> नमस्कार {$FullName} तुमचा यादी क्रमांक {$id} आहे. </p>
                      



                   </div>


           </div>

        ");

    }
    








         ?>



    </div>
    
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
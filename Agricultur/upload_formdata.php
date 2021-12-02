<?php
session_start();     
include 'database.php';





$error="";

$FullName = $_SESSION['FullName'];
$AdharNo = $_SESSION['AdharNo'];
$AdharImage = $_SESSION['AdharImage'];
$MobileNo = $_SESSION['MobileNo'];
$BankName = $_SESSION['BankName'];
$BankAccountNo = $_SESSION['BankAccountNo'];
$IFSCCODE = $_SESSION['IFSCCODE'];
$SatbaraImage = $_SESSION['SatbaraImage'];
$SatbaraGatNo = $_SESSION['SatbaraGatNo'];
$Shetra = $_SESSION['Shetra'];
$PikaperaArea = $_SESSION['PikaperaArea'];
$Taluka = $_SESSION['Taluka'];
$Village = $_SESSION['Village'];



echo $FullName;
echo $MobileNo;

$GenerateOTP = $_SESSION["GenerateOTP"];

$USEROTP = mysqli_real_escape_string($conn,$_POST['USEROTP']);


// -----------------------------------------------------------------------
// // TO UPLOAD ADHAR IMAGE
// // ---------------------------------------------------------
// $target_dir = "upload_formimages/";
// $target_file = $target_dir. $FullName . " " . "ADHAR IMAGE"." " ."$AdharNo" . " " . basename($_FILES["AdharImage"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["AdharImage"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// // if (file_exists($target_file)) {
// //   echo "Sorry, file already exists.";
// //   $uploadOk = 0;
// // }

// // Check file size
// if ($_FILES["AdharImage"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["AdharImage"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["AdharImage"]["name"])). " has been uploaded.";
    
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }



// -----------------------------------------------------------------------
// // TO UPLOAD SATBARA IMAGE
// // -------------------------------------------------------


// $target_dir = "upload_formimages/";
// $target_file = $target_dir. $FullName . " " . "SATBARA IMAGE"." ". "$AdharNo" . " " . basename($_FILES["SatbaraImage"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["SatbaraImage"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// // if (file_exists($target_file)) {
// //   echo "Sorry, file already exists.";
// //   $uploadOk = 0;
// // }

// // Check file size
// if ($_FILES["SatbaraImage"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["SatbaraImage"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["SatbaraImage"]["name"])). " has been uploaded.";
    
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }

// -----------------------------------------------------------------------
// TO UPLOAD FARMER DATA TO DATABASE IF OTP MATCHES
// ------------------------------------------------------------------------

$errorofotp = "";

    $query="SELECT * FROM farmerinformation WHERE AdharNo='$AdharNo' ";
   if ($result=mysqli_query($conn,$query)) {
      $rowcount=mysqli_num_rows($result);

        if ($rowcount>0) {
           $error="या आधार क्रमांकाची नोंदणी आधी झालेली आहे.";
           header("Location: error.php");
           echo "hello shre";
         
       }
       elseif($rowcount==0){
         // include 'otpsms.php';
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         if ($GenerateOTP == $USEROTP) {
           mysqli_set_charset($conn,'utf8');
           $query="INSERT INTO farmerinformation(FullName,AdharNo,AdharImage,MobileNo,BankName,BankAccountNo,IFSCCODE,SatbaraImage,SatbaraGatNo,Shetra,PikaperaArea,Taluka,Village)VALUES('$FullName','$AdharNo','$AdharImage','$MobileNo','$BankName','$BankAccountNo','$IFSCCODE','$SatbaraImage','$SatbaraGatNo','$Shetra','$PikaperaArea','$Taluka','$Village') ";
           mysqli_query($conn,$query);
           $_SESSION['AdharNo']= $AdharNo;
           header("Location: formtoken.php");
         }elseif ($GenerateOTP != $USEROTP) {
           // echo "OTP not matched";
           $errorofotp = "तुम्ही टाकलेला OTP चुकीचा आहे.";
         }
       }
        
       }




   

    

}





?>

<!-- <!DOCTYPE html>
<html>
<head>
  <title>CHECK OTP PAGE</title>
</head>
<body>
  <form method="post">
    <input type="number" name="USEROTP">
    <input type="submit" name="">
  </form>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
       body{
        /*background-color: #FFB266;*/
        /*background-color: #95C730;*/
        background-image: url(images/42.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      /* Main Menu Bar */
      .menu_wrapper{
      /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
       
       background-color: #01F7E8;
      }
      .nav-link {
       color: black !important;
      }
      /*---------------------*/
      #clm1{
        background-color: white;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         padding: 20px;
         margin-top: 20px;
      }

    </style>

    <title>OTP </title>
  </head>
  <body>

    <! Main Menu Bar !>
          <div  class="container_fluid menu_wrapper sticky-top">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: green;font-size: 120%;"><strong>APMC</strong> </span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link actived" href="index.php"><b>मुख्य पान </b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sercicesection"><b>सुविधा </b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php"><b>बातम्या</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php"><b>माहिती</b></a>
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
                  <button type="submit" class="btn btn-success" ><b>नोंदणी</b></button>
              </form>
              
              
            </li>
          
          </ul>
        </div>
      </nav>

      </div>
    </div>





<!-- --------------------------------------------------------------------------   -->
<div class="container" id="clm1">
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Your OTP</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="USEROTP">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <div style="color: red;">
     <?php
   echo $errorofotp;
  ?>
  </div>
 
</form>    
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
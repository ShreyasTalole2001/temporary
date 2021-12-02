<?php
session_start();
include 'database.php';


// $MobileNo=mysqli_real_escape_string($conn,$_POST['MobileNo']);
// $GenerateOTP = rand ( 10000 , 99999 );
// echo $GenerateOTP;
// $_SESSION["GenerateOTP"] = $GenerateOTP;
// $_SESSION["MobileNo"] = $MobileNo;

$error="";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $_SESSION["FullName"]=mysqli_real_escape_string($conn,$_POST['FullName']);
  $_SESSION["AdharNo"]=mysqli_real_escape_string($conn,$_POST['AdharNo']);
  $_SESSION["AdharImage"]=mysqli_real_escape_string($conn,$_POST['AdharImage']);
  $_SESSION["MobileNo"]=mysqli_real_escape_string($conn,$_POST['MobileNo']);
  $_SESSION["BankName"]=mysqli_real_escape_string($conn,$_POST['BankName']);
  $_SESSION["BankAccountNo"]=mysqli_real_escape_string($conn,$_POST['BankAccountNo']);
  $_SESSION["IFSCCODE"]=mysqli_real_escape_string($conn,$_POST['IFSCCODE']);
  $_SESSION["SatbaraImage"]=mysqli_real_escape_string($conn,$_POST['SatbaraImage']);
  $_SESSION["SatbaraGatNo"]=mysqli_real_escape_string($conn,$_POST['SatbaraGatNo']);
  $_SESSION["Shetra"]=mysqli_real_escape_string($conn,$_POST['Shetra']);
  $_SESSION["PikaperaArea"]=mysqli_real_escape_string($conn,$_POST['PikaperaArea']);
  $_SESSION["Taluka"]=mysqli_real_escape_string($conn,$_POST['Taluka']);
  $_SESSION["Village"]=mysqli_real_escape_string($conn,$_POST['Village']);


// tis two variables are for name of images
$FullName = $_SESSION['FullName']; 
$AdharNo = $_SESSION['AdharNo'];

// // TO UPLOAD ADHAR IMAGE
// // ---------------------------------------------------------
$target_dir = "upload_formimages/";
$target_file = $target_dir. $FullName . " " . "ADHAR IMAGE"." " ."$AdharNo" . " " . basename($_FILES["AdharImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["AdharImage"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
if ($_FILES["AdharImage"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["AdharImage"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["AdharImage"]["name"])). " has been uploaded.";
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



// TO UPLOAD SATBARA IMAGE
// -------------------------------------------------------


$target_dir = "upload_formimages/";
$target_file = $target_dir. $FullName . " " . "SATBARA IMAGE"." ". "$AdharNo" . " " . basename($_FILES["SatbaraImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["SatbaraImage"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
if ($_FILES["SatbaraImage"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["SatbaraImage"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["SatbaraImage"]["name"])). " has been uploaded.";
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

// -------------------------------------------------------------------










// TO GENERATE OTP AND TO REDIRECT CHECKOTP PAGE

  $_SESSION["GenerateOTP"] = rand ( 10000 , 99999 );
  include 'otpsms.php';
  header("Location: upload_formdata.php");
}




?>


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
     /* --------------------------------------------------*/
     
      #clm1{
       padding: 10px;
       background-color: white;
       border-radius: 10px;
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       margin-top: 10px;
      }
      #clm1 h3{
        text-align: center;
      }
      #clm1 h6{
        text-align: center;
      }
      #clm1 p{
        text-align: justify;
        padding: 0px 20px;
      }

      @media all and (max-width: 800px) {
        #clm1{
       padding: 10px;
       background-color: white;
       border-radius: 0px;
       box-shadow: none;
       margin-top: 0px;
      }
      }
       #error{
        color: red;
        text-align: center;
      }
            #select_village{
        border: 1px solid black;
        background-color: gray;
        padding: 5px;
        color: white;
      }
      .Malkapur{
        display: none;
      }
      .Motala{
        display: none;
      }
      .Nandura{
        display: none;
      }
     
    </style>

    <title>Registration Form</title>
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
<div class="container_fluid">
    <div class="col-md-6 mx-auto" id="clm1">
      <h3>कृषी उत्पन्न बाजार समिती मलकापूर</h3>
      <h6>-कापुस उत्पादक शेतकरी बंधुना सुचना-</h6>
      <p>कापुस उत्पादक शेतकरी बंधुना विनंती करण्यात येते की ज्यांना किमान आधारभूत किंमत योजने अंतर्गत कापुस नोंदणी करावयाची आहे त्यांनी खालील नमुन्यामध्ये अचूक व योग्य माहिती भरणा करावी</p>
        <div id="error">
         <?php echo $error;  ?>
        </div>
      <hr>

<form id="myform" method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label for="FullName">शेतकऱ्याचे नाव :-</label>
    <input type="text" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="" name="FullName">
  </div>
<!--   -------------------------------------- -->
  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="AdharNo">आधार क्रमांक :-</label>
     <input type="text" class="form-control" id="AdharNo" aria-describedby="emailHelp" placeholder="" name="AdharNo" pattern="[a-zA-Z0-9\s]+">
    </div>
    <div class="form-group col-md-6">
     <label for="AdharImage">आधार कार्ड (फोटो) :-</label>
     <input type="file" class="form-control" id="AdharImage" aria-describedby="emailHelp" placeholder="" name="AdharImage">
    </div>
  </div>
<!--   ------------------------------ -->

  <div class="form-group">
    <label for="MobileNo">मोबाईल नंबर :-</label>
    <input type="number" class="form-control" id="MobileNo" aria-describedby="emailHelp" placeholder="" name="MobileNo" pattern="[a-zA-Z0-9\s]+">
  </div>
 
<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="BankName">बँकेचे नाव :-</label>
     <input type="text" class="form-control" id="BankName" aria-describedby="emailHelp" placeholder="" name="BankName" pattern="[a-zA-Z0-9\s]+">
  </div>
  <div class="form-group col-md-6">
     <label for="BankAccountNo">बँक अकाऊंट नंबर :-</label>
     <input type="number" class="form-control" id="BankAccountNo" aria-describedby="emailHelp" placeholder="" name="BankAccountNo" pattern="[a-zA-Z0-9\s]+">
  </div>
</div>
<!--   -------------------------------------- -->
  <div class="form-group">
    <label for="IFSCCODE">IFSC CODE :-</label>
    <input type="number" class="form-control" id="IFSCCODE" aria-describedby="emailHelp" placeholder="" name="IFSCCODE" pattern="[a-zA-Z0-9\s]+">
  </div>
<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="SatbaraImage">सातबारा (फोटो) :-</label>
     <input type="file" class="form-control" id="SatbaraImage" aria-describedby="emailHelp" placeholder="" name="SatbaraImage">
  </div>
  <div class="form-group col-md-6">
     <label for="SatbaraGatNo">सातबारा गट क्रमांक :-</label>
     <input type="number" class="form-control" id="SatbaraGatNo" aria-describedby="emailHelp" placeholder="" name="SatbaraGatNo" pattern="[a-zA-Z0-9\s]+">
  </div>
</div>
<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="Shetra">क्षेत्रफळ :-</label>
     <input type="text" class="form-control" id="Shetra" aria-describedby="emailHelp" placeholder="" name="Shetra" pattern="[a-zA-Z0-9\s]+">
  </div>
  <div class="form-group col-md-6">
     <label for="PikaperaArea">पीकपेरा क्षेत्रफळ :-</label>
     <input type="text" class="form-control" id="PikaperaArea" aria-describedby="emailHelp" placeholder="" name="PikaperaArea" pattern="[a-zA-Z0-9\s]+">
  </div>
</div>
<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="taluka">तालुका :-</label>
     <select class="custom-select" name="Taluka" id="Taluka" required=''>
                <option value=""></option>
                <option value="malkapur">मलकापूर</option>
                <option value="motala">मोताळा</option>
                <option value="nandura">नांदुरा</option>
      </select>
  </div>
  <div class="form-group col-md-6">
    <label for="taluka">गाव :-</label><br>
    <a id="select_village" onclick="myFunction()">गाव निवडा</a> <br><br>
  </div>
</div>
<!-- --------------------------------------------- -->
<div class="form-group col-md-6">
     <div id="select_malkapur" style="display: none;"> 

            <label for="Village">गाव निवळा : </label>

              <select class="custom-select" id="village_malkapur" name="Village"  >
                <option value=""></option>
                <option value="Anurabad">अनुराबाद</option>
                <option value="Aaland">आळंद</option>
                <option value="Umali">उमाळी </option>
                <option value="Kamadripur">कमर्दीपूर</option>
                <option value="Kalegav">काळेगाव </option>
                <option value="Kund Kh">कुंड खु. </option>
                <option value="Kund Bk">कुंड बु. </option>
                <option value="Korawad">कोरवाड </option>
                <option value="Khadaki">खडकी </option>
                <option value="KhaparKhed">खापरखेड </option>
                <option value="Khamkhed">खामखेड </option>
                <option value="Khokodi">खोकोडी </option>
                <option value="GahuKhed">गहुखेड </option>
                <option value="GadeGaon">गाडेगाव </option>
                
              </select>

            </div>

            <div id="select_motala" style="display: none;" >

            <label for="Village">गाव निवळा : </label>

              <select class="custom-select" id="village_motala" name="Village"   >
                <option value=""></option>
                <option value="Ajadarad">अजदरड</option>
                <option value="Antri">अंत्री</option>
                <option value="Aadavihir">आडविहीर</option>
                <option value="Aavha">आव्हा</option>
                <option value="Ubalkhed">उबळखेड</option>
                <option value="Talani">तळणी</option>
                <option value="Shelagaon Bajar">शेलगाव बाजार</option>
          

                
              </select>

            </div>

            <div id="select_nandura" style="display: none;" >

            <label for="Village">गाव निवळा : </label>

              <select class="custom-select" id="village_nandura" name="Village"   >
                <option value=""></option>
                <option value="gav">गाव १</option>
                <option value="gav">गाव २</option>
                <option value="gav"> गाव ३  </option>
              </select>

            </div>
  </div>
<!--   -------------------------------------- -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" aria-label="Checkbox for following text input" required>
    </div>
  </div>
  <input type="text" class="form-control" aria-label="Text input with checkbox" value="मी कापुस नोंदणी करीता अर्जामध्ये भरलेली माहिती अचुक व बरोबर आहे." disabled="">
</div>
<!--   -------------------------------------- -->








  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>



</form>

      





    </div>
</div>   




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jq/jquery.js"></script>
    <script type="text/javascript">
       function myFunction() {
      var x = document.getElementById("Taluka").value;
      // document.getElementById("demo").innerHTML = x;
       if (x == "malkapur") {


   
    document.getElementById("select_malkapur").style.display="block"
    document.getElementById("select_motala").style.display="none"
    document.getElementById("select_nandura").style.display="none"
    $('#village_motala').attr('name', '');
    $('#village_nandura').attr('name', '');

    
   


   } else if(x == "motala"){
      
      
      document.getElementById("select_motala").style.display="block"
      document.getElementById("select_malkapur").style.display="none"
      document.getElementById("select_nandura").style.display="none"
      $('#village_malkapur').attr('name', '');
      $('#village_nandura').attr('name', '');
    



   } else if(x == "nandura"){
    
    document.getElementById("select_nandura").style.display="block"
    document.getElementById("select_malkapur").style.display="none"
    document.getElementById("select_motala").style.display="none"
    $('#village_motala').attr('name', '');
    $('#village_malkapur').attr('name', '');
   
   }

   }

    </script>

  </body>
</html>
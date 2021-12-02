<?php
session_start();
include 'database.php';
$AdharNoToFind=$_SESSION["AdharNoToFind"];
mysqli_set_charset($conn,'utf8');
$query = "SELECT * FROM farmerinformation WHERE AdharNo='$AdharNoToFind'";
if ($result=mysqli_query($conn,$query)) {
  while ($row=mysqli_fetch_array($result)) {
      $FullName = $row['FullName'];
   $AdharNo = $row['AdharNo'];
   $MobileNo = $row['MobileNo'];
   $BankName = $row['BankName'];
   $BankAccountNo = $row['BankAccountNo'];
   $IFSCCODE = $row['IFSCCODE'];
   $SatbaraGatNo = $row['SatbaraGatNo'];
   $Shetra = $row['Shetra'];
   $PikaperaArea = $row['PikaperaArea'];
   $id = $row['id'];
   $RegistrationDate = $row['RegistrationDate'];
  }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$FullName=mysqli_real_escape_string($conn,$_POST['FullName']);
$AdharNo=mysqli_real_escape_string($conn,$_POST['AdharNo']);
  // $_SESSION["AdharImage"]=mysqli_real_escape_string($conn,$_POST['AdharImage']);
$MobileNo=mysqli_real_escape_string($conn,$_POST['MobileNo']);
$BankName=mysqli_real_escape_string($conn,$_POST['BankName']);
$BankAccountNo=mysqli_real_escape_string($conn,$_POST['BankAccountNo']);
$IFSCCODE=mysqli_real_escape_string($conn,$_POST['IFSCCODE']);
  // $_SESSION["SatbaraImage"]=mysqli_real_escape_string($conn,$_POST['SatbaraImage']);
$SatbaraGatNo=mysqli_real_escape_string($conn,$_POST['SatbaraGatNo']);
$Shetra=mysqli_real_escape_string($conn,$_POST['Shetra']);
$PikaperaArea=mysqli_real_escape_string($conn,$_POST['PikaperaArea']);
$Taluka=mysqli_real_escape_string($conn,$_POST['Taluka']);
$Village=mysqli_real_escape_string($conn,$_POST['Village']);

mysqli_set_charset($conn,'utf8');
$query="UPDATE farmerinformation
         SET FullName='$FullName',
         AdharNo='$AdharNo',
         MobileNo='$MobileNo',
         BankName='$BankName',
         BankAccountNo='$BankAccountNo',
         IFSCCODE='$IFSCCODE',
         SatbaraGatNo='$SatbaraGatNo',
         Shetra='$Shetra',
         PikaperaArea='$PikaperaArea',
         Taluka='$Taluka',
         Village='$Village'
         WHERE AdharNo='$AdharNoToFind'
         ";
mysqli_query($conn,$query);

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
        background-color: #D5E6FF;
      }
      
      /* Main Menu Bar */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: white;
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
        text-align: center;
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
    </style>

    <title>EDIT</title>
  </head>
  <body>
    <! Main Menu Bar !>
          <div  class="container_fluid menu_wrapper ">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: green;font-size: 120%;font-weight: 700;">APMC MALKPAUR</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><b>DASHBOARD</b> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      </div>
    </div>
    <!-- -------------------------------------------------------------------- -->




    <div class="container_fluid" id="printableArea">
    <div class="col-md-6 mx-auto" id="clm1">
      <h3>कृषी उत्पन्न बाजार समिती मलकापूर</h3>
      <h6>-कापुस नोंदणी टोकन-</h6>
      <p>नमस्कार <?php echo $FullName; ?> कापूस नोदणी केल्याबद्दल धन्यवाद. </p>
      
    <button onclick="printDiv('printableArea')">Print this page</button>
      <hr>

<form method="post">
<!--   <div class="form-row"> -->
  <div class="form-group">
    <label for="id">नोंदणी क्रमांक :-</label>
    <input type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="" name="id" value="<?php echo $id ?>" disabled>
  </div>
<!--   <div class="form-group col-md-6">
    <label for="RegistrationDate">नोंदणी दिनांक :-</label>
    <input type="text" class="form-control" id="RegistrationDate" aria-describedby="emailHelp" placeholder="" name="RegistrationDate" value="<?php echo $RegistrationDate ?>" >
  </div>
 -->
 <!--  </div> -->
<!--   ------------------------------------------- -->
  <div class="form-group">
    <label for="FullName">शेतकऱ्याचे नाव :-</label>
    <input type="text" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="" name="FullName" value="<?php echo $FullName ?>" >
  </div>
<!--   -------------------------------------- -->
  <div class="form-row">
    <div class="form-group col-md">
     <label for="AdharNo">आधार क्रमांक :-</label>
     <input type="text" class="form-control" id="AdharNo" aria-describedby="emailHelp" placeholder="" name="AdharNo"
     value="<?php echo $AdharNo ?>" >
    </div>
  </div>
<!--   ------------------------------ -->
  <div class="form-group">
    <label for="MobileNo">मोबाईल नंबर :-</label>
    <input type="number" class="form-control" id="MobileNo" aria-describedby="emailHelp" placeholder="" name="MobileNo" value="<?php echo $MobileNo ?>" >
  </div>
<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="BankName">बँकेचे नाव :-</label>
     <input type="text" class="form-control" id="BankName" aria-describedby="emailHelp" placeholder="" name="BankName" value="<?php echo $BankName ?>" >
  </div>
  <div class="form-group col-md-6">
     <label for="BankAccountNo">बँक अकाऊंट नंबर :-</label>
     <input type="number" class="form-control" id="BankAccountNo" aria-describedby="emailHelp" placeholder="" name="BankAccountNo" value="<?php echo $BankAccountNo ?>" >
  </div>
</div>
<!--   -------------------------------------- -->
  <div class="form-group">
    <label for="IFSCCODE">IFSC CODE :-</label>
    <input type="number" class="form-control" id="IFSCCODE" aria-describedby="emailHelp" placeholder="" name="IFSCCODE" value="<?php echo $IFSCCODE ?>" >
  </div>
<!--   -------------------------------------- -->

 
  <div class="form-group">
     <label for="SatbaraGatNo">सातबारा गट क्रमांक :-</label>
     <input type="number" class="form-control" id="SatbaraGatNo" aria-describedby="emailHelp" placeholder="" name="SatbaraGatNo" value="<?php echo $SatbaraGatNo ?>" >
  </div>

<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="Shetra">क्षेत्रफळ :-</label>
     <input type="text" class="form-control" id="Shetra" aria-describedby="emailHelp" placeholder="" name="Shetra" value="<?php echo $Shetra ?>" >
  </div>
  <div class="form-group col-md-6">
     <label for="PikaperaArea">पीकपेरा क्षेत्रफळ :-</label>
     <input type="text" class="form-control" id="PikaperaArea" aria-describedby="emailHelp" placeholder="" name="PikaperaArea" value="<?php echo $PikaperaArea ?>"  >
  </div>
</div>
<!--   -------------------------------------- -->

<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

</div>
</form>
<br>
    

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
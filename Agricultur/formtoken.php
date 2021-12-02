<?php
session_start();
include 'database.php';
$AdharNo = $_SESSION['AdharNo'];
mysqli_set_charset($conn,'utf8');
$query="SELECT * FROM farmerinformation WHERE AdharNo='$AdharNo' ";

 if ($result= mysqli_query($conn,$query)) {
  $row=mysqli_fetch_array($result);
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

    <title>token</title>
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




<div class="container_fluid" id="printableArea">
    <div class="col-md-6 mx-auto" id="clm1">
      <h3>कृषी उत्पन्न बाजार समिती मलकापूर</h3>
      <h6>-कापुस नोंदणी टोकन-</h6>
      <p>नमस्कार <?php echo $FullName; ?> कापूस नोदणी केल्याबद्दल धन्यवाद. </p>
      
    <button onclick="printDiv('printableArea')">Print this page</button>
      <hr>


<!--   <div class="form-row"> -->
  <div class="form-group">
    <label for="id">नोंदणी क्रमांक :-</label>
    <input type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="" name="id" value="<?php echo $id ?>" disabled>
  </div>
<!--   <div class="form-group col-md-6">
    <label for="RegistrationDate">नोंदणी दिनांक :-</label>
    <input type="text" class="form-control" id="RegistrationDate" aria-describedby="emailHelp" placeholder="" name="RegistrationDate" value="<?php echo $RegistrationDate ?>" disabled>
  </div>
 -->
 <!--  </div> -->
<!--   ------------------------------------------- -->
  <div class="form-group">
    <label for="FullName">शेतकऱ्याचे नाव :-</label>
    <input type="text" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="" name="FullName" value="<?php echo $FullName ?>" disabled>
  </div>
<!--   -------------------------------------- -->
  <div class="form-row">
    <div class="form-group col-md">
     <label for="AdharNo">आधार क्रमांक :-</label>
     <input type="text" class="form-control" id="AdharNo" aria-describedby="emailHelp" placeholder="" name="AdharNo"
     value="<?php echo $AdharNo ?>" disabled>
    </div>
  </div>
<!--   ------------------------------ -->
  <div class="form-group">
    <label for="MobileNo">मोबाईल नंबर :-</label>
    <input type="number" class="form-control" id="MobileNo" aria-describedby="emailHelp" placeholder="" name="MobileNo" value="<?php echo $MobileNo ?>" disabled>
  </div>
<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="BankName">बँकेचे नाव :-</label>
     <input type="text" class="form-control" id="BankName" aria-describedby="emailHelp" placeholder="" name="BankName" value="<?php echo $BankName ?>" disabled>
  </div>
  <div class="form-group col-md-6">
     <label for="BankAccountNo">बँक अकाऊंट नंबर :-</label>
     <input type="number" class="form-control" id="BankAccountNo" aria-describedby="emailHelp" placeholder="" name="BankAccountNo" value="<?php echo $BankAccountNo ?>" disabled>
  </div>
</div>
<!--   -------------------------------------- -->
  <div class="form-group">
    <label for="IFSCCODE">IFSC CODE :-</label>
    <input type="number" class="form-control" id="IFSCCODE" aria-describedby="emailHelp" placeholder="" name="IFSCCODE" value="<?php echo $IFSCCODE ?>" disabled>
  </div>
<!--   -------------------------------------- -->

 
  <div class="form-group">
     <label for="SatbaraGatNo">सातबारा गट क्रमांक :-</label>
     <input type="number" class="form-control" id="SatbaraGatNo" aria-describedby="emailHelp" placeholder="" name="SatbaraGatNo" value="<?php echo $SatbaraGatNo ?>" disabled>
  </div>

<!--   -------------------------------------- -->
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="Shetra">क्षेत्रफळ :-</label>
     <input type="text" class="form-control" id="Shetra" aria-describedby="emailHelp" placeholder="" name="Shetra" value="<?php echo $Shetra ?>" disabled>
  </div>
  <div class="form-group col-md-6">
     <label for="PikaperaArea">पीकपेरा क्षेत्रफळ :-</label>
     <input type="text" class="form-control" id="PikaperaArea" aria-describedby="emailHelp" placeholder="" name="PikaperaArea" value="<?php echo $PikaperaArea ?>" disabled >
  </div>
</div>
<!--   -------------------------------------- -->
</div>
<br>


























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
  </body>
</html>
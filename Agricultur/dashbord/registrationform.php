<?php
session_start();
include "database.php";



$FullName=mysqli_real_escape_string($conn,$_POST['FullName']);
$AdharNo=mysqli_real_escape_string($conn,$_POST['AdharNo']);
$MobileNo=mysqli_real_escape_string($conn,$_POST['MobileNo']);
$Taluka=mysqli_real_escape_string($conn,$_POST['Taluka']);
$Village=mysqli_real_escape_string($conn,$_POST['Village']);
$BankName=mysqli_real_escape_string($conn,$_POST['BankName']);
$BankAccount=mysqli_real_escape_string($conn,$_POST['BankAccount']);
$IFSCCode=mysqli_real_escape_string($conn,$_POST['IFSCCode']);

$_SESSION['AdharNo']=$AdharNo;
$error="";






if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $query="SELECT * FROM farmerregistration WHERE AdharNo='$AdharNo' ";
   if ($result=mysqli_query($conn,$query)) {
      $rowcount=mysqli_num_rows($result);

        if ($rowcount>0) {
        $error="या आधार क्रमांकाची नोंदणी आधी झालेली आहे.";
       
         
       }
       elseif($rowcount==0){
        $query="INSERT INTO farmerregistration(FullName, AdharNo, MobileNo, Taluka, Village, BankName, BankAccount, IFSCCode)VALUES('$FullName', '$AdharNo', '$MobileNo', '$Taluka', '$Village', '$BankName', '$BankAccount', '$IFSCCode')   ";

              mysqli_query($conn,$query);
                header("Location: new.php");
       }




   

    

}



}















?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="css/w3-theme-black.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #F1F7FD;
        background-image: url("images/42.jpg");

      }
       /* Main Menu Bar */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: #01F7E8;
      }
      .nav-link {
       color: black !important;
      }

      #Form_Wrapper{
        
        /*border: 1px solid black;*/
        
        margin-top: 50px;
        margin-bottom: 50px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: white;
      }
      @media all and (max-width: 800px) {

    #Form_Wrapper{
        
        /*border: 1px solid black;*/
        
       margin-top: 0px;
        margin-bottom: 50px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: white;
      }

      }
      #clm1{
        
        
      }
      #clm1 h3{
        margin-top: 10px;
        text-align: center;
        font-weight: 700;
        background-color: green;
        padding: 10px;
        color: white;
      }
      #clm1 ul{
        margin-top: 30px;
        font-weight: 500;
        font-size: 130%;
      }
      #clm2{
        padding: 20px;
        border-left: 1px solid green;
      }
      @media all and (max-width: 800px) {
      #clm2{
        padding: 20px;
        border-left: none;
        border-top: 1px solid green;
        margin-top: 20px;
       
      }

      }
      #select_village{
        border: 1px solid black;
        background-color: gray;
        padding: 5px;
        color: white;
      }
      #error{
        color: red;
      }
       /*Footer*/
        #footer_wrapper{
          background-color: black;
          padding-bottom: 50px;
          
        }

       


    </style>

    <title>Registration Form</title>
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


    <! Form !>


    <div class="container" id="Form_Wrapper">

        <div class="container">
          <div class="row mx-auto">
            <div class="col-sm " id="clm1">

            <h3>XYZ  करिता नोंदणी</h3>




              <h3>सूचना</h3>

              <ul>
                <li>फॉर्म भारतान सर्व अंक इंग्रजी मध्ये भरावे.</li>
                <li>आधार क्रमांक व मोबाईल नंबर व्यवस्तीत भरावा.</li>
                <li>सूचना क्रमांक 3</li>
                <li>सूचना क्रमांक 4</li>
                <li>सूचना क्रमांक 5</li>
                <li>सूचना क्रमांक 6</li>
                <li>सूचना क्रमांक 7</li>
              </ul>

              <!-- <h3>धन्यवाद </h3> -->
               <form action="find.php">
              <button type="submit" class="btn btn-success" ><b>यादी (नोंदणी) क्रमांक शोधा </b></button>
        </form>

             




            </div>
            <div class="col-sm" id="clm2">
              
            <form method="post" id="myform">
            

              <div class="form-group" >
              <label>शेतकऱ्याचे पूर्ण नाव:</label>
              <input type="text" class="form-control" id="FullName" name="FullName" placeholder="" required="">
            </div>

            <div class="form-group" >
              <label>आधार क्रमांक:</label>
              <input type="number" class="form-control" id="AdharNo" name="AdharNo" placeholder="" required>
            </div>

            <div class="form-group" >
              <label>आधार कार्ड :</label>
              <input type="file" class="form-control" id="AdharCardImage" name="AdharCardImage" placeholder="" required>
            </div>


            <div class="form-group" >
              <label>मोबाईल नंबर:</label>
              <input type="number" class="form-control" id="MobileNo" name="MobileNo" placeholder="" required>
            </div>
            <div class="form-group" >
              <label>बँकेचे नाव :</label>
              <input type="text" class="form-control" id="BankName" name="BankName" placeholder="" required>
            </div>
            <div class="form-group" >
              <label>बँक अकाऊंट :</label>
              <input type="number" class="form-control" id="BankAccount" name="BankAccount" placeholder="" required>
            </div>
            <div class="form-group" >
              <label>IFSC CODE :</label>
              <input type="text" class="form-control" id="IFSCCode" name="IFSCCode" placeholder="" required>
            </div>
















            <div class="form-group" >
              <label>सातबारा</label>
              <input type="file" class="form-control" id="SatBara" name="SatBara" placeholder="" required>
            </div>


            <div class="form-group">
            <label for="Taluka">तालुका निवळा : </label>
              <select name="Taluka" id="Taluka" required=''>
                <option value=""></option>
                <option value="malkapur">मलकापूर</option>
                <option value="motala">मोताळा</option>
                <option value="nandura">नांदुरा</option>
              </select>
            </div>

            <a id="select_village" onclick="myFunction()">गाव निवडा</a> <br><br>

            <div id="select_malkapur" style="display: none;"> 

            <label for="Village">गाव निवळा : </label>

              <select id="village_malkapur" name="Village"  >
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

              <select id="village_motala" name="Village"   >
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

              <select id="village_nandura" name="Village"   >
                <option value=""></option>
                <option value="gav">गाव १</option>
                <option value="gav">गाव २</option>
                <option value="gav"> गाव ३  </option>
              </select>

            </div>

              
              
              
              <button type="submit" class="btn btn-success">Submit</button>
            </form>

            <div id="error">
              <?php echo $error;  ?>
            </div>

            </div>
            
          </div>
        </div>
      

    </div>
    <p id="demo"></p>


    <! Footer !>



    <div id="footer_wrapper">
       
   


       <footer class="w3-container w3-theme-d1">

<br>
 <p style="color: white;text-align: center;">© 2020 APMC malkapur. All Rights Reserved</p>



<br><h4 style="color: white;">महत्वाच्या वेबसाईट</h4>
<div class="w3-row">
   <div class="w3-col m4"  style="color:WHITE;line-height: 2.2em">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;
    <a href="http://www.enam.gov.in" style="color:WHITE;" target="_blank">ई-नाम</a>
    </div>

    
 <div class="w3-col m4" style="color:WHITE;line-height: 2.2em">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;  <a href="https://www.msamb.com" style="color:WHITE;" target="_blank">पणन मंडळ </a>
    </div>
    
   
    <div class="w3-col m4"  style="color:WHITE;line-height: 2.2em">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;
    <a href="http://maharashtra.gov.in/" style="color:WHITE;" target="_blank"><i class="far fa-dot-circle"></i> महाराष्ट्र शासन</a>
    </div>

    <div class="w3-col m4" style="color:WHITE;line-height: 2.2em">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;
    <a href="https://india.gov.in/" style="color:WHITE;" target="_blank">भारत सरकार</a>
    </div>
    <div class="w3-col m4"  style="color:WHITE;line-height: 2.2em">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;
    <a href="https://www.maharashtra.gov.in/1148/RTI-Act-2005" style="color:WHITE;" target="_blank">माहितीचा अधिकार</a>
    </div>
    <div class="w3-col m4"  style="color:WHITE;line-height: 2.2em;">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;
    <a href="http://imdagrimet.gov.in/hi" style="color:WHITE;" target="_blank">कृषि हवामान विभाग</a>
    </div>
    <div class="w3-col m4" style="color:WHITE;line-height: 2.2em">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;
    <a href="https://mahabhulekh.maharashtra.gov.in/" style="color:WHITE;" target="_blank">महसूल विभाग</a>
    </div>
    <div class="w3-col m4"  style="color:WHITE;line-height: 2.2em">
    <i class="fa fa-dot-circle-o" style="color:WHITE;"></i>&nbsp;
    <a href="http://agmarknet.gov.in" style="color:WHITE;" target="_blank">भारतीय कृषि मार्केट</a>
    </div>    
</div>

    </div>

    

    

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jq/jquery.js"></script>
    <script type="text/javascript">

      

    </script>


    <script>

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
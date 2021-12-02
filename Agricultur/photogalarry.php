<?php




?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/w3-theme-black.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
      
      }
    	/* Main Menu Bar */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color:  #01F7E8;
      }
      .nav-link {
       color: black !important;
      }
       

     

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width:300px;
  height: 300px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-top: 10px;
  text-align: center;

}
 @media all and (max-width: 800px) {

div.gallery {
  
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width:330px;
  height: 400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-top: 10px;
  text-align: center;




}


 }

div.gallery:hover {
  border: 1px solid #777;
  transition: 0.5s;
  background-color: green;
  color: white;
  transform: scale(1.1);


}

div.gallery img {
  width: 100%;
  /*height: 300px;*/
  height: auto;

}

div.desc {
  padding: 15px;
  text-align: center;
  color: #FFAB2F;
  /*font-size: 150%;*/
}
div.desc:hover{
  color: white;
}
#wrapper{
  
  margin-top: 50px;
  background-color: white;
}

#photo_head{
  margin-top: 50px;
  color: #FFAB2F;
  text-align: center;

}

 @media all and (max-width: 800px) {
div.gallery:hover {
  border: 1px solid #777;
  transition: 0.0s;
  background-color: white;
  color: #FFAB2F;
  transform: scale(1.0);


}

 }

/*Footer*/
        #footer_wrapper{

          background-color: black;
          padding-bottom: 50px;
          margin-top: 50px;
          
        }


    </style>

    <title>Photo Galarry</title>
  </head>
  <body>

  	 <! Main Menu Bar !>
          <div  class="container_fluid menu_wrapper sticky-top">
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
              <a class="nav-link" href="index.php#sercicesection"><b>सुविधा </b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php"><b>बातम्या</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php"><b>माहिती</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link actived" href="photogalarry.php"><b>गॅलरी</b></a>
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

    <! Carnesol !>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/galarry/7.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/galarry/7.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/galarry/7.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

















    <! PHOTO GALARRY !>

    <div class="container" id="photo_head">
      <h3><b>फोटो गॅलरी</b></h3>
    </div>

      <div class="container_fluid" id="wrapper">
      <?php

      include 'database.php'; 
      $query = "SELECT * FROM galerry ORDER BY id DESC";
      $result=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_array($result)) {
          
          $ImageURL ='uploads_galerry/'.$row['ImageLink1'];
          $ImageDescription = $row['Description'];

          print("

              <div class='gallery'>
                <a target='_blank'>
                  <img src='{$ImageURL}'  alt='Cinque Terre' >
                </a>
                <div class='desc'><p>{$ImageDescription}</p></div>
              </div>




            ");
        }


      ?>
            
      </div> 





 <!-- <div id="footer_wrapper">
       
   


       <footer class="w3-container w3-theme-d1">

<br>
 <p style="color: white;text-align: center;">© 2020 APMC malkapur. All Rights Reserved</p>

  <form style="text-align: center;" action="adminlogin.php" target="_blank">
           <button type="submit" class="btn btn-success" ><b>ADMIN LOGIN</b></button>
       </form>

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

 -->









    

   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <script type="text/javascript">
      $('.actived').css("border-bottom","3px solid orange")
  	







  </script>
</html>
<?php
include "database.php";
$query="SELECT * FROM yadi WHERE id=(SELECT max(id) FROM yadi)";
if ($result=mysqli_query($conn,$query)) {
     
     while ($row=mysqli_fetch_array($result)) {
       
$date=$row['datee'];

$gahumax=$row['gahumax'];
$gahumin=$row['gahumin'];
$gahuavg=$row['gahuavg'];
$gahuaavak=$row['gahuaavak'];

$jwarimax=$row['jwarimax'];
$jwarimin=$row['jwarimin'];
$jwariavg=$row['jwariavg'];
$jwariaavak=$row['jwariaavak'];

$makamax=$row['makamax'];
$makamin=$row['makamin'];
$makaavg=$row['makaavg'];
$makaaavak=$row['makaaavak'];

$bajarimax=$row['bajarimax'];
$bajarimin=$row['bajarimin'];
$bajariavg=$row['bajariavg'];
$bajariaavak=$row['bajariaavak'];

$chanamax=$row['chanamax'];
$chanamin=$row['chanamin'];
$chanaavg=$row['chanaavg'];
$chanaaavak=$row['chanaaavak'];

$tuvarmax=$row['tuvarmax'];
$tuvarmin=$row['tuvarmin'];
$tuvaravg=$row['tuvaravg'];
$tuvaraavak=$row['tuvaraavak'];

$mungmax=$row['mungmax'];
$mungmin=$row['mungmin'];
$mungavg=$row['mungavg'];
$mungaavak=$row['mungaavak'];

$uditmax=$row['uditmax'];
$uditmin=$row['uditmin'];
$uditavg=$row['uditavg'];
$uditaavak=$row['uditaavak'];

$mathmax=$row['mathmax'];
$mathmin=$row['mathmin'];
$mathavg=$row['mathavg'];
$mathaavak=$row['mathaavak'];

$chavalimax=$row['chavalimax'];
$chavalimin=$row['chavalimin'];
$chavaliavg=$row['chavaliavg'];
$chavaliaavak=$row['chavaliaavak'];

$falliolimax=$row['falliolimax'];
$falliolimin=$row['falliolimin'];
$fallioliavg=$row['fallioliavg'];
$fallioliaavak=$row['fallioliaavak'];

$fallisukimax=$row['fallisukimax'];
$fallisukimin=$row['fallisukimin'];
$fallisukiavg=$row['fallisukiavg'];
$fallisukiaavak=$row['fallisukiaavak'];

$tilmax=$row['tilmax'];
$tilmin=$row['tilmin'];
$tilavg=$row['tilavg'];
$tilaavak=$row['tilaavak'];

$soyabinmax=$row['soyabinmax'];
$soyabinmin=$row['soyabinmin'];
$soyabinavg=$row['soyabinavg'];
$soyabinaavak=$row['soyabinaavak'];

$moharimax=$row['moharimax'];
$moharimin=$row['moharimin'];
$mohariavg=$row['mohariavg'];
$mohariaavak=$row['mohariaavak'];

$erandimax=$row['erandimax'];
$erandimin=$row['erandimin'];
$erandiavg=$row['erandiavg'];
$erandiaavak=$row['erandiaavak'];

$mirachisukimax=$row['mirachisukimax'];
$mirachisukimin=$row['mirachisukimin'];
$mirachisukiavg=$row['mirachisukiavg'];
$mirachisukiaavak=$row['mirachisukiaavak'];

$mirachiolimax=$row['mirachiolimax'];
$mirachiolimin=$row['mirachiolimin'];
$mirachioliavg=$row['mirachioliavg'];
$mirachioliaavak=$row['mirachioliaavak'];

$kandamax=$row['kandamax'];
$kandamin=$row['kandamin'];
$kandaavg=$row['kandaavg'];
$kandaaavak=$row['kandaaavak'];

$kapusmax=$row['kandamax'];
$kapusmin=$row['kandamin'];
$kapusavg=$row['kandaavg'];
$kapusaavak=$row['kandaaavak'];




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
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      html {
            scroll-behavior: smooth;
        }
      /* Main Menu Bar */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       
       background-color: #01F7E8;
      }
      .nav-link {
       color: black !important;
      }
      /* Main Image And Text desktop view*/
      .main_image_wrapper{
        display: flex;
        
        flex-flow: row-reverse wrap; 
      }
  
     

      #clm1 h1{
        font-weight: 700;
        margin-top: 100px;
        font-size: 300%;

      }
      
      #main_image_desktop {display:block;}
      #main_image_mobile {display:none}
      /* Main Image And Text mobile view*/
      
      @media all and (max-width: 800px) {
            #main_image_desktop {display: none;}
            #main_image_mobile {display: block;}
            #clm2 h1{
              font-weight: 700;
              
            }
            #clm1{
              margin-top: 0px;

            }
          }

          /*Bajar Bahav Section scrolling*/
          #Bajarbhav_wrapper{
            background-color: gray;
            padding: 10px;
            margin-top: 20px;
            color: white;
            font-weight: 700;
            font-size: 150%;
          }
          .stripbar {
    float: left;
  width:100%;
    background-color: #eaece3;
    height: 88px;
    border: 1px solid #008000;
    font-size: 16px;
    line-height: 35px;
    color: #555555;
    margin-bottom: 1px;
    margin-top: 10px;
   
}

.stripbar-header {
  position: absolute;
    background: green;
    width: 100px;
    height: 88px;
    line-height: 88px;
    font-size: 18px;
    font-weight: 600;
    color: #ffffff;
    text-align: center;
    float: left;
    left: 0;
    z-index: 998;
    margin-top: 10px;
}



          /* Service boxes */
          #our_services{
          text-align: center;
          color: green;
          margin-top: 20px;
          padding-top: 100px;
       }
       .service_box{

        margin-top: 30px;
        text-align: center;
       }
      .ser{
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .box:hover{
          transition: 0.5s;
          background-color: green;
          color: white;
          transform: scale(1.1);
        }
        #bajar_bhav{
          margin-top: 20px;
        }

        /*Enam Section*/
        #Ename_wrapper{
          margin-top: 50px;
        }
        #Enam_Image_wrapper{


        }
        #Enam_text_wrapper{

        }
        #Enam_text_wrapper h1{
          text-align: center;
          border-bottom: 1px solid green;
          background-color: green;
          color: white;
          font-weight: 700;
        }

        /*Footer*/
        #footer_wrapper{
          background-color: black;
          padding-bottom: 50px;
          
        }

       
 
            
        
       



    </style>

    <title>Home</title>
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
              <a class="nav-link actived" href="#"><b>मुख्य पान </b> <span class="sr-only">(current)</span></a>
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
                  <button type="submit" class="btn btn-success" ><b>Register</b></button>
              </form>
              
              
            </li>
          
          </ul>
        </div>
      </nav>

      </div>
    </div>

    <! Main Image And Text desktop !>

<div class="container main_image_wrapper" id="main_image_desktop">
  <div class="row">
    <div class="col-sm w3-container w3-animate-bottom" id="clm1">
      <h1 style="color: green;"> कृषी उत्पन्न बाजार समिती मलकापूर </h1>
          <br>
        <h6 style="color: #FFAB2F;font-size: 120%">
        "शेतकऱ्यांचे हित जोपासण्यासाठी शेतमालाची अग्रगण्य व भव्य बाजार पेठ"
        </h6>

        <br>
         
        <form action="bajarbhav.php">
              <button type="submit" class="btn btn-success" ><b>बाजार भाव</b></button>
        </form>
       
   

        <div class="w3-animate-left" style="margin-top: 80px;background-color: #7F7F7F;padding: 10px;color: white; font-weight: 700;text-align: center;">
          <h5>कृषी उत्पन्न बाजार समितीच्या वेब पोर्टल वर आपले स्वागत आहे.</h5>
        </div>

      


       
    

    </div>
    <div class="col-sm w3-animate-zoom" id="clm2 order-first">
      <img id="image1" src="images/mainimages/image1.png" class="img-fluid mx-auto" alt="Responsive image">
      <script type="text/javascript">

        




      </script>
    </div>
  </div>
</div>


    <! Main Image And Text mobile !>

    <div class="container main_image_wrapper" id="main_image_mobile">
      <div class="row">
        <div class="col-sm w3-animate-zoom" id="clm1">
          <img src="images/mainimages/image1.png" class="img-fluid mx-auto" alt="Responsive image">
        

        </div>
        <div class="col-sm w3-container w3-animate-bottom" id="clm2">
          
          <h1 style="color: green;">कृषी उत्पन्न बाजार समिती मलकापूर </h1>
          <br>
        <h6>
          "शेतकऱ्यांचे हित जोपासण्यासाठी शेतमालाची अग्रगण्य व भव्य बाजार पेठ"
        </h6>

        <br>
        <form action="bajarbhav.php">
              <button type="submit" class="btn btn-success" ><b>बाजार भाव</b></button>
        </form>  
        
           
        </div>
      </div>
    </div>

    <hr>


   <! Bajar Bhav Section !>

  



   <div class="stripbar-header"> बाजारभाव  </div>
<div class="stripbar">
<marquee scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();">
<table hight="80">
<tr>
  <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>गहू</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$gahumax";  ?> <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$gahumin";  ?> <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>ज्वारी</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$jwarimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$jwarimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>मका</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$makamax";  ?> <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$makamin";  ?> <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>बाजरी</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$bajarimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$bajarimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>चना</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$chanamax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$chanamin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>तुवर</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$tuvarmax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$tuvarmin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>मुंग</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$mungmax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$mungmin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>उडीत</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$uditmax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$uditmin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>मठ</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$mathmax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$mathmin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>चवळी</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$chavalimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$chavalimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>फल्ली ओली</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$falliolimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$falliolimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>फल्ली सुकी</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$fallisukimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$fallisukimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>तीळ</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$tilmax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$tilmin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>सोयाबीन </b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$soyabinmax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$soyabinmin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>मोहरी</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$moharimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$moharimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>एरंडी</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$erandimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$erandimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>मिरची सुकी</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$mirachisukimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$mirachisukimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>मिरची ओली</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$mirachiolimax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$mirachiolimin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>कांदा</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$kandamax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$kandamin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
  </td>
    <td style="border-right: 2px solid #bfbbbb;padding-left:5px;padding-right:5px">
  <table>
  <tr>
  <td align="center"><b>कापूस</b></td>
  </tr>
  <tr>
  <td>
  <i class="fa fa-inr"></i>
  <?php echo "$kapusmax";  ?>  <i class="fa fa-caret-up fa-1x" style="color:#00AA00;"></i>&nbsp;&nbsp;
  
  <i class="fa fa-inr"></i>
  <?php echo "$kapusmin";  ?>  <i class="fa fa-caret-down" style="color:RED;"></i>
  </td>
  </tr>
  </table>
    </tr>
  </table>
</marquee>
</div>
</div>





    <! Services Provided  !>

<div id="sercicesection">
  
</div>

    <div data-aos="zoom-in" id="our_services">
      <h1>सुविधा</h1>
    </div>




    <div class="container">
<div class="service_box">
      <div class="row">
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;"data-aos="flip-left">
          <img class="card-img-top" src="images/s1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>शेतमाल गुणवत्ता तपासणी प्रयोग शाळा</b></h5>
            <p class="card-text"></p>
          </div>
        </div>
    </div>
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;"data-aos="flip-left">
          <img class="card-img-top" src="images/s2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>ग्रीन RO Water Cooler</b></h5>
            <p class="card-text">शुद्ध पिण्याचे पाणी</p>
          </div>
        </div>
    </div>
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;"data-aos="flip-left">
          <img class="card-img-top" src="images/s3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>शेतमाल विक्रीसाठी भव्य शेड</b></h5>
            <p class="card-text">संपूर्ण सुविधे  सह</p>
          </div>
        </div>
    </div> 
  </div>
</div>
</div>



    <div class="container">
<div class="service_box">
      <div class="row">
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;"data-aos="flip-left">
          <img class="card-img-top" src="images/450.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>ई-लिलाव सभागृह </b></h5>
            <p class="card-text"></p>
          </div>
        </div>
    </div>
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;"data-aos="flip-left">
          <img class="card-img-top" src="images/450.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>रोड, विद्युत दिवे</b></h5>
            <p class="card-text"></p>
          </div>
        </div>
    </div>
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;"data-aos="flip-left">
          <img class="card-img-top" src="images/450.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>शेतकरी विश्राम गृह</b></h5>
            <p class="card-text"></p>
          </div>
        </div>
    </div> 
  </div>
</div>
</div>


<div style="text-align: center;margin-top: 20px;">
   <a  href="aboutus.php">अधिक माहिती साठी येथे क्लिक करा.</a>

</div>




  <! Enam Section !>

  <div data-aos="zoom-in" id="our_services">
      <h1>विशेष उपक्रम</h1>
    </div>

<div class="container" id="Ename_wrapper" data-aos="fade-up">
  <div class="row">
    <div class="col-sm" id="Enam_Image_wrapper" >
      <img src="images/farming.jpg" class="img-fluid mx-auto" alt="Responsive image">
    </div>
    <div class="col-sm" id="Enam_text_wrapper" >
      <h1>E-NAM (ई-नाम)</h1>
      <p>ई-नाम एक समांतर विपणन संरचना नाही परंतु भौतिक मंडीचे राष्ट्रीय नेटवर्क तयार करण्यासाठी साधन आहे ज्यास ऑनलाइन प्रवेश केला जाऊ शकतो.मंडीच्या उपलब्ध पायाभूत सुविधांचा फायदा घेण्यात येऊन ई-नाम च्या माध्यमातून ऑनलाइन व्यापारामुळे अंतर मंडी /अंतरराज्य स्तरावरील स्थानिक स्तरावर व्यापारत सहभाग होऊ शकतात.<br>
        ई-नाम इलेक्ट्रॉनिक ट्रेडिंग प्लॅटफॉर्म भारत सरकार (कृषी आणि शेतकरी कल्याण मंत्रालयाद्वारे) द्वारे गुंतवणूकीद्वारे तयार करण्यात आली आहे राज्यातील अस्तित्वात असलेल्या कोणत्याही मंडीला "प्लग-इन" प्रदान करते (जरी नियमन केलेले किंवा खाजगी असले तरीही) . ई-नामसाठी विकसित केलेला विशेष सॉफ्टवेअर जो प्रत्येक राज्य मंडी अधिनियमाच्या नियमांचे पालन करण्यासाठी राष्ट्रीय नेटवर्कमध्ये सामील होण्यासाठी सहमत आहे अश्या प्रत्येक मंडीला उपलब्ध आहे<br>
      जी राज्जे त्यांच्या मंडीचा समावेश ई-नाम मध्ये करण्यासाठी इच्छुक आहेत, त्यांनी एपीएमसी कायद्यात पुढील तीन सुधारणा केल्या पाहिजेत.ए) सिंगल ट्रेडिंग परवाना (युनिफाइड) हा संपूर्ण राज्यात वैध आहेब) राज्यभर बाजारपेठेतील एकरकमी शुल्क आकारणे; आणिb) Single point levy of market fee across the state; andसी) ज्यास्त्त किंमत मिळण्यासाठी म्हणून ई-लिलाव / ई-ट्रेडिंगसाठी तरतूद.<br>
       ई-नाम बद्दल अधिक माहिती साठी येते क्लिक करा <a href="https://www.enam.gov.in/web/">www.enam.gov.in</a></p>
    </div>
  </div>

<br>
<br>

  <div class="row">
    <div class="col-sm" id="Enam_text_wrapper" >
      <h1>शेतमाल तारण कर्ज योजना</h1>
      <p>
        शेतकऱ्याला असलेल्या आर्थिक गरजेपोटी तसेच स्थानिकपातळीवर शेतमाल साठवणुकीच्या पुरेशा सुविधा नसल्यामुळे शेतीमालाचे काढणी हंगामात मोठ्या प्रमाणात शेतीमाल बाजार पेठेत विक्रीसाठी येतो. साहजीकच शेतमालाचे बाजार भाव खाली येतात. सदर शेतमाल साठवणूक करुन काही कालावधीनंतर बाजारपेठेत विक्रीसाठी आणल्यास त्या शेतमालास जादा बाजार भाव मिळू शकतो. तेव्हा शेतकऱ्यांना त्याच्या शेतमालासाठी योग्य भाव मिळावा या दृष्टीकोनातून कृषि पणन मंडळ सन 1990-91 पासून शेतमाल तारण कर्ज योजना राबवित आहे. या योजनेमध्ये तूर, मूग, उडीद, सोयाबीन, सुर्यफूल, चना, भात (धान), करडई, ज्वारी, बाजरी, मका, गहू, वाघ्या घेवडा (राजमा), काजू बी, बेदाणा, सुपारी व हळद या शेतमालाचा समावेश करण्यात आलेला असुन या योजने अंतर्गत शेतकऱ्यांना बाजार समितीच्या गोदामात तारणात ठेवलेल्या शेतमालाच्या एकुण किंमतीच्या 75 टक्के पर्यंत रक्कम 6 महिने (180 दिवस) कालावधीसाठी 6 टक्के व्याज दराने तारण कर्ज देण्यात येते. या योजनेअंतर्गत राज्य अथवा केंद्रिय वखार महामंडळाच्या गोदाम पावतीवरही शेतकऱ्यांना तारण कर्ज उपलब्ध करून देण्यात येते. सदर योजना बाजार समिती  राबविली जात असुन सहा महिन्यांचे आत तारण कर्जाची परतफेड करणाऱ्या बाजार समित्यांना 3 टक्के व्याज सवलत देण्यात येते.   
        

      </p>
    </div>
     <div class="col-sm" id="Enam_Image_wrapper" >
      <img src="images/money.jpg" class="img-fluid mx-auto" alt="Responsive image">
    </div>
  </div>

</div>


<div style="text-align: center;margin-top: 20px;">
   <a  href="aboutus.php">अधिक माहिती साठी येथे क्लिक करा.</a>

</div>
<br>





   


   






<!-- 
<h3 style="margin-top: 1000px;">Trial for Scroll</h3> -->


    <div id="footer_wrapper">
       
   


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




  
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jq/jquery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
   </script>
   <script type="text/javascript">
           $('.actived').css("border-bottom","3px solid orange")
           
           
   </script>
    

  </body>
</html>
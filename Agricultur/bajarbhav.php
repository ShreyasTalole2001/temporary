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


   // The following code is to find bajar bhav on user defined date

  $datee=mysqli_real_escape_string($conn,$_POST['datee']);


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$query="SELECT * FROM yadi WHERE datee='$datee'";
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
          background-color: white;
      }
       /* Main Menu Bar */
      
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: #01F7E8;
      }
      .nav-link {
       color: black !important;
      }
     /* BAJAR BHAV SECTION*/
      #bajar_bhav{
          margin-top: 20px;
          margin-bottom: 20px;
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: white;

        }
        #bajar_bhav_heading{
          text-align: center;
          margin-top: 20px;
      
          color:  green;

        }

         /*Footer*/
        #footer_wrapper{
          background-color: black;
          padding-bottom: 50px;
          
        }
    </style>

    <title>बाजार भाव </title>
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
              <a class="nav-link" href="#"><b>माहिती</b></a>
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

    <! bajar bhav section !>


<h1 id="bajar_bhav_heading">बाजार भाव</h1>
<div class="container table-responsive" id="bajar_bhav">
  <div class="col">
      <br>

<form method="post" class="form-inline">

  <div class="form-group">
    <!-- <label for="datee">दिनांक</label> -->
    <input style="width: 300px;" type="date" class="form-control" name="datee" id="datee" placeholder="दिनांक" value="<?php echo "$date"; ?>">
    <button type="submit" class="btn btn-success">शोधा</button>
  </div>
        
</form>


    <br>

    <div style="color: #FFAB2F;font-size: 120%;">
      <th scope="col"> दिनांक :- <?php echo "$date"; ?></th>
    </div>
      
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">अ.क्र.</th>
      <th scope="col">शेतमाल</th>
      <th scope="col">जास्तीत जास्त </th>
      <th scope="col">कमीत कमी</th>
      <th scope="col">सरासरी</th>
      <th scope="col">आवक</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>गहू</td>
      <td><?php echo "$gahumax"; ?></td>
      <td><?php echo "$gahumin"; ?></td>
      <td><?php echo "$gahuavg"; ?></td>
      <td><?php echo "$gahuaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ज्वारी</td>
      <td><?php echo "$jwarimax"; ?> </td>
      <td><?php echo "$jwarimin"; ?></td>
      <td><?php echo "$jwariavg"; ?></td>
      <td><?php echo "$jwariaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>मका</td>
      <td><?php echo "$makamax"; ?></td>
      <td><?php echo "$makamin"; ?></td>
      <td><?php echo "$makaavg"; ?></td>
      <td><?php echo "$makaaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>बाजरी</td>
      <td><?php echo "$bajarimax"; ?></td>
      <td><?php echo "$bajarimin"; ?></td>
      <td><?php echo "$bajariavg"; ?></td>
      <td><?php echo "$bajariaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>चना</td>
      <td><?php echo "$chanamax"; ?></td>
      <td><?php echo "$chanamin"; ?></td>
      <td><?php echo "$chanaavg"; ?></td>
      <td><?php echo "$chanaaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>तुवर</td>
      <td><?php echo "$tuvarmax"; ?></td>
      <td><?php echo "$tuvarmin"; ?></td>
      <td><?php echo "$tuvaravg"; ?></td>
      <td><?php echo "$tuvaraavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>मुंग</td>
      <td><?php echo "$mungmax"; ?></td>
      <td><?php echo "$mungmin"; ?></td>
      <td><?php echo "$mungavg"; ?></td>
      <td><?php echo "$mungaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>उडीत</td>
      <td><?php echo "$uditmax"; ?></td>
      <td><?php echo "$uditmin"; ?></td>
      <td><?php echo "$uditavg"; ?></td>
      <td><?php echo "$uditaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>मठ</td>
      <td><?php echo "$mathmax"; ?></td>
      <td><?php echo "$mathmin"; ?></td>
      <td><?php echo "$mathavg"; ?></td>
      <td><?php echo "$mathaavak"; ?></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>चवळी</td>
      <td><?php echo "$chavalimax"; ?></td>
      <td><?php echo "$chavalimin"; ?></td>
      <td><?php echo "$chavaliavg"; ?></td>
      <td><?php echo "$chavaliaavak"; ?></td>
    </tr>
     <th scope="row">11</th>
      <td>फल्ली ओली</td>
      <td><?php echo "$falliolimax"; ?></td>
      <td><?php echo "$falliolimin"; ?></td>
      <td><?php echo "$fallioliavg"; ?></td>
      <td><?php echo "$fallioliaavak"; ?></td>
    </tr>
    <th scope="row">12</th>
      <td>फल्ली सुकी</td>
      <td><?php echo "$fallisukimax"; ?></td>
      <td><?php echo "$fallisukimin"; ?></td>
      <td><?php echo "$fallisukiavg"; ?></td>
      <td><?php echo "$fallisukiaavak"; ?></td>
    </tr>
    <th scope="row">13</th>
      <td>तीळ</td>
      <td><?php echo "$tilmax"; ?></td>
      <td><?php echo "$tilmin"; ?></td>
      <td><?php echo "$tilavg"; ?></td>
      <td><?php echo "$tilaavak"; ?></td>
    </tr>
    <th scope="row">14</th>
      <td>सोयाबीन</td>
      <td><?php echo "$soyabinmax"; ?></td>
      <td><?php echo "$soyabinmin"; ?></td>
      <td><?php echo "$soyabinavg"; ?></td>
      <td><?php echo "$soyabinaavak"; ?></td>
    </tr>
    <th scope="row">15</th>
      <td>मोहरी</td>
      <td><?php echo "$moharimax"; ?></td>
      <td><?php echo "$moharimin"; ?></td>
      <td><?php echo "$mohariavg"; ?></td>
      <td><?php echo "$mohariaavak"; ?></td>
    </tr>
    <th scope="row">16</th>
      <td>एरंडी</td>
      <td><?php echo "$erandimax"; ?></td>
      <td><?php echo "$erandimin"; ?></td>
      <td><?php echo "$erandiavg"; ?></td>
      <td><?php echo "$erandiaavak"; ?></td>
    </tr>
    <th scope="row">17</th>
      <td>मिरची सुकी</td>
      <td><?php echo "$mirachisukimax"; ?></td>
      <td><?php echo "$mirachisukimin"; ?></td>
      <td><?php echo "$mirachisukiavg"; ?></td>
      <td><?php echo "$mirachisukiaavak"; ?></td>
    </tr>
    <th scope="row">18</th>
      <td>मिरची ओली</td>
      <td><?php echo "$mirachiolimax"; ?></td>
      <td><?php echo "$mirachiolimin"; ?></td>
      <td><?php echo "$mirachioliavg"; ?></td>
      <td><?php echo "$mirachioliaavak"; ?></td>
    </tr>
    <th scope="row">19</th>
      <td>कांदा</td>
      <td><?php echo "$kandamax"; ?></td>
      <td><?php echo "$kandamin"; ?></td>
      <td><?php echo "$kandaavg"; ?></td>
      <td><?php echo "$kandaaavak"; ?></td>
    </tr>
    <th scope="row">20</th>
      <td>कापूस</td>
      <td><?php echo "$kapusmax"; ?></td>
      <td><?php echo "$kapusmin"; ?></td>
      <td><?php echo "$kapusavg"; ?></td>
      <td><?php echo "$kapusaavak"; ?></td>
    </tr>
    
  </tbody>
</table>
</div>




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
  </body>
</html>
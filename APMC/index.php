<?php

$servername="localhost";
$username="root";
$password="";
$db="apmc";

$conn=mysqli_connect($servername,$username,$password,$db);

echo mysqli_connect_error();

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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      #img1 {display:block;}
      #img2 {display:none}

        @media all and (max-width: 800px) {
            #img1 {display: none;}
            #img2 {display: block;}
            

        }
        #home{
          color: white;
          font-size: 150%;
          
          margin: 0px;
          padding: 5px;
          
        }
        
        #box{
          width: 100%;
          height: 62px;
          background-color: green;
        }
        .extre{
          background-color: black;
          border-radius: 3px;

        }
        #test{
          margin-top: 1000px;
        }

        .navbar .navbar-nav{
          margin: 0px auto;
          

        }
     
        .navbar-brand{
          font-size: 200%;
        }
        .navbar .nav-item a{
          color: white !important;
        
          border-radius: 3px;
          margin-right: 15px;
          text-align: center;

        }
        #our_services{
          text-align: center;
          color: #FD759D;
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
        #bajar_bhav_heading{
          text-align: center;
          margin-top: 80px;
      
          color:  #FD759D;

        }
        
        #firstbigbox{
          background-color: green;
        }
        html {
            scroll-behavior: smooth;
        }
        #headlinecontainer{
          color: #FD759D;
          text-align: center;
          margin: 70px;
        }
        #footer{
          background-color: black;

         
        }
       
        #nondanicontainer{
          margin-top: 50px; 
          text-align: center;
          margin-bottom: 50px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          background-color: green;
          padding: 10px;
        }
       #implinks{
              margin-left:50px ;
              padding-bottom:50px ;

            }



   

      


  
    </style>

    <title>APMC MALKAPUR</title>
  </head>
  <body>
  <! navigation bar !>

<div id="box">
<nav class="navbar navbar-expand-lg navbar-light container" style="background-color: ;">

  <a class="navbar-brand" style="color: white;font-family: sans-serif;" href="#">APMC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link navitem " id="actived" href=""><b>मुख्य पान</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navitem no" href="#sercicesection"><b>सुविधा</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navitem no" href="about.html"><b>माहिती</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navitem no" href="#bajar_bhav_heading"><b>बाजार भाव</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navitem no" href="#nondanicontainer"><b>कापूस/धान्य नोंदणी</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navitem no" href="imagesection.html"><b>फोटो विभाग </b></a>
      </li>
     
    
     
    </ul> 
  </div>
          
  </div>
  
</nav>

  <! main image !>
    
    <img id="img1" src="images/50.jpg" class="img-fluid" alt="">
    <img id="img2" src="images/40.jpg" class="img-fluid" alt="">

    <! service section !>

<div id="sercicesection">
  
</div>

   <div id="headlinecontainer">
     <h4>"शेतकऱ्यांचे हित जोपासण्यासाठी शेतमालाची अग्रगण्य व भव्य बाजार पेठ"</h4>
   </div> 




    <div id="our_services">
      <h1>Our Services</h1>
    </div>

     <! service boxes !>
<div class="container">
<div class="service_box">
      <div class="row">
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;">
          <img class="card-img-top" src="images/450.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>सुविधा क्र.१</b></h5>
            <p class="card-text"></p>
          </div>
        </div>
    </div>
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;">
          <img class="card-img-top" src="images/450.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>सुविधा क्र.२</b></h5>
            <p class="card-text"></p>
          </div>
        </div>
    </div>
    <div class="col-sm ">
        <div class="card ser box" style="width: 21rem;margin: 0px auto;margin-top: 20px;">
          <img class="card-img-top" src="images/450.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text"><b>सुविधा क्र.३</b></h5>
            <p class="card-text"></p>
          </div>
        </div>
    </div> 
  </div>
</div>
</div>

      




<! bajar bhav section !>


<h1 id="bajar_bhav_heading">बाजार भाव</h1>
<div class="container table-responsive" id="bajar_bhav">
  <div class="col">
      <th scope="col"><?php echo "$date"; ?></th>
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

<! nondani !>
<div class="container" id="nondanicontainer">
<div class="card border-success" style="max-width: 18rem;margin: 0px auto;">
  <div class="card-header bg-transparent border-success">कापूस नोंदणी</div>
  <div class="card-body text-success">
    <h5 class="card-title">CCI कापूस नोंदणी</h5>
    <p class="card-text">नोंदणी करण्यासाठी खाली दिलेल्या बटनावर क्लिक करा.</p>
  </div>
  <div class="card-footer bg-transparent border-success"><button>click me</button></div>
  <input type="submit" name="Click me 2">
</div>
</div>



    



<div style="background-color: black;text-align: center;padding-top: 15px;">
    <form action="loginform.php">
                <input type="submit" value="Admin Login" />
    </form>
  </div>

<div class="container_fluid" id="footer">
  
<p style="color: white;text-align: center;">© 2020 APMC malkapur. All Rights Reserved</p>
<div style="display: flex;">
  <div id="implinks">
    <h6 style="color: white;">Important Links</h6>
        <a href="https://www.enam.gov.in/web/">www.enam.gov.in</a>   <br>
        <a href="https://www.msamb.com/">www.msamb.com</a> <br>
        <a href="https://rti.gov.in/rti-act.pdf">www.rti.gov.in</a>
  </div>
  <div id="implinks">
    <h6 style="color: white;">Quick Navigation</h6>
         <a href="index.php">मुख्य पान</a>  <br>
         <a href="about.html">माहिती </a>    <br>
         <a href="imagesection.html">फोटो विभाग</a>
    
  </div> 
 </div>  
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jq/jquery.js"></script>
    <script type="text/javascript">
      $(".no").hover(function(){
        $(this).addClass('extre')
      },function(){
        $(this).removeClass('extre')
      })

      $(".no").hover(function(){
        $(this).css("color","blue")
      })

      $('#actived').addClass('extre')

     // window.history.forward(); 
     //   function noBack() { 
     //       window.history.forward(); 
     //   } 

       
        

       



     
    </script>


















  </body>
</html>
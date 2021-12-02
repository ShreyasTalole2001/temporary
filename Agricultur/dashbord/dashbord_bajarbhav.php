

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard/Bajar Bhav</title>
    <style type="text/css">

       /* Main Menu Bar */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: white;
      }
      .nav-link {
       color: black !important;

      }
     /* BODY of page*/
    	body{
    		background-color: #D6E1FF;
    	}

    	
    	#test{
    		margin-top: 1100px;
    	}
    	#heading{
    		text-align: center;
        
    	}
    	 #formcontainer{
    		
    		background-color: #F7F7F7;
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-top: 20px;
    	}
    
    	@media all and (min-width:800px) {
           #formcontainer{
    		width: 50%;
    		background-color: #F7F7F7;

    	}

    	
    


    </style>
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
              <a class="nav-link" href="#"><b>DASHBOARD/BAJAR BHAV</b> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      </div>
    </div>


























  
<div class="container" id="formcontainer">
  <h1 id="heading">UPDATE बाजार भाव  HERE</h1>
<form method="post" action="formactions.php">
	<br>
<div class="form-row" >
    <div class="col" >
      <input style="width: 30%;margin: 0px auto; text-align: center;" type="date" class="form-control" name="date">
    </div>
</div> 
<hr>
  <! 1 !>
  <div class="form-row" style="position: relative;z-index: 10;">
    <div class="col">
      <input type="text" style="text-align: center;" class="form-control-plaintext" placeholder="जास्तीत जास्त " disabled=""> 
    </div>
    <div class="col">
      <input type="text" style="text-align: center;" class="form-control-plaintext" placeholder="कमीत कमी" disabled="">
    </div>
    <div class="col">
      <input type="text" style="text-align: center;" class="form-control-plaintext" placeholder="सरासरी" disabled="" >
    </div>
    <div class="col">
      <input type="text" style="text-align: center;" class="form-control-plaintext" placeholder="आवक"  disabled="">
    </div>
  </div>
<hr>   
	<! 1 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="गहु" name="gahumax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="गहु" name="gahumin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="गहु" name="gahuavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="गहु" name="gahuaavak">
    </div>
  </div>
  <hr>

  <! 2 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="ज्वारी" name="jwarimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="ज्वारी" name="jwarimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="ज्वारी" name="jwariavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="ज्वारी" name="jwariaavak">
    </div>
  </div>
  <hr>

  <! 3 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="मका" name="makamax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मका" name="makamin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मका" name="makaavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मका" name="makaaavak">
    </div>
  </div>
  <hr>

  <! 4 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="बाजरी" name="bajarimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="बाजरी" name="bajarimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="बाजरी" name="bajariavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="बाजरी" name="bajariaavak">
    </div>
  </div>
  <hr>

  <! 5 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="चना" name="chanamax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="चना" name="chanamin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="चना" name="chanaavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="चना" name="chanaaavak">
    </div>
  </div>
  <hr>

  <! 6 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="तुवर" name="tuvarmax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="तुवर" name="tuvarmin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="तुवर" name="tuvaravg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="तुवर" name="tuvaraavak">
    </div>
  </div>
  <hr>

  <! 7 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="मुंग" name="mungmax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मुंग" name="mungmin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मुंग" name="mungavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मुंग" name="mungaavak">
    </div>
  </div>
  <hr>

  <! 8 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="उडीत" name="uditmax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="उडीत" name="uditmin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="उडीत" name="uditavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="उडीत" name="uditaavak">
    </div>
  </div>
  <hr>

  <! 9 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="मठ" name="mathmax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मठ" name="mathmin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मठ" name="mathavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मठ" name="mathaavak">
    </div>
  </div>
  <hr>

  <! 10 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="चवळी" name="chavalimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="चवळी" name="chavalimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="चवळी" name="chavaliavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="चवळी" name="chavaliaavak">
    </div>
  </div>
  <hr>

  <! 11 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली ओली" name="falliolimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली ओली" name="falliolimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली ओली" name="fallioliavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली ओली" name="fallioliaavak">
    </div>
  </div>
  <hr>

  <! 12 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली सुकी" name="fallisukimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली सुकी" name="fallisukimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली सुकी" name="fallisukiavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="फल्ली सुकी" name="fallisukiaavak">
    </div>
  </div>
  <hr>

  <! 13 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="तीळ" name="tilmax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="तीळ" name="tilmin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="तीळ" name="tilavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="तीळ" name="tilaavak">
    </div>
  </div>
  <hr>

  <! 14 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="सोयाबीन" name="soyabinmax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="सोयाबीन" name="soyabinmin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="सोयाबीन" name="soyabinavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="सोयाबीन" name="soyabinaavak">
    </div>
  </div>
  <hr>

  <! 15 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="मोहरी" name="moharimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मोहरी" name="moharimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मोहरी" name="mohariavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मोहरी" name="mohariaavak">
    </div>
  </div>
  <hr>

  <! 16 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="एरंड" name="erandimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="एरंड" name="erandimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="एरंड" name="erandiavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="एरंड" name="erandiaavak">
    </div>
  </div>
  <hr>

  <! 17 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची सुकी" name="mirachisukimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची सुकी" name="mirachisukimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची सुकी" name="mirachisukiavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची सुकी" name="mirachisukiaavak">
    </div>
  </div>
  <hr>

  <! 18 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची ओली" name="mirachiolimax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची ओली" name="mirachiolimin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची ओली" name="mirachioliavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="मिरची ओली" name="mirachioliaavak">
    </div>
  </div>
  <hr>

  <! 19 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="कांदा" name="kandamax">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="कांदा" name="kandamin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="कांदा" name="kandaavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="कांदा" name="kandaaavak">
    </div>
  </div>
  <hr>

  <! 20 !>
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="कापूस" name="kapusmax"> 
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="कापूस" name="kapusmin">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="कापूस" name="kapusavg">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="कापूस" name="kapusaavak">
    </div>
  </div>
  <hr>
<div style="text-align: center;">
  <div class="form-row">
    <div class="col" >
      <input style="width: 50%; text-align: center;background-color: green;color: white;" type="submit" class="btn btn-success" value="Submit" >
    </div>
    </div>
</div> 

<br>

</form>
	


</div>

<br>







<!-- <h1 id="test">shreyas</h1> -->
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
    </script>




  </body>





</html>






<?php
session_start();
include 'database.php';
// print($_SESSION['Email']);
 $Email = $_SESSION['Email'];

$query = "SELECT * FROM userinfo WHERE Email='$Email' ";
            if($result=mysqli_query($conn,$query)){
            while ($row=mysqli_fetch_array($result)){

                $UserName = $row['FirstName'];


            }
          }




?>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #F3F7F7;
      }
      /* Main Menu */
      .menu_wrapper{
       /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
       background-color: #39424E;
       font-family: Arial, Helvetica, sans-serif;
      }
      .nav-link {
       color: White !important;
      }
/*-----------------------------------------------------------------------------------------------------*/
      /* SEC MENU  */
      .secmenu_wrapper{
        background-color: White;
        padding: 10px;
        
       /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/


      }
/*-----------------------------------------------------------------------------------------------------*/
      /*Account Tab*/
      .disabled{
         pointer-events: none;
         background-color: gray !important;
         font-weight: 700;
         color: white !important;
      }

/*-----------------------------------------------------------------------------------------------------*/
      /* Your Courses */
      .headings h4{
        margin-top: 20px;
        text-align: center;
        color: black; 
         font-family: Arial, Helvetica, sans-serif;
         font-weight: 700;


      }
      #your_courses_wrapper{
        margin-top: 30px;
        

     }
        /*border: 1px solid green;*/
      .card_wrapper{
        border-radius: 10px;
        background-color: white;
        /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
        box-shadow:0 0 10px #9ecaed;



      }
      .card_wrapper button{
        width: 100%;
        box-shadow:0 0 10px #9ecaed;
      }

       #Empty_Course_Section h3{
           color: gray;
       }
      
    
      @media all and (max-width: 800px) {
       .card_wrapper{
        background-color: white;
       
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         width: 100%;
         margin: 5px;
        
            
       }
     }
/*-----------------------------------------------------------------------------------------------------*/     
     #disablethis{
         display: none;

          }
/*-----------------------------------------------------------------------------------------------------*/     



      
    </style>

    <title>Dashbord</title>
  </head>
  <body>

    <! Main Menu !>



    <div class="container_fluid menu_wrapper sticky-top" >
      <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: blue;font-size: 120%;">JIGYASA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><b>Practice</b> <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#"><b>New Courses</b></a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class='far fa-comment-alt' style='font-size:24px;margin-right: 20px;'></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class='far fa-bell' style='font-size:24px;margin-right: 20px'></i></a>
              
            </li>
            <li class="nav-item">
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b> <i class="fa fa-lock" aria-hidden="true"></i>
                  Account </b>
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item disabled">  <?php echo $UserName; ?> </a>
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="logout.php">LogOut</a>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </nav>

      </div>
    </div>


    <! SECONDARY MENU !>
    <div class="container_fluid secmenu_wrapper" >
      <div class="container">
        <div id="subhead">
          <!-- <p> <small>PRACTICE</small> </p> -->
          
<div class="d-flex">
  <div class="mr-auto p-2"><h3>Dashboard</h3> </div>
 <!--  <div class="p-2">Your Courses</div>
  <div class="p-2">New Courses</div> -->
</div>
        
          


        </div>
      </div>
    </div>

    <! Your Courses !>
      
      <div class="headings container">
         <h4>Your Courses</h4>
         
      </div>
     
      


     <! This code is for printing various courses owned by user !>

      <div class="container" id="your_courses_wrapper">
        <div class="row">
           
           <?php    // This code is for printing various courses owned by user

           
            $query = "SELECT * FROM userinfo WHERE Email='$Email' ";
            if($result=mysqli_query($conn,$query)){
            while ($row=mysqli_fetch_array($result)){
              

              for ($i=11; $i <15 ; $i++) { 
                

                if ($row[$i] != "") {
                                               
                                             // BElow query is for fetching perticular course info 

                     $query1 = "SELECT * FROM CourseCreators WHERE CourseName='$row[$i]' ";
                     $result1=mysqli_query($conn,$query1);
                     $row1=mysqli_fetch_array($result1);
                     // echo $row1['CreatorName'];



                  
                                                  // Below is the html format how courses card will look
                    print("
                        
                     

             

             <div class='col-md-3 col d-flex justify-content-center'>
             <div class='card_wrapper' class='card' style='width: 15rem;' data-aos='fade-up'>
               
                <img src='images/VedicMath.png' alt='...'' class='img-fluid'>
                <div class='card-body'>
                  <h5 class='card-title'>{$row[$i]}</h5>
                  <p>Creator : {$row1['CreatorName']} </p>
                  
                  <form method='get' action='video3.php'>   
                    <input id='disablethis' type='text' name='LectureNo' value='455703494'>  </input>
                    <button type='submit' class='btn btn-primary btn-block' value='{$row[$i]}' name='CourseName'>Start Now</button>
                  </form>
                </div>

              </div>
              </div>

                           
                       ");

                }else if($row[11] == ""){
                  // echo "Sorry it seems you don't have any course";
                  print("

                    <div id='Empty_Course_Section'>

                       <h3>Sorry it seems you don't have any course</h3>
                      <button type='button' class='btn btn-outline-secondary'>View New Courses</button>
                       


                    </div>


                    ");
                  break;
              
                }
                  
                
              }
              
             }  
                
          }

          
      ?>


     
        </div>
      </div>

      <hr>



  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
     AOS.init();
    </script>

  </body>
</html>






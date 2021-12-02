<?php
session_start();
include 'database.php';

// print($_SESSION['Email']);


$URL = $_SERVER['REQUEST_URI'];            //URl is taken
// echo $URL;

$url_components = parse_url($URL);
parse_str($url_components['query'], $params); 



// print($params['CourseName']);
$CourseName=$params['CourseName'];
$LectureNo=$params['LectureNo'];

      


      // for username 
$Email = $_SESSION['Email'];
$query = "SELECT * FROM userinfo WHERE Email='$Email' ";   
            if($result=mysqli_query($conn,$query)){
            while ($row=mysqli_fetch_array($result)){

                $UserName = $row['FirstName'];


            }
          }

if ($_GET['LectureNo']) {
$query = "UPDATE cookies
          SET $CourseName = '$LectureNo'
          WHERE Email='$Email' ";
mysqli_query($conn,$query);
}

?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #F3F7F7;
        background-color: white;
        
        
      }
      /* Main Menu */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: #39424E;

      }
      .nav-link {
       color: White !important;
      }

      /*Video Section */
     #video_section_wrapper{
      
      }

     #clm1{
      
     }
     #video_wrapper{
       
       margin: 20px;
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     }

     #clm2{
      border-left: 1px dotted black;
      background-color: #F3F7F7;
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     
     }
     #clm2 h3{
      color: black;
      text-align: center;
     }
     .course_content_wrapper{
      background-color: #F3F7F7;
      padding-top: 10px;
      
      width: 100%;
     }

   
     
      /* mobile devices  */
       @media only screen and (max-width: 600px) {
         
         #clm2{
           /*border: 1px solid red;*/
          box-shadow: none;
           background-color: #F3F7F7;
           border-left: none;
           
         }
         #video_wrapper{
          margin: 0px;
          box-shadow: none;
         }
           
            
      }

      /* Disable input for link (url) to get course name in url */
       
       #disablethis{
         display: none;

          }
          /*Account Tab*/
      .disabled{
         pointer-events: none;
         background-color: gray !important;
         font-weight: 700;
         color: white !important;
      }

     /* DROP DOWN*/

     #MAINHEAD{
      border: 1px solid black;
      padding: 10px;
      font-size: 120%;
      font-weight: 700;
      background-color: #F2F3F5;


     }
     #SUBMENU{
      background-color: white;
      
      border: 1px solid black;
     }
     #SUBMENU button{
      border-radius: 0px !important;
     }
     #bottonmotion{
  width: 100px;
  height: 10px;
  background: #009CF9;
  transition: width 2s, height 4s;
     }
     #bottonmotion:hover {
  width: 250px;
  height: 10px;
     }
    
    </style>

    <title>Video courses</title>
     
  </head>
  <body>


    <! Main Menu !>



    <div class="container_fluid" >
      <div class="menu_wrapper">
      <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: #009CF9;font-size: 120%;">JIGYASA</span></a>
        <a class="nav-link" href="#">  <?php echo $params['CourseName'];  ?> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

  

          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#"> <?php echo $params['CourseName'];  ?> </a>
            </li> -->
            <li class="nav-item">
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ACCOUNT
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
    
    

    <!  Video Section  !>

        <div  id="video_section_wrapper">

          <div class="row">
            <div  class="col-md-9" id="clm1">
              <div id="video_wrapper">

                


                  <?php
                    
                    // Code To Get Lecture No Or Code From URl

                  $LectureCode=$params['LectureNo'];


                  ?>


                 <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/<?php echo($LectureCode); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

              </div>
            </div>
            <div class="col-md-3" id="clm2">
               <h4 onclick="Arrow()" style="text-align: center;margin-top: 10px;">Course content</h4>
               <hr>
              <div class="course_content_wrapper">
               
                  <!-- this code is for fetching cource content  -->

<?php 
        
  $NameOfCourse = $params['CourseName'];
    // print("
          
    //    <input id='disablethis' form='myform' type='text' name='CourseName' value='{$CourseName}'>  </input>
          
    // ");

 ?>



<?php
include 'database.php';
include  'roboticsoneDB.php';
// include  'VedicMathsDb.php';
$result = mysqli_query($$NameOfCourse,"show tables"); // run the query and assign the result to $result
while($table = mysqli_fetch_array($result)) { // go through each row that was returned in $result
    // echo($table[0] . "<BR>");    // print the table that was returned on that row.

    print("

      <div id='MAINHEAD' data-toggle='collapse' data-target='#{$table[0]}' class='collapse_card' >
        <p>{$table[0]}  <i id='arrow' class='fa fa-arrow-down' style='font-size:24px;color:#009CF9;margin-left:150px;'></i>  </p>
        <div id='bottonmotion'></div>
      </div>

      <div id='{$table[0]}' class='collapse collapse_card'> ");
       
        $query2 = "SELECT * FROM $table[0]";
        if($result2=mysqli_query($$NameOfCourse,$query2)){
            while ($row2=mysqli_fetch_assoc($result2)){

              foreach ($row2 as $key => $value) {

        print("

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='{$CourseName}'>  </input>
           <button  type='submit' class='btn btn-outline-dark btn-lg btn-block' id='lecture' name='LectureNo' value='{$value}'>{$key}</button>
        </form>

          ");
              
         }
        }
      }     
                
      print("</div>");
      


}


?>

         
              </div>

            </div>
          </div>

        </div>


        
       
    </div>              
                      
            
        

   
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="jq/jquery.js"></script>
    <script type="text/javascript">
     






      


      
     


    </script>

  </body>
</html>
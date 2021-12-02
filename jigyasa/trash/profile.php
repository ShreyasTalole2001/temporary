<?php
session_start();
include 'database.php';


$sessionvariable = $_SESSION['Email'];
// print($sessionvariable);

$Age=mysqli_real_escape_string($conn,$_POST['Age']);
$FullName=mysqli_real_escape_string($conn,$_POST['FullName']);
$Class=mysqli_real_escape_string($conn,$_POST['Class']);
$SchoolName=mysqli_real_escape_string($conn,$_POST['SchoolName']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $query="UPDATE userinfo 
          SET  
             Age='$Age' ,
             FullName='$FullName' ,
             Class='$Class' ,
             SchoolName='$SchoolName'
             

          WHERE Email= '$sessionvariable' LIMIT 1";
          mysqli_query($conn,$query);


}

    $query="SELECT * FROM userinfo WHERE Email='$sessionvariable' ";
   if ($result=mysqli_query($conn,$query)) {
       $row=mysqli_fetch_array($result);

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
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: #39424E;
      }
      .nav-link {
       color: White !important;
      }

      /* SEC MENU  */
      .secmenu_wrapper{
        background-color: White;
        height: 80px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

      }

      /* PROFILE */

      #wrapper{
        margin-top: 30px;
        margin-bottom: 20px;
      }
     

       /* Information clm */
        
       #informationwrapper{
        background-color: white;
        padding: 10px;
       
       }
       #informationwrapper h4{
        color: green;
       }
       #informationwrapper input{
        border: none;
        border-bottom: 2px solid green;
        padding: 0px;
        background-color: none;
        outline: none;
        border-radius: 0px;

        }

        #informationwrapper label{
          padding: 0px;
          margin: 0px;
          font-weight: 700;
        }
         #informationwrapper p{
           font-weight: 700;
         }
         #profile_name{
          text-align: center;
          margin-top: 20px;

         }

        /* Achivment section*/

        #achivment_wrapper{
          height: 500px;
          width:100%;
          background-color:white;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }




       

       /* mobile devices  */
       @media only screen and (max-width: 600px) {
          body {
            background-color: white;
           }
           .row{
            margin-top: 0px;
            }
            
      }
    


     


     
      
    </style>

    <title>Profile</title>
  </head>
  <body>

    <! Main Menu !>



    <div class="container_fluid menu_wrapper" >
      <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: blue;font-size: 120%;">JIGYASA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashbord.php"><b>PRACTICE</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><b>CERTIFICATION</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Contact</b></a>
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
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ACCOUNT
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
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
          <p> <small>Account</small> </p>
          <h3>Profile</h3>
        </div>
      </div>
    </div>

    <! USER PROFILE !>

    <! page body in two slices Vertically !>

   <div class="container" id="wrapper">
  <div class="row">
    <div class="col-md-4" id="clm1">       
      
      <div id="informationwrapper">     <! Information About User !>
        <h4>Basic Information</h4>
          <form method="post" id="myform">

            <div class="form-group" >
              <label>Full Name</label>
              <input type="text" class="form-control" id="FullName" name="FullName" placeholder="" value="<?php echo($row['FullName']) ?>">
            </div>
            <div class="form-group">
              <label>Age</label>
              <input type="number" class="form-control" id="Age" name="Age" placeholder="" value="<?php echo($row['Age']) ?>">
            </div>
            <div class="form-group">
              <label>Class</label>
              <input type="number" class="form-control" id="Class" name="Class" placeholder=""  value="<?php echo($row['Class']) ?>">
            </div>
            <div class="form-group">
              <label>School Name</label>
              <input type="text" class="form-control" id="SchoolName" name="SchoolName" placeholder="" value="<?php echo($row['SchoolName']) ?>">
            </div>
            

            <button style="display: flex;margin: 0px auto;background-color: green;" type="submit" class="btn btn-primary">Submit</button>
           </form>
      </div>         
 
    </div>

    <div class="col-md-8" id="clm2">

      <div id="achivment_wrapper">
        

      </div>




    </div>
  </div>
</div>

   
    


      




    
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
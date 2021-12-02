<?php
session_start();
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$_SESSION["AdharNoToFind"]=mysqli_real_escape_string($conn,$_POST['AdharNoToFind']);
// echo $_SESSION["AdharNo"];
header("Location: dashbord_edit.php");
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
        background-color: #D5E6FF;
      }
      
      /* Main Menu Bar */
      .menu_wrapper{
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background-color: white;
      }
      .nav-link {
       color: black !important;

      }

      /*<! BASHBORD MAIN BODY !>*/
      #wrapper{
        margin-top: 30px;
        background-color: white;
        padding: 20px;
        text-align: center;
        width: 300px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);



      }

    </style>

    <title>ENTER ADHAR TO FIND</title>
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
              <a class="nav-link" href="#"><b>DASHBOARD</b> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      </div>
    </div>
    <!-- -------------------------------------------------------------------- -->

    <div class="container" id="wrapper">
      <h4>HEADING</h4>

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">आधार क्रमांक</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="AdharNoToFind">
  </div>
  <button type="submit" class="btn btn-primary">--शेधा--</button>
</form>
<hr>
<h6>DOWNLOAD REGISTRATION DATA</h6>
  <form action="downloadbackupexel.php" method="post">
    <input type="submit" name="export_exel" value="EXPORT">
  </form>


    </div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
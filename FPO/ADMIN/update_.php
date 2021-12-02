<?php
session_start();
if ($_SESSION['loggedIn']) {
  // Allow USER
} else {
  // Redirect to login page
  header('Location: ./login.php');
}


include '../database/allaboutfpo.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $catagory = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['Catagory']);
  $name = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['name']);
  $lastDateOfRegistration = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['lastDateOfRegistration']);
  $mode = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['mode']);
  $registrationLink = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['registrationLink']);
  $customID = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['customID']);
  $fees = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['fees']);
  $courseID = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['courseID']);



  $query = "INSERT INTO events (catagory,name,lastDateOfRegistration, mode, registrationLink, customID, fees, courseID) VALUES ('$catagory','$name', '$lastDateOfRegistration', '$mode', '$registrationLink', '$customID', '$fees', '$courseID')";
  mysqli_query($allaboutfpo_Conn, $query);
}

if (!isset($DeletecustomID) && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $DeletecustomID = mysqli_real_escape_string($allaboutfpo_Conn, $_POST['DeletecustomID']);
  echo $DeletecustomID;
  $query = "DELETE FROM events WHERE customID='$DeletecustomID'";
  mysqli_query($allaboutfpo_Conn, $query);
}







?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Admin | All About FPO | Update Certified Courses</title>
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    #clm1 {
      background-color: antiquewhite;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      padding: 20px;
      margin: 10px;
      width: 40%;
    }

    #clm2 {
      background-color: antiquewhite;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      padding: 20px;
      margin: 10px;
      width: 40%;

    }

    label {
      font-weight: 700;
      font-family: 'Open Sans', sans-serif;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>

      </div>
    </div>
  </nav> -->
<a href="./logout.php">Log Out</a>
  <br>

  <!-- --------------------------------------------------- -->
  <!-- Update Certified Courses -->

  <div class="container">

    <div class="row d-flex justify-content-center">
      <div class="col-sm-6" id="clm1">
        <h1 style="text-align: center;padding:30px;color:#7299D0;font-weight:700;">Create Events</h1>
        <hr>
        <form method="post">

          <div class="mb-3">
            <label for="Catagory" class="form-label">Select Catagory</label>
            <select class="form-select" id="Catagory" name="Catagory">
              <option value="">Open this select menu</option>
              <option value="course">Course</option>
              <option value="webinar">Webinar</option>
              <option value="workshop">Workshop</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Name Of Course / Workshop / Webinar </label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="lastDateOfRegistration" class="form-label">Last Date Of Registration</label>
            <input type="text" class="form-control" id="lastDateOfRegistration" name="lastDateOfRegistration">
          </div>
          <div class="mb-3">
            <label for="mode" class="form-label">Mode Of Event</label>
            <input type="text" class="form-control" id="mode" name="mode">
          </div>
          <div class="mb-3">
            <label for="customID" class="form-label">ID Of Event</label>
            <input type="text" class="form-control" id="customID" name="customID">
          </div>
          <div class="mb-3">
            <label for="fees" class="form-label">Fees</label>
            <input type="text" class="form-control" id="fees" name="fees">
          </div>
          <div class="mb-3">
            <label for="registrationLink" class="form-label">Registration Link</label>
            <input type="text" class="form-control" id="registrationLink" name="registrationLink">
          </div>

          <div class="mb-3">
            <label for="courseID" class="form-label">Select Course Id</label><br>
            <small>Course Id is only for courses</small>
            <select class="form-select" id="courseID" name="courseID">
              <option value="">Open this select menu</option>
              <option value="MANAGE">MANAGE</option>
              <option value="ABC">ABC</option>
              <option value="DEF">DEF</option>
            </select>
          </div>


          <button type="submit" class="btn btn-primary">CREATE</button>
        </form>
      </div>

      <div class="col-sm-6" id="clm2">
        <h1 style="text-align: center;padding:30px;color:#7299D0;font-weight:700;">Delete Events</h1>
        <hr>

        <form method="post">
          <div class="mb-3">
            <label for="DeletecustomID" class="form-label">Event ID</label>
            <input type="text" class="form-control" id="DeletecustomID" name="DeletecustomID">
          </div>
          <button type="submit" class="btn btn-primary">DELETE</button>

        </form>



      </div>

    </div>

  </div>




  <br>
  <br>

  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
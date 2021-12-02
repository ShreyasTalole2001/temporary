<?php
session_start();

include '../database/allaboutfpo.php';
$Email = mysqli_real_escape_string($allaboutfpo_Conn,$_POST['Email']);
$Password = mysqli_real_escape_string($allaboutfpo_Conn,$_POST['Password']);
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $query = "SELECT * FROM login WHERE email='$Email' AND password='$Password' ";
 
 if ($result = mysqli_query($allaboutfpo_Conn,$query)) {
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==1) {
        $row = mysqli_fetch_array($result);
        
            print_r($row) ;
            $_SESSION['Email']=$_POST['Email'];
            $_SESSION['loggedIn']= true;
            header('Location: ./update_.php');
        }
        
       
    }
    else{
       $error="Invalid username and password";       
    }
 }






?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Font families -->
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            /* background-image: url("./loginImages/v661-tk-24-watercolorpattern.jpg"); */
            background-color: #C288CD;
            font-family: 'Open Sans', sans-serif;
        }
        #box {
            max-width: 400px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 20px;
            margin-top: 5%;
            background-color: white;
            border-radius: 10px;
            

        }

        #error{
            text-align: center;
            color: red;
            font-weight: 700;
            font-family: 'Open Sans', sans-serif;

        }

      
        

        


        @media all and (max-width: 800px) {
           body{
               background-color: white;
           }
            #box {
                max-width: 400px;
                box-shadow: none;
                padding: 20px;
                margin-top: 20%;
            }

            /* #subBTN {
                position: absolute;
                bottom: 0;
            } */


        }
    </style>
    <title>Login</title>
</head>

<body>

    <div class="container" id="box">
        <div style="text-align: center;">
            <img src="../images/logo/All About FPO Logo.jpg" class="img-fluid">
            <!-- <h3>Login</h3> -->
            <hr>
        </div>
        <form method="post" > 
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="validationTextarea" aria-describedby="emailHelp" name="Email" placeholder="Email" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            
            <div class="d-grid gap-2">
                     <button type="submit" class="btn" style="background-color: #6FC191;color:white;font-weight:700;">Log In</button>
            </div>
        </form>
        <div id="error">
            <?php  echo $error;  ?>
        </div>
    </div>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>
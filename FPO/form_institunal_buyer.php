<?php

session_start();
include './database/liveWebinarDB.php';
$error = "";
if (!empty($_POST) &&  $_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['lastName']);
    $nameOfOrginization = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['nameOfOrginization']);
    $addressOfHeadOffice = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['addressOfHeadOffice']);
    $areaOfOperation = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['areaOfOperation']);
    $natureOfBusiness = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['natureOfBusiness']);
    $listOfCropsRequired = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['listOfCropsRequired']);
    $requiredQunatityPerMonth = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['requiredQunatityPerMonth']);
    $parametersIfAny = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['parametersIfAny']);
    $phoneNo = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['phoneNo']);
    $email = mysqli_real_escape_string($LiveWebinar_Conn, $_POST['email']);
    $datee = date("Y-m-d");


    echo $firstName;
    echo $email;




    $query = "INSERT INTO form_institunal_buyer (firstName, lastName, nameOfOrginization, addressOfHeadOffice, areaOfOperation, natureOfBusiness, listOfCropsRequired, parametersIfAny, requiredQunatityPerMonth  ,phoneNo, email, datee   ) 
    VALUES ('$firstName', '$lastName','$nameOfOrginization', '$addressOfHeadOffice', '$areaOfOperation', '$natureOfBusiness', '$listOfCropsRequired','$parametersIfAny','$requiredQunatityPerMonth', '$phoneNo', '$email', '$datee'  )";
    mysqli_query($LiveWebinar_Conn, $query);
    $_SESSION['statusOfForm'] = "Thank you for joining we will contact you soon";
}


echo $error;




?>
<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font families -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600|Roboto:100,400" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Pragati+Narrow:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>MTKV | Home</title>
    <style>
        body {
            /* background-color: bisque; */
            font-family: 'Poppins', sans-serif !important;
        }


        /* ----------------------------------- */
        @media all and (max-width: 800px) {
            #top_View {
                display: none;
            }
        }


        /* ----------------------------------- */

        .navbar {
            font-family: Nunito Sans;
            /* font-weight: 700; */


        }

        nav .navbar-nav li a {
            color: black !important;
            margin: 10px 0px;
            margin-right: 20px !important;

        }

        /* --------------------- */
        /* ---------------------------- */

        #mainheading {

            background-color: #19253F;
            padding-top: 100px;
            padding-bottom: 100px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)), url('images/INDEX_IMG1.jpg');


        }

        /* ---------------------------- */

        @media all and (max-width: 800px) {
            #first_view_Clm2 img {
                width: 100%;
            }

            #first_view_Clm1 h1 {
                margin-top: 30px;
            }

        }

        /* ---------------------------- */
        #aboutus {
            background-color: aliceblue;
            background-color: #20272F;
            color: #F8F9FA;
            height: 500px;
        }

        #aboutus h3 {
            text-align: center;
            padding-top: 20px;
        }

        #aboutus p {
            text-align: center;
            font-family: 'Noto Sans', sans-serif;
            color: gray;
        }

        /* -------------------------------------- */
        #footer {
            background-color: #20272F;
            color: #F8F9FA;
            padding: 20px;
        }


        .formclass {
            background-color: antiquewhite;
            padding: 20px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container">



    </div>

    <!-- Nav Bar -->
    <div class="container-fluid sticky-top" style="background-color: #F8F9FA">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LOGO</a>
                <!-- <img class="img-fluid" style="width: 100px;" src="images/fpologo.jpg"> -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="about_krushi_vikas.html"><i class="fa fa-building-o" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Krushi Vikas</a>
                                </li>
                                <li><a class="dropdown-item" href="about_our_team.html"><i class="fa fa-users" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Our Team</a></li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="solutions.html">
                                Solutions
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Capacity Building
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-graduation-cap" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Watch Videos</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-graduation-cap" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Certified Courses</a></li>
                                <li><a class="dropdown-item" href="./workshops.php"><i class="fa fa-graduation-cap" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Classroom Training</a></li>
                                <li><a class="dropdown-item" href="./liveWebinar.php"><i class="fa fa-graduation-cap" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Live Webinars</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Join Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="contact_us.html"><i class="fa fa-phone" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Contact Us</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-phone" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Felloship</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-phone" aria-hidden="true" style="color: green;"></i>&nbsp;&nbsp; Join us as a knowledge <br>
                                        partner</a></li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- ----------------------------------- -->
    <!-- MAIN HEADING OF PAGE -->
    <div class="container-fluid" id="mainheading">
        <h2 style="text-align: center;color:white;font-size:300%" data-aos="fade-up" data-aos-duration="3000">
            Join Our Family As A Institutional Buyer
        </h2>
    </div>
    <br>
    <br>

    <!-- Form For Registration -->

    <div class="container">
        <div class="row d-flex justify-content-center">


            <div class="col-md-5 formclass">

                <form method="post">
                    <h3 style="text-align: center;">Institunal Buyer</h3>
                    <div style="color: red;font-weight:700;font-family:'Times New Roman', Times, serif;text-align:center ">
                        <?php echo $_SESSION['statusOfForm']  ?>
                    </div>
                    <hr>

                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name </label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <div class="mb-3">
                        <label for="nameOfOrginization" class="form-label">Name of organization </label>
                        <input type="text" class="form-control" id="nameOfOrginization" name="nameOfOrginization" required>
                    </div>
                    <div class="mb-3">
                        <label for="addressOfHeadOffice" class="form-label">Address of Head Office</label>
                        <input type="text" class="form-control" id="addressOfHeadOffice" name="addressOfHeadOffice" required>
                    </div>
                    <div class="mb-3">
                        <label for="areaOfOperation" class="form-label">Area of Operation</label>
                        <input type="text" class="form-control" id="areaOfOperation" name="areaOfOperation" required>
                    </div>
                    <div class="mb-3">
                        <label for="natureOfBusiness" class="form-label">Describe your nature of business</label>
                        <input type="text" class="form-control" id="natureOfBusiness" name="natureOfBusiness" required>
                    </div>
                    <div class="mb-3">
                        <label for="listOfCropsRequired" class="form-label">List of crops required</label>
                        <input type="text" class="form-control" id="listOfCropsRequired" name="listOfCropsRequired" required>
                    </div>
                    <div class="mb-3">
                        <label for="requiredQunatityPerMonth" class="form-label">Required Quantity per month </label>
                        <input type="text" class="form-control" id="requiredQunatityPerMonth" name="requiredQunatityPerMonth" required>
                    </div>
                    <div class="mb-3">
                        <label for="parametersIfAny" class="form-label">Parameters if any </label>
                        <input type="text" class="form-control" id="parametersIfAny" name="parametersIfAny" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNo" class="form-label">Phone Number with country code </label>
                        <input type="NUMBER" class="form-control" id="phoneNo" name="phoneNo" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>


                    <div style="text-align: center;">
                        <button style="width: 200px;" type="submit" class="btn btn-success">Submit</button>
                    </div>

                </form>

            </div>





        </div>
    </div>









    <br>
    <br>













    <!-- <div style="margin-top: 1000px;"></div> -->
    <div class="container-fluid" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <h4>INFORMATION</h4>
                    <a><i style="color: green;" class="fa fa-dot-circle-o" aria-hidden="true"></i> Home</a> <br>
                    <!-- <a><i style="color: green;" class="fa fa-dot-circle-o" aria-hidden="true"></i> About Us</a> <br> -->
                    <!-- <a><i style="color: green;" class="fa fa-dot-circle-o" aria-hidden="true"></i> Gallery</a> <br> -->
                </div>

                <div class="col-md-4">
                    <br>
                    <h4>SOCIAL NETWORK</h4>
                    <a style="text-decoration: none;color: #F8F9FA;" href="https://www.facebook.com/All-About-FPO-101756675361911"><i style="color: green;" class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a> <br>
                    <a style="text-decoration: none;color: #F8F9FA;" href="https://www.youtube.com/channel/UCkPNplLoc-NogKjlUjtJYGQ"><i style="color: green;" class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a> <br>
                    <a style="text-decoration: none;color: #F8F9FA;" href=""><i style="color: green;" class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                </div>
                <div class="col-md-4">
                    <br>
                    <h4>CONTACT US</h4>
                    <p><span style="color: green;"><b>Administrative Office Address: </b> </span> Santaji Nagar, Bodwad
                        Road, Malkapur, Block: Malkapur, Dist: Buldhana, India. Pin – 443101</p>
                    <p><span style="color: green;"><b>Phone:</b> </span> 07267- 224710</p>
                    <p><span style="color: green;"><b>WhatsApp Number: </b> </span> 8329694425</p>
                    <p><span style="color: green;"><b>Email:</b> </span> krushi.vikas@yahoo.com</p>

                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>


</html>
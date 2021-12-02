<?php

session_start();





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
        <h2 style="text-align: center;color:white;font-size:300%" data-aos="fade-up" data-aos-duration="3000"> Fellowship <br>
            Register to apply for our Fellowship
        </h2>
    </div>
    <br>
    <br>

    <!-- Form For Registration -->

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 formclass">

                <form action="./fileUploadScripts/uploadResumeScript.php" method="post" enctype="multipart/form-data">
                    
                    <h3 style="text-align: center;">Individual</h3>
                    <div style="color: red;font-weight:700;font-family:'Times New Roman', Times, serif;text-align:center ">
                        <?php echo $_SESSION['statusOfForm1']  ?>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName">
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">Current State/Union Territory</label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>
                    <div class="mb-3">
                        <label for="profession" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession">
                    </div>
                    <div class="mb-3">
                        <label for="institudeName" class="form-label">Name of Institute</label>
                        <input type="text" class="form-control" id="institudeName" name="institudeName">
                    </div>
                    <div class="mb-3">
                        <label for="resume" class="form-label">Upload Resume</label>
                        <input type="file" class="form-control" id="resume" name="resume">
                        <small style="color: red;">The file size should be less than 1 mb</small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNo" class="form-label">Phone Number with country code</label>
                        <input type="text" class="form-control" id="phoneNo" name="phoneNo">
                    </div>


                    <div style="text-align: center;">
                        <button style="width: 200px;" type="submit" class="btn btn-success">Submit</button>
                    </div>



                </form>

            </div>

            <div class="col-md-5 formclass">

                <form>
                    <h3 style="text-align: center;">Institude</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="institudeName" class="form-label">Institude Name</label>
                        <input type="text" class="form-control" id="institudeName" name="institudeName">
                    </div>
                    <div class="mb-3">
                        <label for="degreeOffered" class="form-label">Degree/(s) offered</label>
                        <input type="text" class="form-control" id="degreeOffered" name="degreeOffered">
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">State/Union Territory where the Institute is

                            located</label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>
                    <div class="mb-3">
                        <label for="application" class="form-label">Upload Application</label>
                        <input type="file" class="form-control" id="application" name="application">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNo" class="form-label">Phone Number with country code</label>
                        <input type="text" class="form-control" id="phoneNo" name="phoneNo">
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


</body>


</html>
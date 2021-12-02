<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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
    <link rel="stylesheet" href="./css/main_nav_footer.css">
    <title>All About FPO | Webinar</title>
    <style>
      




        /* ---------------------------- */

        #mainheading {

            background-color: #19253F;
            padding-top: 100px;
            padding-bottom: 100px;
            background-color: #2a2a72;
            background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
            

        }


   

        /* --------------------------------------- */
        #register_btnn {
            background-image: linear-gradient(to right, blue, pink);
        }
    </style>
</head>

<body>
    <div class="container">



    </div>

    <!-- Nav Bar -->
    <?php include './partials/main_nav.php'; ?>

    <!-- ----------------------------------- -->
    <!-- MAIN HEADING OF PAGE -->
    <div class="container-fluid" id="mainheading">
        <h2 style="text-align: center;color:white;font-size:300%" data-aos="fade-up" data-aos-duration="3000">
            Live Webinars
        </h2>
        <p style="text-align: center;color: #F8F9FA;" data-aos="fade-up" data-aos-duration="3000">
        Free Live Webinars are regularly conducted with guidance of Industry Experts and Sector Experts. Check the events here. 
        </p>
    </div>
    <br>
    <br>

    <!-- webinar time table -->
    <div class="container">
        <h1 style="text-align: center;padding:30px;color:#7299D0">Check Events</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-responsive">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Name Of Event</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Mode</th>
                        <th scope="col">Fees</th>
                        <th scope="col">Know More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     include './database/allaboutfpo.php';
                    $catagory = "webinar";
                    include './partials/events.php';
                    ?>
                </tbody>
            </table>
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
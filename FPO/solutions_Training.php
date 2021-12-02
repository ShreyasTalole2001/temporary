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
    <title>About - All About FPO</title>
    <style>
        #mainheading {
            background-color: #19253F;
            padding-top: 100px;
            padding-bottom: 100px;


        }
        .cc{
            cursor: pointer;
        }

        .cc :hover{
            color: #045de9;
            background-color: white;

            transition: 1s;
        }


    #mainHead h1{
      font-size: 400%;
      padding-bottom: 50px;
    }





        @media all and (max-width: 800px) {
            #mainHeading_clm1 h1 {
                color: white;
                font-size: 200%;
                font-weight: 700;
                padding-top: 0px;
                text-align: center;
                padding-bottom: 20px;

            }

        }
    </style>
</head>

<body>


    <!-- Nav Bar -->
    <?php include './partials/main_nav.php'; ?>


    <!-- ----------------------------------- -->
    <!-- MAIN HEADING OF PAGE -->
    <div class="container-fluid" id="mainheading">
    <div class="container" id="mainHead" data-aos="fade-up" data-aos-duration="3000">
    <h1 style="text-align: center;color:white">Training</h1>
  </div>
        <div class="container">
            <div class="row">

                <div id="cc" class="col-sm-3 d-flex justify-content-center cc" data-aos="fade-up" data-aos-duration="3000" onclick="location.href='./training_Certified_Courses.php';">
                    <div class="card text-white bg-primary mb-3 " style="max-width: 18rem;" >
                    <img src="images/5465587.jpg" class="card-img-top" alt="...">
                        <!-- <div class="card-header">Training</div> -->
                        <div class="card-body">
                            <h5 class="card-title">Certified Courses</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 d-flex justify-content-center cc" data-aos="fade-up" data-aos-duration="3000" onclick="location.href='./training_Free_Content.php';">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <img src="images/INDEX_IMG5.jpg" class="card-img-top" alt="...">
                        <!-- <div class="card-header">Training</div> -->
                        <div class="card-body">
                            <h5 class="card-title">Free Content</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 d-flex justify-content-center cc" data-aos="fade-up" data-aos-duration="3000" onclick="location.href='./training_Onsite_Workshops.php';">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <img src="images/INDEX_IMG8.jpg" class="card-img-top" alt="...">
                        <!-- <div class="card-header">Training</div> -->
                        <div class="card-body">
                            <h5 class="card-title">Workshops</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 d-flex justify-content-center cc" data-aos="fade-up" data-aos-duration="3000" onclick="location.href='./liveWebinar.php';">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <img src="images/INDEX_IMG7.jpg" class="card-img-top" alt="...">
                        <!-- <div class="card-header">Training</div> -->
                        <div class="card-body">
                            <h5 class="card-title">Webinars</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        </div>
                    </div>
                </div>




            </div>
        </div>

    </div>





    <!-- ----------------------------------- -->

    <!-- FOOTER -->
    <?php include './partials/footer.php';  ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>


</body>


</html>
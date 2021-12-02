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
            background-color: #2a2a72;
            background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
        }

        #mainHeading_clm1 h1 {
            color: white;
            font-size: 300%;
            font-weight: 700;
            padding-top: 30px;

        }

        #mainHeading_clm1 p {
            color: #F9F9F9;
            text-align: justify;


        }

        .iframe-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
            
        }

        .tt{
            border: 15px solid #F9F9F9;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .vdo {
            margin-top: 20px;
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

        /* ------------------------------------------------------------------ */
    </style>
</head>

<body>


    <!-- Nav Bar -->
    <?php include './partials/main_nav.php'; ?>


    <!-- ----------------------------------- -->
    <!-- MAIN HEADING OF PAGE -->
    <div class="container-fluid" id="mainheading">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="mainHeading_clm1" data-aos="fade-up" data-aos-duration="3000">
                    <h1>Free Content</h1>
                    <p>
                    Explore our professional training events and online webinars here free of cost.  
                    </p>
                    <!-- <script src="https://apis.google.com/js/platform.js"></script> -->
                    <!-- <div class="g-ytsubscribe" data-channel="KrushiVikas" data-layout="full" data-theme="dark" data-count="hidden"></div> -->
                </div>
                <div class="col-sm-6 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                    <div class="iframe-container tt">
                        <iframe src="https://www.youtube.com/embed/Y-xTaHfxBXw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>



    <!-- ----------------------------------- -->
    <!-- FREE CONTENT VIDEOS -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center vdo">
                <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UKj7DAV03WI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-6 d-flex justify-content-center vdo">
                <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7gqHkXt8ADM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center vdo">
                <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AHmNcbf7Zsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-6 d-flex justify-content-center vdo">
                <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cYPq7ccM-PQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center vdo">
                <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YWSV7XOBRoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-6 d-flex justify-content-center vdo">
                <div class="iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tSJvjMjxp3I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>









    </div>












    <br>
    <!-- FOOTER -->
    <?php include './partials/footer.php';  ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>


</body>


</html>
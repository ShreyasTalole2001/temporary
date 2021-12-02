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


        }

        #centeredOnsmallScreen a {
            background-image: linear-gradient(to right, blue, pink);
            font-weight: 700;
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

            #centeredOnsmallScreen {
                text-align: center;

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
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="mainHeading_clm1" data-aos="fade-up" data-aos-duration="3000">
                    <h1>Post Registration</h1>
                    <p style="text-align:justify">
                    Are you feeling traped ? Are you lacking financial resources  for your Farmer Producer Company (FPC) ?

                    </p>
                    <div id="centeredOnsmallScreen">
                        <a style="font-size: 150%;" class="btn btn-primary" href="tel:8329694425"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="col-sm-6 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                    <img src="./images/5127314.png" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
    <br>
    <!-- ----------------------------------- -->
    <div class="container">
        <p style="text-align: justify;">Around 8000 FPCs are currently registered throughout the country, but many of them are in dormant stages due to lack of knowledge regarding Legal Compliances, Auditing, HR systems, Licenses etc. Our experts and experienced professionals will help you find strategic solutions to all your difficulties.   </p>
        <h3 style="text-align: center;">THE PROCESS</h3>
        <ul>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Fund raising & Govt scheme linkages </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Auditing & Legal compliances </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Licenses </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> HR and Governance </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Branding & Marketing </p>
        </ul>
        <hr>
        <br>
        <h4 style="text-align: center;color:#01735C;">Experience our professionalism by giving a call right now.</h4>
        <br>
        <div style="text-align: center;">
            <a href="tel:8329694425" style="text-align: center;font-size:150%" class="btn btn-success"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>

        </div>

        <br>
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
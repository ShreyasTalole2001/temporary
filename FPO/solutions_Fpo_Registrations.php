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
                    <h1>FPO Registration</h1>
                    <p style="text-align:justify">
                        Start your own agribusiness through formation of Farmer Producer Company (FPC).

                    </p>
                    <div id="centeredOnsmallScreen">
                        <a style="font-size: 150%;" class="btn btn-primary" href="tel:8329694425"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="col-sm-5 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                    <img src="./images/11336.jpg" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
    <br>
    <!-- ----------------------------------- -->
    <div class="container">
        <p style="text-align: justify;">Many FPCs fail to get grants and finances from various schemes as they don't set their paramers appropriately while registration (Authorized Share Capital, Paid up Capital etc.). While FPC registration is the first step towards shaping your agribusiness ideas, many FPCs could not perform well in future as they don't engage into primary research even after registration of their FPCs. At our Incubation center, we just don't provide just registration facility but help FPCs to sustain in future through expert guidance. 
As you partner with us through FPC registration, you become a part of our FPC ecosystem which is embedded with trainings, incubation, trading and networking facilities available to our partners at discounted rates.  </p>
        <h3 style="text-align: center;">THE PROCESS</h3>
        <ul>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Resource planning guidance. </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Deciding Share Capital And Authorized capital appropriately. </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Guidance on required documents. </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Registration of FPO with ROC. </p>
            <p><i style="color: #009ffd;" class="fa fa-check" aria-hidden="true"></i> Linking the FPC to our ecosystem. </p>
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
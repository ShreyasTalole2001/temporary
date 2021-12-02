<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Work+Sans&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./partials/common.css" rel="stylesheet">
    <link rel="stylesheet" href="./partials/footer.css">
    <style>
        body {
            background-color: #FAFDF1;
            font-family: 'Montserrat', sans-serif;
        }

        #mainheading {
            background-color: #19253F;
            padding-top: 100px;
            padding-bottom: 100px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)), url('images/our partners2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 20px;
            margin-top: 20px;
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            font-family: 'Montserrat', sans-serif;
        }

        #companyName {
            text-align: center;
            color: white;
            font-size: 400%;
            font-weight: 700;
        }

        @media all and (max-width: 800px) {
            #companyName {
                text-align: center;
                color: white;
                font-size: 200%;
                font-weight: 700;
            }

            #mainheading {
                margin-top: 0px;
                border-radius: 0px;
                box-shadow: none;
            }



        }

        .headings {
            text-align: center;
            margin: 20px 0px;
            font-size: 34px;
            font-weight: 700;
            color: green;
        }

        .product {
            margin-top: 20px;
            padding: 10px;
        }
        .d-flex img:hover{
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);
            border-radius: 10px;

        }
        
    </style>
    <title>Jay Sardar Krushi Vikas FPC</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include "./partials/navBar.php";  ?>

    <!-- Infrastructure -->
    <div class="container" id="mainheading">
        <h2 id="companyName" data-aos="fade-up" data-aos-duration="3000">
            Our Partners
        </h2>
    </div>


    <br>
    <br>
    <div class="container">
        <h3 class="headings">Promoter Partners</h3>
        <!-- <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div> -->


        <div class="row">
            <div class="col-4 d-flex justify-content-center">
                <img class="img-fluid" src="./images/logoCompanies/Slide2.JPG">
            </div>
            <div class="col-4 d-flex justify-content-center">
                <img class="img-fluid" src="./images/logoCompanies/Slide7.JPG">
            </div>
            <div class="col-4 d-flex justify-content-center">
                <img class="img-fluid" src="./images/logoCompanies/Slide1.JPG">
            </div>
        </div>
        <br>
        <br>
        <h3 class="headings">Institutional Partners</h3>
        <!-- <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div> -->

        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <img class="img-fluid" src="./images/logoCompanies/Slide2.JPG">
            </div>
            <div class="col-6 d-flex justify-content-center">
                <img class="img-fluid" src="./images/logoCompanies/Slide1.JPG">
            </div>
        </div>

        <br>
        <br>

        <h3 class="headings">Finance Partners</h3>
        <!-- <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div> -->

        <div class="row">
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide10.JPG">
            </div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide11.JPG">
            </div>
            <div class="w-100 d-lg-none"></div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide12.JPG">
            </div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide13.JPG">
            </div>
        </div>

        <br>
        <br>

        <h3 class="headings">We trade with</h3>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide4.JPG">
            </div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide3.JPG">
            </div>
            <div class="w-100 d-lg-none"></div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide5.JPG">
            </div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide13.JPG">
            </div>
        </div>

        <br>
        <br>

        <h3 class="headings">Value Chanin Development Partners</h3>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide4.JPG">
            </div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide3.JPG">
            </div>
            <div class="w-100 d-lg-none"></div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide5.JPG">
            </div>
            <div class="col d-flex justify-content-center">
                <img style="margin-top: 20px;" class="img-fluid" src="./images/logoCompanies/Slide13.JPG">
            </div>
        </div>





    </div>



















    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer -->
    <?php include "./partials/footer.php"; ?>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>

    <!-- FOOTER -->





</body>

</html>
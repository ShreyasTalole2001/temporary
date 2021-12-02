<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        }

        #mainheading {
            background-color: #19253F;
            padding-top: 100px;
            padding-bottom: 100px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)), url('images/our story 4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

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
            }



        }

        .headings {
            text-align: center;
            margin: 20px 0px;
            font-size: 34px;
            font-weight: 700;
            color: green;
        }

        .imgClm img {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            margin-top: 20px;
        }

        .imgClm img:hover {
            transform: scale(0.9);
        }

        .textClm h3 {
            text-align: left;
            font-size: 500%;
            margin-top: 30px;
            font-weight: 700;
            color: #008000;
        }

        @media all and (max-width: 800px) {
            .textClm h3 {
                text-align: center;
                font-size: 200%;
                margin-top: 30px;
                font-weight: 700;
                color: #008000;
            }
        }

        .img-fluid {
            margin-top: 20px;
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
            Infrastructure
        </h2>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <img src="./images/infra1.jpg" class="img-fluid">
            </div>
            <div class="col-sm-6">
                <img src="./images/infra2.jpg" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <img src="./images/infra3.jpg" class="img-fluid">
            </div>
            <div class="col-sm-6">
                <img src="./images/infra4.jpg" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <img src="./images/infra5.jpg" class="img-fluid">
            </div>
            <div class="col-sm-6">
                <img src="./images/infra6.jpg" class="img-fluid">
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
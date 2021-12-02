<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./partials/common.css" rel="stylesheet">

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
                box-shadow: none;
            }



        }

        .card {
            margin-top: 10px;
            transition: 0.5s;
            border-radius: none;

        }

        .card:hover {
            background-color: #E0F293;
            transition: 0.5s;
        }




        #footer {
            background-color: #20272F;
            color: #F8F9FA;
            padding: 20px;
        }
    </style>
    <title>Our Team</title>
</head>

<body>


    <!-- Nav Bar -->
    <?php include "./partials/navBar.php";  ?>





    <div class="container" id="mainheading">
        <h2 id="companyName" data-aos="fade-up" data-aos-duration="3000">
            Our Team of Promoters
        </h2>
    </div>

    <br>

    <div class="container">
        <div class="row ">

            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card" style="width: 15rem;padding: 10px;">
                    <img src="./images/our_Team/dummy.png" class="card-img-top" alt="..." style="border-radius: 50%;">
                    <div class="card-body" style="text-align: center;">
                        <h6 class="card-title" style="font-weight: 700;font-size:14px;">Shri Dilip H Naphade</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card" style="width: 15rem;padding: 10px;">
                    <img src="./images/our_Team/dummy.png" class="card-img-top" alt="..." style="border-radius: 50%;">
                    <div class="card-body" style="text-align: center;">
                        <h6 class="card-title" style="font-weight: 700;font-size:14px;">Shri Balkrishna P Phirke</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card" style="width: 15rem;padding: 10px;">
                    <img src="./images/our_Team/dummy.png" class="card-img-top" alt="..." style="border-radius: 50%;">
                    <div class="card-body" style="text-align: center;">
                        <h6 class="card-title" style="font-weight: 700;font-size:14px;">Smt Radha P Patil</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card" style="width: 15rem;padding: 10px;">
                    <img src="./images/our_Team/dummy.png" class="card-img-top" alt="..." style="border-radius: 50%;">
                    <div class="card-body" style="text-align: center;">
                        <h6 class="card-title" style="font-weight: 700;font-size:14px;">Shri Sunil P Chopade</h6>
                    </div>
                </div>
            </div>

        </div>

        <div class="row ">

            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card" style="width: 15rem;padding: 10px;">
                    <img src="./images/our_Team/dummy.png" class="card-img-top" alt="..." style="border-radius: 50%;">
                    <div class="card-body" style="text-align: center;">
                        <h6 class="card-title" style="font-weight: 700;font-size:14px;">Shri Jayesh D Patil</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card" style="width: 15rem;padding: 10px;">
                    <img src="./images/our_Team/dummy.png" class="card-img-top" alt="..." style="border-radius: 50%;">
                    <div class="card-body" style="text-align: center;">
                        <h6 class="card-title" style="font-weight: 700;font-size:14px;">Shri Amit Naphade</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center">
                <div class="card" style="width: 15rem;padding: 10px;">
                    <img src="./images/our_Team/dummy.png" class="card-img-top" alt="..." style="border-radius: 50%;">
                    <div class="card-body" style="text-align: center;">
                        <h6 class="card-title" style="font-weight: 700;font-size:14px;">Shri Ashish Naphade</h6>
                    </div>
                </div>
            </div>


        </div>






    </div>
















    <br>
    <br>

 <!-- Footer -->
 <?php include "./partials/footer.php"; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
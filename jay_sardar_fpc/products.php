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
                    rgba(0, 0, 0, 0.5)), url('images/wood-table-background-tea-plant.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
                box-shadow:none;
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

      
        
    </style>
    <title>Jay Sardar Krushi Vikas FPC</title>
</head>

<body>

    <!-- Nav Bar -->
    <?php include "./partials/navBar.php";  ?>

    <!-- Infrastructure -->
    <div class="container" id="mainheading">
        <h2 id="companyName" data-aos="fade-up" data-aos-duration="3000">
            Our Products
        </h2>
    </div>

    <div class="container">
        <br>
        <br>

       <a style="background-color:azure;border-radius:5px;padding:10px;font-family: 'Montserrat', sans-serif;">Santushta</a>
        <div class="row">
            <div class="col product d-flex justify-content-center">

                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;border-radius:10px;">
                    <img class="img-fluid" src="./images/pro1.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Product name goes here</p>

                    </div>
                </div>
            </div>
            <div class="col product d-flex justify-content-center">
                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;">
                    <img class="img-fluid" src="./images/pro2.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Product name goes here</p>

                    </div>
                </div>
            </div>
            <div class="col product d-flex justify-content-center">
                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;">
                    <img class="img-fluid" src="./images/pro3.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Product name goes here</p>

                    </div>
                </div>
            </div>

            <div class="col product d-flex justify-content-center">
                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;">
                    <img class="img-fluid" src="./images/pro4.png">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Product name goes here</p>

                    </div>
                </div>
            </div>

        </div>

<br>
<br>


        <a style="background-color:azure;border-radius:5px;padding:10px;font-family: 'Montserrat', sans-serif;">Other Products</a>
        <div class="row">
            <div class="col product d-flex justify-content-center">

                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;border-radius:10px;">
                    <img class="img-fluid" src="./images/products/santushtseeds.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Santushta Seeds</p>

                    </div>
                </div>
            </div>
            <div class="col product d-flex justify-content-center">
                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;">
                    <img class="img-fluid" src="./images/products/product-jpeg-500x500.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Tarpaulin</p>

                    </div>
                </div>
            </div>
            <div class="col product d-flex justify-content-center">
                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;">
                    <img class="img-fluid" src="./images/products/f1.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">IFFCO KISSAN cattle feed</p>

                    </div>
                </div>
            </div>

            <div class="col product d-flex justify-content-center">
                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;">
                    <img class="img-fluid" src="./images/products/f2.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Tiwana cattle feed</p>

                    </div>
                </div>
            </div>

            <div class="col product d-flex justify-content-center">
                <div class="card" style="border:none;font-family: 'Work Sans', sans-serif;">
                    <img class="img-fluid" src="./images/products/spraypump.jpg">
                    <div class="card-body" style="background-color: #FAFDF1;border:none;">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text">Spray Pump</p>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <br>
    <br>
    <br>


















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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./partials/common.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

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

        

        .btn {
            margin: 2px;
        }

        .headings {
            text-align: center;
            padding-top: 50px;
            font-size: 24px;
            font-weight: 700;
            color: #62A23E;
        }

      

        #footer {
            background-color: #20272F;
            color: #F8F9FA;
            padding: 20px;
        }
    </style>
    <title>Prominent Crops</title>
</head>

<body>
    <!-- Nav Bar -->
    <?php include "./partials/navBar.php";  ?>

    <!-- -------------------------------------------------------------- -->

    <div class="container" id="mainheading">
        <h2 id="companyName" data-aos="fade-up" data-aos-duration="3000">
           Prominent Crops
        </h2>
    </div>
    

    <!-- -------------------------------------------------------------- -->
    <div id="containerOfCrop">
        <div class="container">
            <h3 class="headings" id="soybean">soybean</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>

            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-7 d-flex justify-content-center">
                    <img src="./images/crop/soya.png" class="img-fluid">
                </div>
                <div class="col-sm-5 d-flex justify-content-center">

                    <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                                <stop id="stop1" stop-color="rgba(221, 241, 159, 1)" offset="0%"></stop>
                                <stop id="stop2" stop-color="rgba(221, 241, 159, 1)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#sw-gradient)" d="M30.2,-29C38,-22.5,42.2,-11.3,41.5,-0.7C40.7,9.8,35.1,19.7,27.4,26.8C19.7,33.8,9.8,38.2,0.5,37.7C-8.8,37.2,-17.7,31.9,-24.6,24.8C-31.6,17.7,-36.7,8.8,-37.8,-1.1C-38.9,-11.1,-36.1,-22.2,-29.1,-28.7C-22.2,-35.1,-11.1,-37,0.1,-37.1C11.3,-37.2,22.5,-35.5,30.2,-29Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)">
                        </path>
                        <text x="25" y="50" font-family="poppins" font-size="5" fill="green" font-weight="700">
                            <tspan x="25" y="50">Weitage - 500+ tonnes</tspan>
                            <tspan x="25" y="57">Area - 500+ Acre</tspan>
                        </text>
                    </svg>

                </div>
            </div>
            <!-- --------------- -->
            <br>
            <br>
            <h3 class="headings" id="Corn">Maize</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>

            <div class="row flex-column-reverse flex-lg-row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-5 d-flex justify-content-center">

                    <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                                <stop id="stop1" stop-color="rgba(221, 241, 159, 1)" offset="0%"></stop>
                                <stop id="stop2" stop-color="rgba(221, 241, 159, 1)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#sw-gradient)" d="M30.2,-29C38,-22.5,42.2,-11.3,41.5,-0.7C40.7,9.8,35.1,19.7,27.4,26.8C19.7,33.8,9.8,38.2,0.5,37.7C-8.8,37.2,-17.7,31.9,-24.6,24.8C-31.6,17.7,-36.7,8.8,-37.8,-1.1C-38.9,-11.1,-36.1,-22.2,-29.1,-28.7C-22.2,-35.1,-11.1,-37,0.1,-37.1C11.3,-37.2,22.5,-35.5,30.2,-29Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)">
                        </path>
                        <text x="25" y="50" font-family="poppins" font-size="5" fill="green" font-weight="700">
                            <tspan x="25" y="50">Weitage - 500+ tonnes</tspan>
                            <tspan x="25" y="57">Area - 500+ Acre</tspan>
                        </text>
                    </svg>

                </div>
                <div class="col-sm-7 d-flex justify-content-center">
                    <img src="./images/crop/maize.png" class="img-fluid">
                </div>
            </div>
            <!-- --------------- -->
            <br>
            <br>
            <h3 class="headings" id="Cotton">Cotton</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>


            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-7 d-flex justify-content-center">
                    <img src="./images/crop/cotton.png" class="img-fluid">
                </div>
                <div class="col-sm-5 d-flex justify-content-center">

                <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                                <stop id="stop1" stop-color="rgba(221, 241, 159, 1)" offset="0%"></stop>
                                <stop id="stop2" stop-color="rgba(221, 241, 159, 1)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#sw-gradient)" d="M30.2,-29C38,-22.5,42.2,-11.3,41.5,-0.7C40.7,9.8,35.1,19.7,27.4,26.8C19.7,33.8,9.8,38.2,0.5,37.7C-8.8,37.2,-17.7,31.9,-24.6,24.8C-31.6,17.7,-36.7,8.8,-37.8,-1.1C-38.9,-11.1,-36.1,-22.2,-29.1,-28.7C-22.2,-35.1,-11.1,-37,0.1,-37.1C11.3,-37.2,22.5,-35.5,30.2,-29Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)">
                        </path>
                        <text x="25" y="50" font-family="poppins" font-size="5" fill="green" font-weight="700">
                            <tspan x="25" y="50">Weitage - 500+ tonnes</tspan>
                            <tspan x="25" y="57">Area - 500+ Acre</tspan>
                        </text>
                    </svg>

                </div>
            </div>

            <!-- --------------- -->
            <br>
            <br>
            <h3 class="headings" id="Arhar">Arhar</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>


            <div class="row flex-column-reverse flex-lg-row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-5 d-flex justify-content-center">
                <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                                <stop id="stop1" stop-color="rgba(221, 241, 159, 1)" offset="0%"></stop>
                                <stop id="stop2" stop-color="rgba(221, 241, 159, 1)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#sw-gradient)" d="M30.2,-29C38,-22.5,42.2,-11.3,41.5,-0.7C40.7,9.8,35.1,19.7,27.4,26.8C19.7,33.8,9.8,38.2,0.5,37.7C-8.8,37.2,-17.7,31.9,-24.6,24.8C-31.6,17.7,-36.7,8.8,-37.8,-1.1C-38.9,-11.1,-36.1,-22.2,-29.1,-28.7C-22.2,-35.1,-11.1,-37,0.1,-37.1C11.3,-37.2,22.5,-35.5,30.2,-29Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)">
                        </path>
                        <text x="25" y="50" font-family="poppins" font-size="5" fill="green" font-weight="700">
                            <tspan x="25" y="50">Weitage - 500+ tonnes</tspan>
                            <tspan x="25" y="57">Area - 500+ Acre</tspan>
                        </text>
                    </svg>
                </div>
                <div class="col-sm-7 d-flex justify-content-center">
                    <img src="./images/crop/arhar.jpg" class="img-fluid">
                </div>
            </div>

            <!-- --------------- -->
            <br>
            <br>
            <h3 class="headings" id="chickpea">Chana</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>


            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-sm-7" style="padding:20px">
                    <img src="./images/crop/chana.png" class="img-fluid">
                </div>
                <div class="col-sm-5">
                <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                                <stop id="stop1" stop-color="rgba(221, 241, 159, 1)" offset="0%"></stop>
                                <stop id="stop2" stop-color="rgba(221, 241, 159, 1)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#sw-gradient)" d="M30.2,-29C38,-22.5,42.2,-11.3,41.5,-0.7C40.7,9.8,35.1,19.7,27.4,26.8C19.7,33.8,9.8,38.2,0.5,37.7C-8.8,37.2,-17.7,31.9,-24.6,24.8C-31.6,17.7,-36.7,8.8,-37.8,-1.1C-38.9,-11.1,-36.1,-22.2,-29.1,-28.7C-22.2,-35.1,-11.1,-37,0.1,-37.1C11.3,-37.2,22.5,-35.5,30.2,-29Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)">
                        </path>
                        <text x="25" y="50" font-family="poppins" font-size="5" fill="green" font-weight="700">
                            <tspan x="25" y="50">Weitage - 500+ tonnes</tspan>
                            <tspan x="25" y="57">Area - 500+ Acre</tspan>
                        </text>
                    </svg>
                </div>
            </div>










        </div>
    </div>










 <!-- Footer -->
 <?php include "./partials/footer.php"; ?>








    




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>
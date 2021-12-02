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

    <!-- <link type="text/css" rel="stylesheet" href="./partials/common.css"> -->
    <link rel="stylesheet" href="./partials/footer.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;

        }

        #mainheading {

            /* background-color: #19253F; */
            padding-top: 240px;
            padding-bottom: 240px;


            /* background-image: url('images/homeImage.jpg'); */
            /* background-size: cover; */
            /* background-repeat: no-repeat; */
            font-family: 'Montserrat', sans-serif;
            text-shadow: 2px 2px 2px #000000;



        }

        #companyName {
            text-align: center;
            color: white;
            font-size: 45PX;
            font-weight: 700;

        }

        @media all and (max-width: 800px) {
            #companyName {

                font-size: 35PX;
                font-weight: 700;

            }

        }

        .headings {
            text-align: center;
            margin: 20px 0px;
            font-size: 34px;
            font-weight: 700;
            color: #2A431C;
        }

        .card {
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        .card-title {
            font-weight: 700;
            color: #62A23E;
        }

        #aboutText {
            font-size: 100%;
            font-size: 1.3vw;
            font-family: 'Work Sans', sans-serif;
        }

        #agricenterText {
            padding-top: 160px;
            text-align: justify;
            font-size: 18px;
            font-family: 'Work Sans', sans-serif;
            color: #2A431C;
        }

        @media all and (max-width: 800px) {
            #aboutText {
                font-size: 100%;
            }

            #agricenterText {
                padding-top: 20px;
            }


        }



        /* Nav Bar for home page */
        .navbar {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: white !important;


        }

        nav .navbar-nav li a {
            color: white;
            margin: 10px 0px;
            margin-right: 30px !important;
            /* background-color: white; */
            border-radius: 5px;
        }

        .newclass {
            color: white !important;
            text-shadow: 1px 1px #000000;


        }

        .dropdown-item {
            color: black !important;
        }

        #logo {
            width: 70px;
        }

        @media all and (max-width: 800px) {
            .navbar {
                /* background-color: white; */
            }

            nav .navbar-nav li a {
                /* color: #2A431C !important; */
                margin: 10px 0px;
                margin-right: 30px !important;
                /* background-color: white; */
                border-radius: 5px;
            }

            .newclass {
                /* opacity: 10; */
                /* background-color: #F8F9FA !important; */


            }

            #logo {
                width: 50px;
            }

        }


        .navbarBackColor {
            background-color: #F8F9FA;
        }


        .partnerlogo:hover {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }



        /* video background */
        #background-video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
        }

        main {
            background-color: #FCFAF8;
            z-index: 10000;




        }
    </style>
    <title>Jay Sardar Krushi Vikas FPC</title>
</head>

<body>
    <!-- Nav Bar -->
    <nav class='navbar navbar-expand-lg navbar-light text-white fixed-top '>
        <div class='container-fluid'>
            <a class='navbar-brand' href='./'> <img id='logo' class='img-fluid' src='./images/Jay sardar.png'></a>
            <!-- <a class='navbar-brand' href='./'> LOGO</a> -->




            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle a newclass' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                            About Us
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li><a class='dropdown-item ' href='./aboutUs_ourStory.php'>Our Story</a></li>
                            <li><a class='dropdown-item ' href='./aboutUs_infrastructure.php'>Infrastructure</a></li>
                            <li><a class='dropdown-item ' href='#'>Our Team</a></li>
                            <li><a class='dropdown-item ' href='./aboutUs_prominent_crops.php'>Prominent Crops</a></li>



                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link a newclass' href='./business_activities.php' id='navbarDropdown' role='button'>
                            Business Activities
                        </a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle a newclass' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                            Services
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li><a class='dropdown-item' href='#'>Procurement</a></li>
                            <li><a class='dropdown-item' href='#'>Training & Capacity Building</a></li>
                            <li><a class='dropdown-item' href='#'>FPO Services</a></li>
                            <li><a class='dropdown-item' href='#'>Crop Advisor</a></li>


                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link  a newclass' aria-current='page' href='./partners.php'>Our Partners </a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link  a newclass' aria-current='page' href='./products.php'>Products </a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>




    <div class="container-fluid" id="mainheading">
        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <source src="./images/New video.mp4" type="video/mp4">
        </video>
        <h2 id="companyName" data-aos="fade-up" data-aos-duration="3000">
            JAY SARDAR KRUSHI VIKAS
        </h2>
        <h3 style="text-align: center;color:white;font-weight:700;  " data-aos="fade-up" data-aos-duration="3000">Farmer
            Producer Company</h3>
    </div>






    <main>
        <br>
        <br>
        <div class="container">
            <h3 class="headings">ABOUT JAY SARDAR FPC</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>
            <br>


            <div class="row">
                <div class="col-sm-5" style="margin-top: 20px;">
                    <img id="openingImage" src="images/our story 2.jpg" class="img-fluid" style="border-radius: 5px;">
                </div>
                <div class="col-sm-7 d-flex justify-content-center" style="margin-top: 20px;">
                    <div style="background-color: #D5EE89;border-radius: 5px;padding: 10px;padding-top:30px;">
                        <p style="text-align: justify;" id="aboutText">
                            Agriculture is the backbone of Indian Economy. More than 60 % of population of India is directly
                            dependent on Agriculture for their livelihood. Indian Farmers are facing severe issues in
                            agriculture due to various reasons like market linkage, higher cost of production, higher risk
                            due to market fluctuations and climatic conditions, lack of technology, small land holding etc.
                            Overcoming these problems becomes a humongous task for an individual farmer and understanding
                            this fact, Jay Sardar Krushi Vikas Farmer Producer Company was constituted by Krushi Vikas Va
                            Gramin Prashikshan Sanstha in the year 2016 with support of Small Farmers Agribusiness
                            Consortium (SFAC).
                            The services provided by the company are blessings in disguise for the farmers of draught prone
                            Vidarbh region.

                        </p>
                    </div>
                </div>
            </div>


        </div>


        <br>
        <br>


        <!-- <div class="container-fluid" id="bckimgtest" style="padding: 50px;">
        <div class="container">
            <h3 class="headings">Promoting Agency</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>
            <br>
            <div class="row d-flex justify-content-center">
                <div class="card supporetdBy" style="width: 18rem;margin: 10px;" data-aos="fade-up">
                    <img src="images/logo_sfac.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card supporetdBy" style="width: 18rem;margin: 10px;background-color:#EFFFE4;"
                    data-aos="fade-up">
                    <img src="images/logo-krushiVikas.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>

    <br>
    <br> -->

        <div class="container">
            <h3 class="headings">Jay Sardar Agri Support Center</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center">



                    <img class="img-fluid" src="./images/Jay Sardar Desig.png" style="margin-top: 20px;">
                </div>
                <div class="col-sm-6" id="agricenterText">
                    Understanding the needs of local farmers, Jay Sardar FPC provides multi-faceted services to the
                    connected farmers and has established itself as a Agri Support Center. The services range from Commodity
                    Procurement, Input Supply, Agriculture Advisory, Commodity Processing, Warehousing Facility, FPO
                    Capacity Building and many more.
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="container">
            <h3 class="headings">Testimonials</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>
            <br>

            <div style="text-align: justify;font-family: 'Work Sans', sans-serif;">
                Taking into consideration the progress of Jay Sardar, it was invited for the launch ceremony of ‘10000
                FPO Program’ at Chitrakut in Feb, 2020. During the event, Honourable Prime Minister of India Shri
                Narendra Modi ji interacted with Sh Dilip Naphade (Chairman, Jay Sardar FPC) and other members of Jay
                Sardar and praised the works done by company. Also in 2018, Mr Narendra Modi specially mentioned Jay
                Sardar during his Man Ki Baat event when he said that the bonus given by Jay Sardar FPC to its member is
                a significant historical event in the paradigm of Farmer Producer Companies.
                <br>
                <br>
                <div class="container" style="text-align: center;">
                <div class="container" style="text-align: center;">
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/MbEXIbjeNG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-6">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/ZRxrQ2f8GNk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
                </div>

            </div>
        </div>

        <br>
        <br>

        <div class="container">
            <h3 class="headings">We Work With</h3>
            <div style="background-color: #B8CE5C;height: 3px;width: 40px;margin: 0px auto;"></div>

            <div class="container" style="text-align: center;margin-top: 30px;">


                <p style="padding-bottom: 0px;margin:0px;  font-family: 'Work Sans', sans-serif; ">During its journey of around 5 years, Jay Sardar has left no stone unturned for providing better
                    market opportunities and better prices for their agriculture commodities. It has emerged as a
                    professional organization dealing with institutional buyers as well as service providers and has
                    cracked many deals till date.</p>
            </div>
            <br>

            <div class="row">
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide1.JPG">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide2.JPG">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide3.JPG">
                </div>
                <div class="w-100 d-lg-none"></div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/logo_depOfAgri.jfif">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide7.JPG">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide6.JPG">
                </div>
                <div class="w-100 d-lg-none"></div>

            </div>

            <div class="row">
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide5.JPG">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/C-Safe-Logo-1.jpg">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide9.JPG">
                </div>
                <div class="w-100 d-lg-none"></div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide10.JPG">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide11.JPG">
                </div>
                <div class="col" style="margin-top: 20px;">
                    <img class="img-fluid partnerlogo" src="./images/logoCompanies/Slide12.JPG">
                </div>

                <div class="w-100 d-lg-none"></div>

            </div>
            <br>
            <br>

            <div class="container" style="text-align: center;">
                <a href="./partners.php" style="text-decoration:none; color:#62A23E">Know More</a>
            </div>






        </div>
        <br>
        <br>
        <br>
    </main>



    <!-- Footer -->
    <?php include "./partials/footer.php"; ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript">
        var nav = document.querySelector('nav');
        var nav1 = document.getElementsByClassName('a');








        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-light', 'shadow');


                nav1[0].classList.remove('newclass');
                nav1[1].classList.remove('newclass');
                nav1[2].classList.remove('newclass');
                nav1[3].classList.remove('newclass');
                nav1[4].classList.remove('newclass');




            } else {
                nav.classList.remove('bg-light', 'shadow');

                nav1[0].classList.add('newclass');
                nav1[1].classList.add('newclass');
                nav1[2].classList.add('newclass');
                nav1[3].classList.add('newclass');
                nav1[4].classList.add('newclass');




            }
        });
    </script>






</body>

</html>
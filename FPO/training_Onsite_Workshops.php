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
    <title>All About FPO | Workshop</title>
    <style>
        #mainheading {
            background-color: #19253F;
            /* padding-top: 100px; */
            /* padding-bottom: 100px; */
            background-color: #2a2a72;
            background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
        }

        #mainHeading_clm1 h1 {
            color: white;
            font-size: 300%;
            font-weight: 700;
            padding-top: 30px;
            padding-top: 100px;

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
                padding-top: 20px;
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
                <div class="col-sm-8" id="mainHeading_clm1" data-aos="fade-up" data-aos-duration="3000">
                    <h1>Onsite Workshops</h1>
                    <p style="text-align: justify;">
                    The campus of our model FPO - Jay Sardar Krushi Vikas FPC which is already been applauded by our Honorable Prime Minister Mr Narendra Modi welcomes you for our onsite workshops, demonstrations and site visit. <br>
You can join our ongoing batches or we can synthesize a special batch for you depending upon availability of slots.  

                    </p>
                </div>
                <div class="col-sm-4 " data-aos="fade-up" data-aos-duration="3000">
                   <img src="./images/ourTeam/Ashish Naphade workshopImg.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <br>



    <!-- ----------------------------------- -->
    <!-- Workshops -->
    <div class="container">
        <h1 style="text-align: center;padding:30px;color:#7299D0">Check Events</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-responsive">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Name Of Event</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Mode</th>
                        <th scope="col">Fees</th>
                        <th scope="col">Know More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     include './database/allaboutfpo.php';
                    $catagory = "workshop";
                    include './partials/events.php';
                    ?>
                </tbody>
            </table>
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
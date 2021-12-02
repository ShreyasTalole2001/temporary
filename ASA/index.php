<?php
session_start();
include './database/registrationDB.php';
if (!empty($_POST) &&  $_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($Registration_Conn, $_POST['email']);
    // echo $email;
    $query = "INSERT INTO registrations (email) VALUES ('$email')";
    mysqli_query($Registration_Conn, $query);

    $_SESSION['email'] = $email;
    $x = "0";
    if ($_SESSION['email']) {
        $x = "1";
        //    echo $x;
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MMGCXFN');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="facebook-domain-verification" content="0v8pzz9urrtiaqcqfeoyqs5ujnsl4d" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Stock Market Webinar</title>
    <style>
        body {
            font-family: system-ui;
        }

        #container_1 {
            background-color: #19253F;
            /* height: 500px; */
            background-color: #19253F;
      /* padding-top: 100px; */
      /* padding-bottom: 100px; */
      background-image: linear-gradient(rgba(0, 0, 0, 0.5),
          rgba(0, 0, 0, 0.5)), url('images/test3.jpg');

        }



        .problem p {
            background-color: white;
            padding: 20px;
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 700;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            font-family: system-ui;

        }

        /* ------------------ */
        #logo {
            width: 50%;
            padding-top: 50px;
        }

        @media all and (max-width: 800px) {
            #logo {
                width: 100%;
                padding-top: 30px;
            }

        }

        /* ----------------------------- */

        #topic {
            text-align: center;
            color: white;
            font-family: 'Roboto', sans-serif;
            padding: 10px;
            font-size: 130%;
            /* border: 1px solid black; */
            /* background-image: linear-gradient(to bottom right, red, yellow); */
            /* background-image: linear-gradient(to right, blue, pink); */

            color: #F39550;
            background-color: #1B3055;
            font-weight: 700;

        }

        #topic p {
            color: #F39550;
            opacity: 1;
        }

        #btnn {
            border-radius: 30px;
            font-size: 150%;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 10px;
            background-color: #F39550;
            color: #EDEDED;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #btnn:hover {
            background-color: green;
            transition: 1.2s;
            transform: scale(1.1);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        /* Frequently Asked Questions */

        /*----------------------------------------------------------------------------*/

        #refundtag{
            text-align: center;
            color: white;
            font-size: 80%;
            color: gray;
        }




        #grad {
            background-image: linear-gradient(to right, blue, pink);
        }

        #reviewhidden {
            display: none;
        }

        #readmorebtn {
            display: none;
        }

        @media all and (max-width: 800px) {
            #readmorebtn {
                display: block;

            }


        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMGCXFN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container-fluid" id="container_1">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
            <img id="logo" class="img-fluid" src="images/logo.png">
            <p style="color: gray;font-size:90%;">SEBI Reg # INH000004608 <br> RH#1, Sunflower Apts, N.I.B.M. Road, Pune:411048 <br><i class="fa fa-phone" aria-hidden="true"></i> 83808 96171 | 91680 92538 <br> <a style="text-decoration: none;" href="https://abundancestockadvisors.com/">www.abundancestockadvisors.com</a> </p>
        </div>
        <h1 style="text-align: center;color:white;padding:20px ;font-size:300%;font-family: 'Roboto', sans-serif;font-family: system-ui;" data-aos="fade-up" data-aos-duration="3000">Stock Market
            Winners Webinar <br> on</h1>
        <!-- <p style="text-align: center;color:white" data-aos="fade-up" data-aos-duration="3000">on</p> -->
        <div>
            <p style="font-size:180%;font-family: system-ui;" id="topic" data-aos="fade-up" data-aos-duration="3000">
                Wealth Creation Using
                “Technical Analysis”
            </p>
        </div>


        <p style="text-align: center;color:white;font-family: system-ui ;padding:20px;margin:0px; font-size:120%;" data-aos="fade-up" data-aos-duration="3000">
            29 <sup>th </sup> - 30 <sup>th </sup> MAY 2021, 10Am-2Pm <br>
            Language: Hindi <br>
            Fees: 499/- Rs Only
        </p>

        <div style="text-align: center;" data-aos="zoom-in" data-aos-duration="3000">
            <a href="https://www.instamojo.com/AbundanceStockAdvisors/stock-market-winners-webinar-29-30th-may-202/" id="btnn" class="btn ">&nbsp;&nbsp; Yes - Save My Spot!! &nbsp;&nbsp;</a>
            <br>
            <br>
            <p id="refundtag" >Get 100% refund if you cannot attend the webinar</p>
        </div>


        <br>
    </div>



    <div class=" d-flex justify-content-center" style="background-color: #EDEDED;padding: 10px;">
        <br>
        <br>
        <iframe src="https://player.vimeo.com/video/542186585" width="560" height="350" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>





    <div class="container">
        <h1 style="text-align: center;padding:20px;font-family: 'Roboto', sans-serif;" data-aos="fade-up" data-aos-duration="3000"> Topics Covered </h1>

        <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                <h3 style="text-align: center;">Day 1</h3>
                <hr>
                <div style="padding: 10px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-family: system-ui;">
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Share Market Basics</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Why you must invest in stocks?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Technical Analysis Vs Fundamental Analysis</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Introduction to Technical Analysis</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Candlestick Charts basics</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Understanding the markets using Dow Theory</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to make predictions using Elliot Wave theory</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to use Support & Resistance in Buying/Selling?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to predict a stock price technically?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to technically select a stock for buying? </p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Technique to sell a stock at the right time?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Should you buy Cheap or Expensive stocks?</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                <h3 style="text-align: center;">Day 2</h3>
                <hr>
                <div style="padding: 10px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-family: system-ui;">
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Candlestick Patterns - Know when a stock will fall?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Candlestick Patterns - Know when a stock will rise?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Which market capitalization stocks should you buy?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Should you invest in penny stocks?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Spotting a rise/fall using Moving Averages</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Estimating the strength of a trend using volume analysis</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to use the Moving Average Indicator for Buying/Selling</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to use Fibonacci Levels for Buying/Selling</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to use Bollinger Bands for Buying/Selling</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to use MACD for Buying/Selling</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Brief on Fundamental analysis</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> Preparing a stock Buying/Selling checklist?</p>
                    <p><i style="color: #F39550;" class="fa fa-check" aria-hidden="true"></i> How to build a strong portfolio that can sustain all market situations?</p>
                </div>
            </div>
        </div>





        <br>
        <br>
        <div style="text-align: center;">
            <a id="btnn" href="https://www.instamojo.com/AbundanceStockAdvisors/stock-market-winners-webinar-29-30th-may-202/" class="btn btn-success">&nbsp;&nbsp; Yes - I am ready to Go !!! &nbsp;&nbsp;</a>
            <br>
            <br>
            <p id="refundtag" style="color: black;" >Get 100% refund if you cannot attend the webinar</p>
        </div>
        <br>
        <br>
    </div>


    <div class="container-fluid" style="background-color: #EDEDED;">
        <br>
        <h1 data-aos="fade-up" data-aos-duration="3000" style="text-align: center;padding:20px;font-family: 'Roboto', sans-serif;">Join This Workshop If
            <hr>
        </h1>
        <div class="row">
            <div class="col-md-4 problem">
                <p>Reason #1 <br>
                    <span style="color: gray;">You’ve been facing losses in the stock markets </span>
                </p>
            </div>
            <div class="col-md-4 problem">
                <p>Reason #2 <br>
                    <span style="color: gray;">The moment you buy a stock it falls, the moment you sell it rises from there on </span>
                </p>
            </div>
            <div class="col-md-4 problem">
                <p>Reason #3 <br>
                    <span style="color: gray;">You have no idea what’s the right time to BUY a stock? </span>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 problem">
                <p>Reason #4 <br>
                    <span style="color: gray;">You really don’t know what’s the right time to SELL a stock? </span>
                </p>
            </div>
            <div class="col-md-4 problem">
                <p>Reason #5 <br>
                    <span style="color: gray;">You want to know how money can be made with just 40% accuracy </span>
                </p>
            </div>
            <div class="col-md-4 problem">
                <p>Reason #6 <br>
                    <span style="color: gray;">You want your million questions to be answered by people who have experience of 12 years in recommending stocks, with a great accuracy. </span>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 problem">
                <p>Reason #7 <br>
                    <span style="color: gray;">You want to create a great parallel source of income along with your current job/business </span>
                </p>
            </div>
            <div class="col-md-6 problem">
                <p>Reason #8 <br>
                    <span style="color: gray;">You believe that great money can be made in stock markets if you have the right knowledge. Selecting a stock is no luck or gambling. </span>
                </p>
            </div>
        </div>
        <br>
        <br>
        <div style="text-align: center;">
            <a id="btnn" href="https://www.instamojo.com/AbundanceStockAdvisors/stock-market-winners-webinar-29-30th-may-202/" class="btn btn-success">&nbsp;&nbsp; I want to join Now &nbsp;&nbsp;</a>
            <br>
            <br>
            <p id="refundtag" style="color: black;" >Get 100% refund if you cannot attend the webinar</p>
        </div>
        <br>
        <br>
    </div>

    <!-- About Us Section -->
    <div class="container-fluid" id="container_2">
        <h1 style="text-align: center;padding:20px;font-family: 'Roboto', sans-serif;" data-aos="fade-up" data-aos-duration="3000"> About Us </h1>
        <hr>
        <div class="container" style="text-align: justify;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-family: system-ui;" data-aos="fade-up" data-aos-duration="3000">
            <p>
                Abundance Stock Advisors is a SEBI Registered Research Analyst Group operational for 12 years now. We’ve been pioneers of having an educational YouTube channel for stock markets in India, the channel is 10 years old. We are licensed by SEBI to recommend high quality stocks to investors in India. With that great responsibility, our first motive has always been to protect our client’s capital and the next motive off course has been to create wealth. Hence our team of experts spend all their time rejecting stocks which do not fit in our motives. In the process the best stocks make their way to your portfolio. We guarantee meticulous research and analysis of stocks through our #TechnoFunda stock selection framework. This webinar is going to be a great opportunity for you to learn and spend time with experts who have been recommending stocks since the last 12 years now.
            </p>
        </div>
        <br>
        <div style="text-align: center;" data-aos="zoom-in" data-aos-duration="3000">
            <a id="btnn" href="https://www.instamojo.com/AbundanceStockAdvisors/stock-market-winners-webinar-29-30th-may-202/" class="btn btn-success">&nbsp;&nbsp; Yes - I want to Join this &nbsp;&nbsp;</a>
            <br>
            <br>
            <p id="refundtag" style="color: black;" >Get 100% refund if you cannot attend the webinar</p>
        </div>
        <br>
        <br>

    </div>

    <div class="container-fluid" style="background-color: #001723;">
        <h1 style="text-align: center;padding:20px;font-family: 'Roboto', sans-serif;color:white;"> What Our Clients Say </h1>


        <!-- Reviews Section -->

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/4.PNG">
                </div>
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/2.PNG">
                </div>
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/3.PNG">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/5.PNG">
                </div>
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/6.PNG">
                </div>
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/7.PNG">
                </div>
            </div>
            <br>
            <div style="text-align: center;">
                <a id="readmorebtn" onclick="displayREV()" style="text-align: center;color:#EDEDED;text-decoration:none;text-align:center">Read More</a>

            </div>

            <div class="row" id="reviewhidden">
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/11.png">
                </div>
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/12.jpeg">
                </div>
                <div class="col-md-4">
                    <img style="margin-top: 10px;" class="img-fluid" src="images/reviews/13.png">
                </div>
            </div>
            <br>
            <br>

        </div>

        <div style="text-align: center;">
            <a id="btnn" href="https://www.instamojo.com/AbundanceStockAdvisors/stock-market-winners-webinar-29-30th-may-202/" class="btn btn-success">&nbsp;&nbsp; &#128073; Book My Spot &nbsp;&nbsp;</a>
            <br>
            <br>
            <p id="refundtag" >Get 100% refund if you cannot attend the webinar</p>
        </div>

        <br>
        <br>


    </div>


    <!-- FAQ -->

    <div class="container">
        <h1 style="text-align: center;padding:20px;font-family: 'Roboto', sans-serif;">Frequently Asked Questions</h1>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <p>Which device should I use to attend this Webinar?</p>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>You can attend this webinar on a Laptop or mobile. We recommend using a Laptop for a better experience </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <p>Can I ask questions in this webinar?</p>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Yes. In fact we want you to come prepared with a list of questions and take advantage of our vital experience in recommending stocks for such a long time. </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <p>Will I get the recording of this session?</p>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Unfortunately, we do not share recordings </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <p>Do I need to do any preparation?</p>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>You should have basic knowledge of the stock market.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <p>Can I claim a refund if I am not able to attend the webinar?</p>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Yes. Given the current scenario in our country, we would provide a 100% refund if for some reasons you were not able to attend the webinar. No questions asked.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>











    <!-- Free Treasure -->

    <div class="container-fluid" style="background-color: #EDEDED;">
        <h1 style="text-align: center;padding:20px;font-family: 'Roboto', sans-serif;">Free Treasure for you !!</h1>

        <div class="container" id="xxxxxx">

            <div style="text-align: center;">
                <button style="color:#EDEDED;font-weight:700;background-color:  #1B3055; " type="button" class="btn glow btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Click here to download free ebooks worth 2999 INR /- absolutely Free
                </button>
            </div>
            <br>
            <a class="btn btn-success" href="https://abundancestockadvisors.com/wp-content/uploads/Finance.zip" style="display: none;" id="btn1">Finance ebooks : Download</a>
            <br>
            <a class="btn btn-success" href="https://abundancestockadvisors.com/wp-content/uploads/Abundance.zip" style="display: none;" id="btn2">Abundance Ebooks : Download</a>

            <br>
            <br>
            <h4 style="text-align: center;font-family: system-ui; "> "Not taking a decision is the worst decision to make"</h4>
            <br>
        </div>
        <div style="text-align: center;">
            
            <a id="btnn" href="https://www.instamojo.com/AbundanceStockAdvisors/stock-market-winners-webinar-29-30th-may-202/" class="btn btn-success">&nbsp;&nbsp; Save my spot now &nbsp;&nbsp;</a>
            <br>
            <br>
            <p id="refundtag" style="color: black;" >Get 100% refund if you cannot attend the webinar</p>
        </div>
        <br>
        <br>
    </div>


    <!-- Footer -->
    <div style="text-align: center;background-color:#19253F;padding:10px;">
        <img id="logo" class="img-fluid" src="images/logo.png">
        <p style="color: gray;">SEBI Reg # INH000004608 <br> RH#1, Sunflower Apts, N.I.B.M. Road, Pune:411048 <br><i class="fa fa-phone" aria-hidden="true"></i> 83808 96171 | 91680 92538 <br> <a style="text-decoration: none;" href="https://abundancestockadvisors.com/">www.abundancestockadvisors.com</a> </p>
        <br>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #19253F;">Enter your email to start download</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#xxxxxx" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" id="validationCustom01">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>

    <script>
        var x = "<?php echo $x;  ?>"
        console.log(x)
        if (x == 1) {
            document.getElementById('btn1').style.display = "block";
            document.getElementById('btn2').style.display = "block";

        }
    </script>

    <script>
        function displayREV() {
            document.getElementById('reviewhidden').style.display = "block";
            document.getElementById('readmorebtn').style.display = "none";

        }
    </script>







</body>

</html>
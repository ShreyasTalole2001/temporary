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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main_nav_footer.css">
   <style>
        body {
            /* background-color: bisque; */
            font-family: 'Poppins', sans-serif !important;
        }

        /* ----------------------------------- */

      

        #mainheading {

            background-color: #19253F;
            padding-top: 100px;
            padding-bottom: 100px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)), url('images/INDEX_IMG1.jpg');


        }
    </style>
    <title>FAQ</title>
</head>

<body>
    <!-- Nav Bar -->
    <?php include './partials/main_nav.php'; ?>

    <!-- ----------------------------------- -->
    <!-- MAIN HEADING OF PAGE -->
    <div class="container-fluid" id="mainheading">
        <h2 style="text-align: center;color:white;font-size:300%" data-aos="fade-up" data-aos-duration="3000">
            Frequently Asked Questions
        </h2>
        <p style="text-align: center;color: #F8F9FA;" data-aos="fade-up" data-aos-duration="3000">
            for all those little doubts on your mind.
        </p>
    </div>
    <br>
    <br>

    <!-- ------------------------------------------------------- -->
    <!-- FREQUENTLY ASKED QUESTIONS -->
    <div class="container">


        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b> What is
                                the purpose of this platform? </b></span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        This is a shared platform for experts as well as knowledge seekers among rural communities who
                        are engaged in agriculture and allied sectors and who are particularly working with FPOs. We
                        wish to transfer our knowledge to Farmers, NGOs, Entrepreneurs as well as students who are
                        seeking career opportunities in this sector and who want to endeavor in agribusiness
                        initiatives. So we provide business Development consultancy service as well as conduct online and offline courses for
                        knowledge sharing.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Does this
                                platform also help for Job Placement? </b></span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We are linked to many organizations and currently working with many FPOs as a facilitating
                        agency under the NABARD, SFAC and NAFED projects, so we can definitely link the job seekers to
                        the respective vacancies in the Development Sector.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>What kind of business development facilities are provided by this portal ?</b></span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We facilitate FPOs and entrepreneurs to identify business ideas through market analysis and support them to commence business operations. We also helping marketing and networking.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Who should
                                do our courses?</b>></span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Students of Agriculture and Allied Courses, Farmers, Member of Farmer Producer Organizations,
                        NGOs, Entrepreneurs and anyone interested to learn more about agri-business can do our courses.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>What type
                                of consultancy service is provided by this portal
                                ?</b>></span>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We work on live projects for formation of FPOs and are well equipped in resolving the issues
                        faced by FPOs throughout their lifecycle. So we can help other FPOs, CBBOs and FPO facilitators
                        in resolving their specific issues.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>What are
                                the benefits of these courses ? </b>></span>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Along with theoretical and technical knowledge, our diligently designed courses will build your
                        capacity to work or endeavor in the Rural Development Sector. If Members of Farmer Producer
                        Organizations (FPOs) complete these courses, they will be able make their organizations
                        sustainable in the long run and also can solve the current issues faced by their FPOs. The
                        modules are designed looking at the FPO lifecycle, so it covers all aspects and domains of FPO
                        management.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Can
                                somebody help me to decide which course I should do
                                ?</b>></span>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, just <a style="text-decoration: none;" href="https://forms.gle/LvBGAmuP3mGLQgE6A">click here</a>  to register yourself with your email ID or Phone number. You will get help
                        within 2 working days.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Can I
                                contact someone for help? </b>></span>
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes you can call on our number on 83296 94425 in working time and you will get complete
                        counselling and guidance or you can fill this form to get assistance.
                        <a href="https://forms.gle/9sdJxQ19vRhLbuNu5">Fill The Form</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>What is difference between FPO and FPC ? </b>></span>
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        FPO - Farmer Producer Organization are registered or non-registered institute or group of farmers working together for a common goal. When a FPO is legally registered, it is then termed as FPC - Farmer Producer Company.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Who can be a part of Producer Company? </b></span>
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Producer Companies (PCs) can be constituted by the Primary Producers like Farmers (Land holders as well as tenants), Artisans, Milk Producers, Honey Cultivators, Silk Cultivators etc. The FPCs have to be registered as a Private Company under the Companies Act with minimum 10 people as its members.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>What type of Consultancy Services are provided by all about FPO? </b></span>
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We provide 360 degree support to the FPOs and CBBOs (FPO Facilitators), FPO Promoters, Government Officials and Corporates. Our services include Baseline Survey, FPO Registration, Market Linkage, Equity Grant Proposal Preparation, Business Plan Development and Execution, Audit, Licenses, Scheme Linkage, Financial Sourcing, Convergence.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color: green;"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Who can join our family?</b></span>
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        FPOs/FPCs, Agri Experts, Institutional buyers, Consumers, Trainers, Service Providers/Consultant, CBBO/RI/POPI, Fellowship Seekers & Providers.
                    </div>
                </div>
            </div>

        </div>
    </div>

<br>
<br>

<!-- FOOTER -->
<?php include './partials/footer.php';  ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>
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
    <title>All About FPO | Home</title>
    <style>
        #mainheading {

            background-color: #19253F;
            padding-top: 200px;
            padding-bottom: 200px;

            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)), url('images/sd.jpg');
            background-size: cover;
            background-repeat: no-repeat;


        }

        #secondBackgroundImage {
            background-image: linear-gradient(rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0)), url('images/background 2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        #allowUsToAssistYou_Img {
            padding-bottom: 20px;
            width: 80%;

        }

        #allowUsToAssistYou_Text {
            color: white;
            text-align: justify;
            padding-top: 30px;
            font-weight: 700;
        }

        #news {
            background-color: #19253F;
            color: white;
        }

        @media all and (max-width: 800px) {
            #allowUsToAssistYou_Img {
                padding-bottom: 20px;
                width: 100%;
            }


        }

        .owl-theme div {
            cursor: pointer;
        }

        .heading {
            text-align: center;
            padding-top: 30px;
            /* margin-top: 30px; */
            font-family: calibri;
            font-weight: 700;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <!-- Nav Bar -->
    <?php include './partials/main_nav.php'; ?>


    <!-- Main Image And Name Of Website First View-->
    <div class="container-fluid" id="mainheading">
        <h2 style="text-align: center;color:white;font-size:300%" data-aos="fade-up" data-aos-duration="3000">
            ALL ABOUT FPO
        </h2>
        <h5 style="text-align: center;color:white;font-size:130%" data-aos="fade-up" data-aos-duration="3000">
            Nurturing Aspirations,
            Delivering Prosperity
        </h5>
        <div style="text-align: center;text-decoration: none;" data-aos="fade-up" data-aos-duration="3000">
            <a class="submenu" href="./faq.php">FAQs</a> &nbsp;&nbsp; <a class="submenu" href="./gallery.php">Gallery</a> &nbsp;&nbsp; <a class="submenu" href="./ourpartners.php">Our Partners</a>&nbsp;&nbsp; <a class="submenu" href="#footer">Contact Us</a>
        </div>
    </div>
    <!-- --------------------- -->

    <div id="news" class="container-fluid">
        <div class="row">
            <div class="col-sm-2 d-flex justify-content-center">
                <a href="https://rzp.io/l/dwk9ys42" class="btn btn-primary" style="margin: 5px;">Enroll Now </a>
            </div>
            <div class="col-sm-10" style="padding-top:10px;">
                <marquee>
                    National Level Certificate Program.
                </marquee>
            </div>
        </div>

    </div>


    <!-- --------------------- -->
    <!-- Lets Work Together-->
    <div class="container">
        <h2 class="heading" data-aos="fade-up">Let’s Work Together</h2>
        <p data-aos="fade-up" data-aos-duration="3000" style="text-align: justify;margin-top: 40px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:120%;">
            This is a shared platform for experts as well as knowledge seekers among rural communities who are engaged
            in
            agriculture and allied sectors and who are particularly working with Farmer Producer Organizations (FPOs).
            We
            wish to transfer our knowledge to Farmers, NGOs, Entrepreneurs as well as students who are seeking career
            opportunities in this sector and who want to endeavor in agribusiness initiatives. We provide 360 degree
            support
            to FPOs and CBBOs as well as conduct online and offline trainings oriented towards FPO Management.
        </p>
    </div>
    <!-- ------------------------------------------------------------------------ -->
    <!-- Join Our Family -->
    <div class="container-fluid" style="background-color: #F0F6FF;">
        <h2 class="heading" data-aos="fade-up">Join Our Family</h2>
        <br>


        <div class="owl-carousel owl-theme ">
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6'" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/fpo.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/Service Provider.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/mentor.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/institutional.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/cbbo.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/consumer.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/felloshipprovider.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/felloshipSeeker.jpg" class="img img-fluid">
            </div>
            <div onclick="location.href='https://forms.gle/324axCGHgyGLCZte6';" class="item d-flex justify-content-center">
                <img style="width: 80%;" src="./images/joinOurFamily/trainer.jpg" class="img img-fluid">
            </div>

        </div>
        <br>
        <br>
    </div>
    <!-- ------------------------------------------------------------------------ -->
    <!--  Allow Us To Assist You -->
    <div class="container-fluid" id="secondBackgroundImage">
        <h2 class="heading" data-aos="fade-up" style="color:white;">Allow us to assist you !</h2>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                    <img id="allowUsToAssistYou_Img" src="./images/home page design.png" class="img img-fluid">
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <p id="allowUsToAssistYou_Text">
                        Many Farmer Producer Organizations (FPOs) failed to perform well due to lack of facilitation and lack of practical knowledge of major important procedures such as Business Development. <br><br>
                        We are here to hold your hands and to share our acquired knowledge with you. <br><br>
                        We are the prominent organization in This Sector which is currently working for handholding of around 100 FPOs. <br> <br>
                        We are the only organization which is working with NABARD, SFAC, NAFED, NCDC, Govt. Departments as well as Corporates

                    </p>
                </div>
            </div>
        </div>


    </div>
    <!-- ------------------------------------------------------------------------ -->
    <!-- How Can We Help You  -->
    <div class="container-fluid" style="background-color: aliceblue;">
        <h2 class="heading" data-aos="fade-up">
            How Can We Help You
        </h2>

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-3 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="card" style="width: 18rem;margin-top: 10px;">
                    <img src="images/INDEX_IMG5.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" style="color: green;text-align:center">FPO Registrations
                            <br><br>
                        </h5>
                        <p class="card-text" style="font-size: 100%;">
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Resource planning guidance. <br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Deciding Share Capital And Authorized capital. <br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Guidance on required documents. <br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Registration of FPO with ROC. <br>
                        </p>
                        <a href="./solutions_Fpo_Registrations.php" class="btn btn-success mt-auto">Check Now</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="card" style="width: 18rem;margin-top: 10px;">
                    <img src="images/INDEX_IMG6.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" style="color: green;text-align: center;">Training & Capacity Building
                        </h5>
                        <p class="card-text" style="font-size: 100%;">
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Certified Courses <br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Free Content<br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Onsite Workshops<br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Webinars<br>
                        </p>
                        <a href="./solutions_Training.php" class="btn btn-success mt-auto">Check Now</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="card" style="width: 18rem;margin-top: 10px;">
                    <img src="images/INDEX_IMG8.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" style="color: green;text-align:center;">Post Registration Solutions</h5>
                        <p class="card-text" style="font-size: 100%;">
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Fund raising & Govt scheme linkages <br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Auditing & Legal compliances<br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Licenses<br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> HR and Governance <br>
                            <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Branding & Marketing <br>
                        </p>
                        <a href="./solutions_Post_Registrations.php" class="btn btn-success mt-auto">Check Now</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="card" style="width: 18rem;margin-top: 10px;">
                    <img src="images/INDEX_IMG7.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" style="color: green;text-align:center;">Business Development <br><br></h5>
                        <p class="card-text" style="font-size: 100%;">
                        <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Market analysis <br>
                        <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Value chain analysis<br>
                        <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Commencement of small Business Activities <br>
                        <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i>  Business Idea Identification <br>
                        <i style="color: #82FB1D;" class="fa fa-check" aria-hidden="true"></i> Business plan development <br>
                        </p>
                        <a href="./solutions_Business_Development.php" class="btn btn-success mt-auto">Check Now</a>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
    </div>
    <!-- ------------------------------------------------------------------------ -->
    <!-- Our team -->
    <div class="container-fluid">
        <div class="container">
            <h2 class="heading" style="text-align: center;margin: 30px;" data-aos="fade-up">Our Team</h2>
            <p style="text-align: center;color: gray;" data-aos="fade-up">We are a team of highly motivated, experienced
                and
                educated professionals who carry with them a vast experience in FPO Management. Our passion to work for
                the
                communities sets us apart from our competition.</p>
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/amitNaphade.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Amit Naphade</h5>
                                    <p class="card-text" style="color: gray;">CEO</p>
                                    <p class="card-text" style="font-size:x-small;text-align:justify;">An alumnus of Tata Institute of Social Sciences (TISS), Mr Amit has more than 15 years of experience in rural development sector. He has facilitated about 100 FPOs till date and carries a grassroot level experience about all aspects of FPO Management. He is also working as a Joint Secretary of Lewa Chamber of Commerce, Industries and Agriculture and have contributed as a Managing Committee Member of TISS Alums Association, Mumbai. He has also performed as a Founder Director of Maha Farmers Producer Company. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/Ashish Naphade Sir final.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Ashish Naphade </h5>
                                    <p class="card-text" style="color: gray;">Program Director</p>
                                    <p class="card-text" style="font-size:x-small;text-align:justify;">Mr Ashish has 10+ years of experience in Project Management and administration in Community Development projects. He has completed his PGDM in marketing and has got expertise in Agri Value Chain Development, Agribusiness Development through FPOs. He has supported many FPOs till date and have established them into a sustainable business entity. He has completed international courses on Community Driven Development and Strengthening Micro Finance Institutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/Ravi PAtil sir.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Ravi Patil</h5>
                                    <p class="card-text" style="font-size:small;text-align:justify;">More than 20 years of experience in agriculture initiatives, Mr Ravi Patil is currently working with more than 40 FPOs in Maharashtra and Madhya Pradesh supported by SFAC, NABARD. He has vast exposure in capacity building, market linkage, market study, credit linkage. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/sintu_chakma.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Sintu Chakma </h5>
                                    <!-- <p class="card-text" style="color: gray;">Program Director</p> -->
                                    <p class="card-text" style="font-size:x-small;text-align:justify;">A Post Graduate in Social Work from
                                        Tata
                                        Institute of Social
                                        Science (TISS), Mumbai Mr Sintu has worked as a Prime Ministers Rural
                                        Development
                                        Fellow has (PMRDF) from 2014 to 2017 in Tripura. He has worked on community
                                        development works convergence of schemes for betterment of some of the most
                                        vulnerable communities. He has also worked with NACOF -National Federation of
                                        Farmers Procurement, Processing and Retailing Cooperatives of India Ltd.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/sumit_mandale.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Sumit Mandale</h5>
                                    <p class="card-text" style="font-size: small;text-align:justify;">A Post Graduate from Indian
                                        Institute
                                        of Forest Management (IIFM),
                                        Sumit has trained and placed around 2500 rural youth through their capacity
                                        building
                                        and skill upgradations. He has worked for government, private as well as civil
                                        society organizations and carries with him a six-year long experience of working
                                        on
                                        rural development projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/Suman Kumar.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Suman Kumar </h5>
                                    <p class="card-text" style="font-size: small;text-align:justify;">After completing his Masters in Social Entrepreneurship from Tata institute of Social Sciences, Mr Suman has worked on business development for more than 25 FPOs in Maharashtra. He has also got expertise in market linkage and finance. He has an overall experience of 6 years in facilitating FPOs. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/saurav laskar final.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Saurav Laskar</h5>
                                    <p class="card-text" style="text-align:justify;font-size: 70%;">Mr Saurav has got a Masters Degree in Social Entrepreneurship from Karnataka University. He has more than 6 years of experience with some of the reputed organizations like the Aga Khan Foundation. His sphere of work covers tribal entrepreneurship development, business development, business planning for the entrepreneurs, establishment of Forward and Backward Linkages, training and mentoring support for farmer groups.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/Sangram Deshmukh.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Sangram Deshmukh </h5>
                                    <p class="card-text" style="font-size: x-small;text-align:justify;">Since his Post Graduation from Xavier Institute of Social Service, Ranchi with specialization in Rural Management, Sangram has been spending time working with various remote communities of Maharashtra, Jharkhand, Himachal Pradesh and Rajasthan. He believes in the cyclic process of learning, unlearning and relearning to keep pace with rapidly changing world.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/Prafulla Bhopale.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Prafull Bhopale</h5>
                                    <p class="card-text" style="font-size: small;text-align:justify;">Master in Social Works from Pune University, Mr Prafulla has ten years of experience in the agribusiness, literacy, capacity building and urban community mobilization. He has registered and facilitated around 16 FPOs in Maharashtra and Madhya Pradesh and carries expertise in the procurement and business activities. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/Sudarshan Pawar.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Sudarshan Pawar </h5>
                                    <p class="card-text" style="font-size: x-small;text-align:justify;">“Vidyaratna” & “Samajratna” awardee, Mr Sudarshan Pawar has 10 years of experience in Development Sector. He has worked with NGOs, Government as well as Semi-Government firms. As a Chief Minister Rural Development Fellow (CMRDF) he has worked on development of villages in Wardha District of Maharashtra under the Maharashtra Village Social Transformation Mission.</p>
                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/kundan rane.jfif" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Kundan Rane</h5>
                                    <p class="card-text" style="font-size: small;text-align:justify;">Mr Kundan is currently working with more than 40 FPOs in Maharashtra and Madhya Pradesh supported by SFAC, NABARD, Corporates. He has hands on experience in FPO formation, resource mobilization, membership drives, market study, baseline surveys and business development. He has linked many FPOs to online trade platforms like NCDEX. </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 d-flex justify-content-center" data-aos="zoom-in-down">
                    <div class="card mb-3" style="max-width: 540px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="images/ourTeam/Vinod Nimkale.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: green;">Mr. Vinod Nimkale</h5>
                                    <p class="card-text" style="font-size: x-small;text-align:justify;">A Post Graduate in Agriculture Engineering, Mr Vinod is currently working with FPOs associated with Jaivik Sheti (Organic Farming) Mission in Buldhana District. He has around 10 years of experience in Watershed, micro-irrigation, green house technology and allied agriculture initiatives. He has been working for production, Certification and Marketing of Organic Produce for last several years. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>



        </div>
    </div>


    <br>
    <br>





    <!-- FOOTER -->
    <?php include './partials/footer.php';  ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Join Our Family Code
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            stagePadding: 60,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>


</body>


</html>
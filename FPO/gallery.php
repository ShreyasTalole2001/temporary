<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- AOS -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <!-- icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main_nav_footer.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!-- Font families -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600|Roboto:100,400" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Pragati+Narrow:wght@700&display=swap" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <style>
    body{
      background-color: #F5F5F5;
    }
    #mainHead {
      padding-top: 100px;
      padding-bottom: 100px;

    }
    #mainHead h1{
      font-size: 400%;
    }

    #demo {
      height: 100%;
      position: relative;
      overflow: hidden;
    }


    .green {
      background-color: #6fb936;
    }

    .thumb {
      margin-bottom: 30px;
    }

    .page-top {
      margin-top: 85px;
    }


    img.zoom {
      width: 100%;
      height: 200px;
      border-radius: 5px;
      object-fit: cover;
      -webkit-transition: all .3s ease-in-out;
      -moz-transition: all .3s ease-in-out;
      -o-transition: all .3s ease-in-out;
      -ms-transition: all .3s ease-in-out;
    }


    .transition {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      transform: scale(1.2);
    }

    .modal-header {

      border-bottom: none;
    }

    .modal-title {
      color: #000;
    }

    .modal-footer {
      display: none;
    }
  </style>
  <title>All About FPO | Gallery</title>
</head>

<body>
  <!-- Nav Bar -->
  <?php include './partials/main_nav.php'; ?>



  <div class="container" id="mainHead" data-aos="fade-up" data-aos-duration="3000">
    <h1 style="text-align: center;">Gallery</h1>
  </div>

  <div class="container" data-aos="fade-up" data-aos-duration="3000">
    <div class="row">


    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/8.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/8.jpg" class="zoom img-fluid " alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/9.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/9.jpg" class="zoom img-fluid " alt="">
        </a>
    </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/1.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/1.jpg" class="zoom img-fluid " alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/6.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/6.jpg" class="zoom img-fluid" alt="">
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/2.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/2.jpg" class="zoom img-fluid " alt="">
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/3.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/3.jpg" class="zoom img-fluid " alt="">
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/4.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/4.jpg" class="zoom img-fluid " alt="">
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/5.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/5.jpg" class="zoom img-fluid " alt="">
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="./images/gallery/7.jpg" class="fancybox" rel="ligthbox">
          <img src="./images/gallery/7.jpg" class="zoom img-fluid " alt="">
        </a>
      </div>

      



    </div>
  </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  <script>
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function() {

        $(this).addClass('transition');
      }, function() {

        $(this).removeClass('transition');
      });
    });
  </script>
  <script>
        AOS.init();
    </script>
 
  <!-- FOOTER -->
  <?php include './partials/footer.php';  ?>

</body>

</html>
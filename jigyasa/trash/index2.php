<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
      /*QUICK LINKS*/
      #quicklink_wrapper{
         padding:5px;
         background-color: #F1F7FD;

      }
      #quicklink_wrapper a{
        text-decoration: none;
        /*background-color: #01E8C4;*/
        padding: 5px;
        color: white;
         font-family: Arial, Helvetica, sans-serif;
      }
       @media all and (max-width: 800px) {
        #quicklink_wrapper{
          display: none;
        }
       }








/*----------------------------------------------------------------------------*/
      /* Main Menu Bar */
      .menu_wrapper{
     
        font-family: Arial, Helvetica, sans-serif;
        background-color: white;
      
      
      }
      .nav-link {
       color: black !important;
       margin-right: 20px;
       font-size: 120%;
      }

/*----------------------------------------------------------------------------*/
      /* Main Image And Text desktop view*/
      .main_image_wrapper{
        display: flex;
        
        flex-flow: row-reverse wrap; 
      }
  
      
      #clm1 h1{
        font-weight: 700;
        margin-top: 100px;



      }
      #clm2 img{
       /* margin-top: 100px;*/
      }
      @media all and (max-width: 800px) {
       #clm1 h1{
        font-weight: 700;
        margin-top: 0px;

      }
    }
      
     
      
 /*----------------------------------------------------------------------------*/  

            
        
       

        /* Footer */
        #footer{
          background-color: black;
          height: 100px;
        }
/*----------------------------------------------------------------------------*/
      /* Course Cards */
      .card{
          box-shadow:0 0 10px #9ecaed;
      }
      .card h5{
        font-weight: 700;
      }
      .course_card_wrapper{
        background-color: #F1F7FD;
       

        

      }
      .course_card_wrapper h2{
       
        font-weight: 500;
        text-align: center;
         padding:0px 20px;
         padding-top: 50px; 
      }
      .course_card_wrapper p{
        font-weight: 500;
        text-align: center;
      }
/*----------------------------------------------------------------------------*/
      /* Frequently Asked Questions */
      .Frequently_Asked_Questions_wrapper{
        background-color: #F1F7FD;
        padding: 20px;
      }
      .Frequently_Asked_Questions_wrapper h2{
        padding-top: 50px;
        font-weight: 500;
        text-align: center;

      }
      .Frequently_Asked_Questions_wrapper p{
        font-weight: 500;
        text-align: center;

      }

      .collapse_card{
        background-color: white;
        width: 70%;
        margin: 0px auto;
        border-radius: 20px;
        
      }
      .collapse_card p{
        font-weight: 700;
        text-align: left;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      @media all and (max-width: 800px) {
      .collapse_card{
        background-color: white;
        width: 100%;
        margin: 0px auto;
        border-radius: 20px;

      }
      .collapse_card p{
        font-weight: 700;
        text-align: left;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

      }
      .Frequently_Asked_Questions_wrapper h2{
        padding-top: 0px;
        font-weight: 500;
        text-align: center;

      }

            
        }
  /*----------------------------------------------------------------------------*/    





    </style>

    <title>Jigyasa Home</title>
  </head>
  <body>

    <!-- Quick links -->
    <div class="container_fluid " id="quicklink_wrapper">
      
    
    <div class="container col-12 col-md-10" >
     <a style="color: gray;">Quick Switch</a>
     <a href="" class="btn btn-primary btnticker btn-sm" target="_blank">Robotics</a>
     <a href="" class="btn btn-info btn-sm" target="_blank">Robotics</a>
     <a href="" class="btn btn-success btn-sm" target="_blank">Robotics</a>
     <a href="" class="btn btn-primary btn-sm" target="_blank">Robotics</a>
     <a href=""  class="btn btn-dark btn-sm" target="_blank">Robotics</a>


      
    </div>
    </div>











    <!-- --------------------------------------------- -->
    <! Main Menu Bar !>
          <div  class="container_fluid menu_wrapper sticky-top">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light  ">
        <a class="navbar-brand" href="#"><span style="color: blue;font-size: 120%;">JIGYASA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item" style="margin-right: 5px">
              <form method="get" action="login.php">
                  <button type="submit" class="btn btn-primary" ><b><i class="fa fa-lock" aria-hidden="true"></i> Account</b></button>
              </form>
            </li>
          
          
          </ul>
        </div>
      </nav>

      </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------- -->

    <! Main Image And Text desktop !>

<div class="container main_image_wrapper" id="main_image_desktop">
  <div class="row flex-column-reverse flex-lg-row">
    <div class="col-sm w3-container w3-animate-bottom" id="clm1">
      <h1>Be a Robo <span style="color: #0078FF;font-size: 120%;">Master</span> </h1>
          <br>
        <ul>
          <li>11 Practical Robo Projects.</li>
          
          <li>16 Exclusive Modules Designed by Experts</li>
          
          <li>12 Quality Assesments.</li>

          <li>Designed For Easy Learning.</li>

          <li>Query support within 24 hours.</li>

          <li>Easily Affordable.</li>
        </ul>

        <br>

       <form class="form-inline">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Know More</button>
        </form>
    

    </div>
    <div class="col-sm w3-animate-zoom" id="clm2">
      <img src="images/38.png" class="img-fluid mx-auto" alt="Responsive image">

    </div>
  </div>
</div>


<!--  ---------------------------------------------------------------------------------------- -->

    <! Course Cards !>

   <div class="container_fluid course_card_wrapper">
    <div class="container" >

      <div data-aos="zoom-in">
        <h2>Most Enrolled Courses</h2>
        <p>The courses that are loved by learners the most.</p>
      </div>

        <div class="container row card-deck" style="margin-top: 50px;">   <! Row 1 !>
          
            <div class="col-md">
              <div class="card" style="width: 20rem;text-align: center;" >
                <img src='images/vedicMath.png' alt='...' class='img-fluid'>
                <div class="card-body">
                  <h5 class="card-title">ROBOTICS</h5>
                  <div class="d-flex flex-row">
                    <div class="p-2">
                    <i class="fa fa-book" style='color: #009CF9;font-size: 140%;'></i>
                     Modules
                  </div>
                    <div class="p-2">
                      <i class="fa fa-certificate" style='color: #009CF9;font-size: 140%;'></i>
                    Certificate
                  </div>
                    <div class="p-2">
                      <i class="fa fa-question-circle" style='color: #009CF9;font-size: 140%;'></i>
                    Assessment
                  </div>
                  </div>
                    <br>
                  <a href="#" class="btn btn-primary btn-lg btn-block"><i class="fa fa-user-plus"></i> Enroll Now</a>
                </div>
              </div>
            </div>

                        <div class="col-md">
              <div class="card" style="width: 20rem;text-align: center;" >
                <img src='images/vedicMath.png' alt='...' class='img-fluid'>
                <div class="card-body">
                  <h5 class="card-title">ROBOTICS</h5>
                  <div class="d-flex flex-row">
                    <div class="p-2">
                    <i class="fa fa-book" style='color: #009CF9;font-size: 140%;'></i>
                     Modules
                  </div>
                    <div class="p-2">
                      <i class="fa fa-certificate" style='color: #009CF9;font-size: 140%;'></i>
                    Certificate
                  </div>
                    <div class="p-2">
                      <i class="fa fa-question-circle" style='color: #009CF9;font-size: 140%;'></i>
                    Assessment
                  </div>
                  </div>
                    <br>
                  <a href="#" class="btn btn-primary btn-lg btn-block"><i class="fa fa-user-plus"></i> Enroll Now</a>
                </div>
              </div>
            </div>

            <div class="col-md ">
              <div class="card" style="width: 20rem;text-align: center;" >
                <img src='images/vedicMath.png' alt='...' class='img-fluid'>
                <div class="card-body">
                  <h5 class="card-title">ROBOTICS</h5>
                  <div class="d-flex flex-row">
                    <div class="p-2">
                    <i class="fa fa-book" style='color: #009CF9;font-size: 140%;'></i>
                     Modules
                  </div>
                    <div class="p-2">
                      <i class="fa fa-certificate" style='color: #009CF9;font-size: 140%;'></i>
                    Certificate
                  </div>
                    <div class="p-2">
                      <i class="fa fa-question-circle" style='color: #009CF9;font-size: 140%;'></i>
                    Assessment
                  </div>
                  </div>
                    <br>
                  <a href="#" class="btn btn-primary btn-lg btn-block"><i class="fa fa-user-plus"></i> Enroll Now</a>
                </div>
              </div>
            </div>

           
          </div>
        </div>     
    </div>
   </div>



  
<!-- -------------------------------------------------------------------------------------------- -->


   <! Frequently Asked Questions !>
   <div class="container_fluid Frequently_Asked_Questions_wrapper">

    <div data-aos="zoom-in">
        <h2 >Frequently Asked Questions</h2>
        <p>or all those little doubts on your mind.</p>
    </div>

    <div class="container">
    
    <div id="accordion">
      <div data-toggle="collapse" data-target="#demo1" class="collapse_card" data-aos="flip-left">
        <p>1) What is your name?</p>
      </div>

      <div id="demo1" class="collapse collapse_card">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

      <div data-toggle="collapse" data-target="#demo2" class="collapse_card" data-aos="flip-right">
        <p>2) What is your name?</p>
      </div>

      <div id="demo2" class="collapse collapse_card">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>


      <div data-toggle="collapse" data-target="#demo3" class="collapse_card" data-aos="flip-left">
        <p>3) What is your name?</p>
      </div>

      <div id="demo3" class="collapse collapse_card">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

    </div>

    </div>

   </div>





<!-- ---------------------------------------------------------------------------------------- -->







        <! Footer !>

        <div class="container_fluid footer_wrapper w3-animate-right" id="footer">
          <div>
            
          </div>
          
        </div>

  


  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="jq/jquery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>

   
  </body>
</html>
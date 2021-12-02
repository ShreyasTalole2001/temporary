 <?php 

session_start();
include 'database.php';


$FirstName = mysqli_real_escape_string($conn,$_POST['FirstName']);
$LastName = mysqli_real_escape_string($conn,$_POST['LastName']);
$MobileNo = mysqli_real_escape_string($conn,$_POST['MobileNo']);
$Email = mysqli_real_escape_string($conn,$_POST['Email']);
$Password = mysqli_real_escape_string($conn,$_POST['Password']);
$PasswordC = mysqli_real_escape_string($conn,$_POST['PasswordC']);
$error="";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $query="SELECT * FROM registration WHERE Email='$Email' OR MobileNo='$MobileNo' ";
   if ($result=mysqli_query($conn,$query)) {
      $rowcount=mysqli_num_rows($result);

        if ($rowcount>0) {
        $error="you have already signup";
         
       }
       elseif ($Password!=$PasswordC) {
        $error="password dosint match";
       }
       else{
        $query = "INSERT INTO registration(FirstName, LastName, MobileNo, Email, Password, PasswordC) VALUES('$FirstName', '$LastName' , '$MobileNo', '$Email', '$Password' , '$PasswordC') ";
       mysqli_query($conn,$query);

       $query = "INSERT INTO userinfo(FirstName, LastName, MobileNo, Email) VALUES('$FirstName', '$LastName' , '$MobileNo', '$Email') ";
       mysqli_query($conn,$query);

       $_SESSION['Email']=$_POST['Email'];
       echo "success";
       }

     
   }


}
print($error);
print($_SESSION['Email'])







// print($FirstName);
// print($LastName);
// print($MobileNo);
// print($Email);
// print($Password);
// print($PasswordC);


?>

<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
        margin: 0px;
        padding: 0px;
        background-color: #F1F7FD;
      }
      /* Registration form */
      #register_wrapper{  
        margin-top: 50px;
        width: 80%;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      @media all and (max-width: 800px) {
            #clm1 {display: none;}
            #clm2 {display: block;}
            #clm2 {
              border: 1px solid green;
              background-color: orange;
              
            }
             #clm2 #submitbtn{
              margin-top: 20px;
             }

            
       }
      /* clm1 */
      #clm1{
        /*border: 1px solid red;*/
        height: 500px;
        background-color: orange;
      }
      #clm2{
        /*border: 1px solid red;*/
        
        border-left: 1px solid green;

      }
      #clm2 h3{
        color: green;
        font-weight: 700;
        text-align: center;
        padding: 10px;
        font-family: Arial, Helvetica, sans-serif;
      }
      #clm2 p{
        color: green;
        font-weight: 700;
        text-align: center;

      }
      #error{
        color: red;
      }





    </style>

    <title>Register</title>
  </head>
  <body>
    <div class="container">
    

        <div class="container" id="register_wrapper" data-aos="zoom-in">
          <div class="row">
            <div class="col-md-7" id="clm1" data-aos="fade-right">
              <img src="images/registration.png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-5" id="clm2" data-aos="fade-left">

              <div>
                <h3>Welcome To Jigyasa</h3>
                <p>Register Now!</p>
              </div>

              <div>
                <form method="post">

                  <div class="form-group">
                    <input type="text" class="form-control" id="FirstName" placeholder="First Name" name="FirstName" required="" >
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="LastName" placeholder="Last Name" name="LastName" required="">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="MobileNo" placeholder="Mobile No" name="MobileNo" required="">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="MobileNo" placeholder="Password" name="Password" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="MobileNo" placeholder="PasswordC" name="PasswordC" required="">
                  </div>
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width: 100%;" id="submitbtn" type="submit" class="btn btn-primary" value="REGISTER">
              
                  </div>
                 


                </form> 
                <div id="error">
                  <?php echo $error; ?>
                </div>




              </div>
              
            </div>
          </div>
        </div>
     
    </div>
    
<br>
<br>
<br>
<br>











    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
   </script>
    
    












  </body>
</html>
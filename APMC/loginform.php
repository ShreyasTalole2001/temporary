<?php


$servername="localhost";
$username="root";
$password="";
$db="apmc";

$conn=mysqli_connect($servername,$username,$password,$db);

echo mysqli_connect_error();

$emails=mysqli_real_escape_string($conn,$_POST['email'])  ;
$passwords=mysqli_real_escape_string($conn, $_POST['password']) ;
$error="";

$query="SELECT * FROM tablefirst WHERE email='$emails' AND password='$passwords'";

  if ($result=mysqli_query($conn,$query)) {

    $row=mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

        if($count == 1) {
             
             
              header('Location: newpage.php');
          }else {
             $error .= "Your Email or Password is invalid";
          }
       } 
  

?>


<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login form</title>
    <style type="text/css">
    	#loginform{
    		width: 300px;
    		
    		margin-top: 100px;
    		background-color:#F7F7F9;
    		padding: 20px;
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    	}
	body  {
         background-image: url("images/42.jpg");

     } 
     #btncontainer{
     	text-align: center;
     }
     .btn{
     	width: 120px;
     }

     #error{
        margin-top: 10px;
     }
  
    </style>
  </head>
  <body>
<div id="loginform" class="container">
		<form method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"  autofocus>
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input name="password" type="password" class="form-control" id="password" placeholder="Password" >
		  </div>
			  <div id="btncontainer">
			  <button id="submitbtn" type="submit" class="btn btn-primary">Submit</button>
			  </div>
		</form>

        <div id="error">
            <?php 

            if ($error!="") {
                echo "$error";
            }



              ?>
        
        </div>
</div>
   

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jq/jquery.js"></script>
    <script type="text/javascript">
    
     $("form").submit(function(e){
        e.preventDefault();
        var error="";


        if ($('#password').val()=="") {

            error +="<p> password is required </p>";
        }

        if ($('#email').val()=="") {

            error +="<p> email is required </p>";
        }

       

        if (error != "") {

             $("#error").html('<div class="alert alert-danger" role="alert"> '+ error + '</div>');
        }else{

            $("form").unbind("submit").submit();
        }

    

      });

     window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 



     </script>






  </body>







</html>





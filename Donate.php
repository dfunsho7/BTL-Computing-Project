<?php

include('dbconnection.php');
session_start();
error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="btl.css">
    <link rel="stylesheet" href="animate.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Blades Take Lives</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #A20F39;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  position: fixed;
  bottom: 1px;
  right: 25px;
  width: 150px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}
input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
   
}
/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
}
</style>
  </head>
  <body>

  <!--NavBar Section Start-->
    <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark"  id="nav">
            <a class="navbar-brand abc text-white" href="home.php"> <img src="#" alt="">Blades Take Lives </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                  
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                          <a class="nav-link abc text-white" href="home.php#abt">ABOUT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc text-white" href="home.php#stories">STORIES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc text-white" href="login.php">FUNDRAISE</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc text-white" href="donate.php">DONATE</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc text-white" href="contactus.php">CONTACT</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php" class="abc"><i class="fas fa-sign-in-alt abc"></i>&nbsp;LOGIN</a></li>&nbsp;&nbsp;&nbsp;
                        <li><a href="signup.php" class="abc"><i class="fas fa-user-plus abc"></i>&nbsp;REGISTER</a></li>
                    </ul>
                </div>
        </nav>           
    </div>
  <!--NavBar Section End-->


<!--Victims Card Section Start-->
<div class="containter-fluid bg pt-5 mt-5">
  <div class="container">
  <h5 class="text-danger text-center pt-4 pb-4">Thousands are crowdfunding for blade victims causes. Support a fundraiser today!</h5>
    
        <div class="row">
        <?php
                    $query = "SELECT * FROM stories";
				          	$resultset = mysqli_query($con, $query);          
                    while( $record = mysqli_fetch_assoc($resultset) ) {              

            ?>

            <div class="col-sm-4 mb-5">
                    <div class="card bg" style="width: 16rem;">
                            <img src="<?php echo $record['image']; ?>" alt="John" style="width:100%">
                            <p class="title mt-2 pr-1 pl-1"><?php echo $record['title']; ?></p>
                            <a href="victim.php?id=<?php echo $record['id']; ?>" class="ml-auto mr-auto" target="_blank"><button type="button" class="btn btn-outline-dark mb-4">Read Full Story</button></a>
                            <h4 class="text-center"><?php echo $record['requiredamt']; ?></h4>
                            <div>
                                <h6 class="text-center text-danger mt-2">Take Initiative To Raise Funds</h6>
                            </div>
                            <div class="social text-center mt-1 mb-1">
                              <hr>
                              <h6>Share On</h6>
                              <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                              <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                              <a href="https://plus.google.com/" target="_blank"><i class="fab fa-google-plus-square fa-2x"></i></a>
                              <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                            </div>
                    </div>
            </div>
            <?php } ?>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
                                

        </div>
    </div>
  </div>

<!--Victim Card Section End-->    
    
<!--Footer Social Icons Section Start-->
    <div class="container-fluid foot1">
            <div class="container">
              <div class="row">
                <div class="col-sm-4">
                    <h6 class="text-white mt-3 footicons  pt-3 pb-3">SiteMap</h6><hr>
                        <ul class="list-unstyled">
                            <li><a href="home.php" class="text-white">Home</a></li>
                            <li><a href="home.php#abt" class="text-white">About Us</a></li>
                            <li><a href="home.php#stories" class="text-white">Stories</a></li>
                            <li><a href="login.php" class="text-white">Fundraise</a></li>
                            <li><a href="contactus.php" class="text-white">Contact Us</a></li>
                        </ul>
                </div>
                <div class="col-sm-8">
                 <div class="text-center pt-3 pb-3 footicons">
                    <a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="auto" target="_blank" title="Follow us on Facebook"><i class="fab fa-facebook-f fa-2x"></i></a>
                    <a href="https://twitter.com/" data-toggle="tooltip" data-placement="auto" target="_blank" title="Follow us on Twitter"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://plus.google.com/" data-toggle="tooltip" data-placement="auto" target="_blank" title="Follow us on GooglePlus"><i class="fab fa-google-plus-g fa-2x"></i></a>
                    <a href="https://www.instagram.com/?hl=en" data-toggle="tooltip" data-placement="auto" target="_blank" title="Follow us on Instagram"><i class="fab fa-instagram insta fa-2x"></i></a>
                 </div>
                 <div class="text-white mt-4">
                        <h5>Get In Touch</h5><br>
                        <p> Blades Take Lives Fundraising Org, <br>
                                    Sainsbury Building
                                    26 Sussex Pl, Marylebone, London, UK. <br> <br>
       Phone: +44 12345 67890 <br>
					Email: support@btl.com
                        
                        </p>
                 </div>    
                </div>
              </div>
           </div>          
         </div>
<!--Footer Social Icons Section End-->
    
<!-- Footer Image Section Start-->
      <div class="container-fluid foot text-white" style="border-top: 1px solid white;">
            <div class="container">  
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center mt-2"> 
                  <p> Project Designed By: Daniel Ogunseye </p>  
                </div> 
                <div class="col-md-4"></div>    
              </div>    
            </div>  
        </div>
<!--Footer Image Section End-->
    
  </body>
</html>

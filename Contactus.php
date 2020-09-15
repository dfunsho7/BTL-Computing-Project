<?php
session_start();
include("dbconnection.php");
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
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Blades Take Lives</title>
  </head>
  <body>
    <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark"  id="nav">
            <a class="navbar-brand abc" href="home.php">Blades Take Lives </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                  
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                          <a class="nav-link abc" href="home.php#abt">ABOUT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc" href="home.php#stories">STORIES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc" href="login.php">FUNDRAISE</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc" href="donate.php">DONATE</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc" href="contactus.php">CONTACT</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php" class="abc"><i class="fas fa-sign-in-alt abc"></i>&nbsp;LOGIN</a></li>&nbsp;&nbsp;&nbsp;
                        <li><a href="signup.php" class="abc"><i class="fas fa-user-plus abc"></i>&nbsp;REGISTER</a></li>
                    </ul>
                </div>
        </nav>           
    </div>

    
    <div class="container mt-5 pt-5 mb-5 pb-5">
        <div class="box">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h4 class="intro-text text-center text-danger"><strong>Welcome To Blades Take Lives Fundraising Organisation</strong></h4>
                    <hr>
                </div>
                <div class="col-md-8 mqmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.284645560155!2d-0.16319878469086807!3d51.526338817139994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ac63b8f0aed%3A0x968eff4c5c8e5bc2!2sSainsbury%20Building%2C%2026%20Sussex%20Pl%2C%20Marylebone%2C%20London%2C%20UK!5e0!3m2!1sen!2sqa!4v1576606522301!5m2!1sen!2sqa" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                </div>
                <div class="col-md-4">
                        <h5> <strong> Get In Touch</strong></h5><br>
                        <p> <strong>Blades Take Lives Fundraising Org</strong>, <br>
                                    Sainsbury Building
                                    26 Sussex Pl, Marylebone, London, UK. <br> <br>
           Phone: +44 12345 67890 <br>
Email: support@btl.com
                        
                        </p>
                </div>    
            </div>
        </div>
    </div>

    
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

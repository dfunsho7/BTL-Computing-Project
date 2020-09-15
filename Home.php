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
    <link rel="stylesheet" href="animate.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Blades Take Lives</title>
  </head>
  <body>

  <!--NavBar Section Start-->
    <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-light fixed-top"  id="nav">
            <a class="navbar-brand abc text-white" href="#"> Blades Take Lives </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                  
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                          <a class="nav-link abc text-white" href="#abt">ABOUT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link abc text-white" href="#stories">STORIES</a>
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

  <!--Header Section Start-->
    <div class="header">
      <img src="img/dbg.jpg" alt="" class="d-block w-100">
      <div class="centered">Your change can make a change.
       <div class="cd">We make it easier</div>
        <a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4EH49AQURG5XG&source=url" target="blank"> <button class="btn">Start Raising Funds</button></a>
      </div>
      <div class="bottom-left">
        <marquee behavior="" direction="left">London is dealing with the rise in knife crimes.  Beloved families of victims left alone with deep sorrows.  This is our
            responsibility to help them...</marquee>
      </div>
    </div>
  <!--Header Section End-->


<!--About Us Section Start-->
<div class="container-fluid bg pt-5 pb-5">
  <div class="container" id="abt">
    <h1 class="text-center"><b>ABOUT US</b></h1>
    <p class="text-justify mt-3">"According to official statistics, 38 police forces out of the patchwork of 44 that police England and Wales
        reported a 7 per cent increase in knife crimes between 2017 and 2018. Last year in London alone,
        there were 132 murders — and 76 of those victims died from being stabbed."</p>
     <P>Blades Take Lives (BTL) is a Crowdfunding platform to help knife victims and to support their families.
        An initiative to help our friends wholeheartedly. BTL is a trusted around the world for its simple, reliable fundraising platform and
        makes it simple to launch and manage your campaign on the go. Harness the power of social media to spread your story and get more support.</p>
       


  </div>
</div>
<!--About Us Section End-->

<!--Method of Work Section Start-->
     <div class="container-fluid pb-5 pt-5">
            <div class="container">
                <h1 class="text-center mb-4 text-dark"><b>A FRIEND IN NEED</b></h1>
                <p class="text-center mb-5">Medical treatments are often expensive, and can exhaust your insurance and savings. With BTL Crowdfunding Group, you receive timely help with medical bills. Here's how:</p>
                <div class="row">
                    <div class="col-sm-4">
                            <div class="card" style="width: 15rem;">
                                <i class="fab fa-wpforms fa-6x text-center ta flipOutY"></i>                                    
                                    <div class="card-body">
                                      <h6 class="card-title text-center text-dark">SETUP A FUNDRAISER</h6>
                                     <small><p class="card-text text-success">Fill in your details about yourself and whom you are raising funds for.</p></small>
                                    </div>
                             </div>                
                    </div>
                    <div class="col-sm-4">
                            <div class="card" style="width: 15rem;">
                                <i class="fas fa-money-check-alt fa-6x text-center ta flipOutY"></i>                                
                                    <div class="card-body">
                                      <h6 class="card-title text-center text-dark">START CROWDFUNDING</h6>
                                    <small><p class="card-text text-success">Receive donations from family, friends and strangers across the world.</p></small>
                                    </div>
                             </div>                
                    </div>
                    <div class="col-sm-4">
                            <div class="card" style="width: 15rem;">
                                <i class="fas fa-gift fa-6x text-center ta flipOutY"></i>                                 
                                    <div class="card-body">
                                      <h6 class="card-title text-center text-dark">WITHDRAW FUNDS</h6>
                                    <small><p class="card-text text-success">Transfer funds to the hospitals or to your bank account whenever needed.</p></small>
                                    </div>
                             </div>                
                    </div>
                </div>
            </div>
        </div>
<!--Method of Work Section End-->

<!--Msg Section Start-->
        <div class="container-fluid prop mt-3" id="stories">
          <div class="container">
            <p class="tag">Hundreds are fundraising online on BTL for our current campaigns</p>
          </div>
        </div> 
<!--Msg Section End-->

<!--Victims Card Section Start-->
<div class="containter-fluid bg pt-5 pb-5">
  <div class="container">    
        <div class="row">
            <?php
                    $sql = "SELECT * FROM stories";
                    $resultset = mysqli_query($con, $sql);          
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
    

<?php
include("chat.php");
?>

  </body>
</html>

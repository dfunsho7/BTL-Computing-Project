Login.php

<?php
session_start();
include("dbconnection.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Login</title>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        $("#exampleModalCenter1").modal('show');
        });
    </script>

</head>
<body>
<style>
        .social-login{
            width:450px;
            margin:0 auto;
            margin-bottom: 14px;
        }
        .social-btn{
            font-weight: 100px;
            color:white;
            width:204px;
            font-size: 0.9rem;
        }
        .signup-btn{
            font-weight: 100px;
            color:white;
            width:130px;
            font-size: 0.9rem;
        }
        .facebook-btn{  background-color:#3C589C; }
        .google-btn{ background-color: #DF4B3B; }
        .but{border-radius: 25px;}
        .nc{background-color: #642848;}
        .fg{text-align: center;}
        .fg a{text-decoration: none; color:#642848}
        .complogo
        {
            background:url(newlogo.jpg) no-repeat center center;
            height:330px;
            width:300px;
            border-right: 1px solid lightgrey;
        }
        .form-control {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
            background-color: #eee;
            outline: none;
            }
</style>



<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
    Launch demo modal
</button>-->
 

  <!-- Modal -->
<div class="modal nc" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <small><p class="modal-title" id="exampleModalLongTitle">An initiative to help our friends</p></small>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mt-3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 complogo">
                </div>
                <div class="col-md-7">
                    <div>
                        <form action=" " method="post">
                            <div class="social-login">
                            <a href="https://www.facebook.com/" target="_blank"><button class="btn facebook-btn social-btn but mg" type="button"><span><i class="fab fa-facebook-f"></i> Facebook</span></button></a>
                            <a href="https://plus.google.com/" target="_blank"><button class="btn google-btn social-btn but" type="button"><span><i class="fab fa-google-plus-g"></i> Google</span> </button></a>
                            </div>
                            <p style="text-align:center"> or  </p>

                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required="" autofocus=""><br>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">                                            
                            <button class="btn btn-success btn-block but mt-4 mb-4" type="submit" name="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
                            <small><p  class="fg"><a href="forgetpwd.php">Forgot password?</a></p></small> 
                        </form>
<?php
    if(isset($_POST['email']))
    {
        $user_id = $_POST['user_id'];
        $email = $_POST['email'];
        $password =  $_POST['password'];


        $query = "SELECT * FROM users WHERE email='$email'";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);
        if($total>0)
        {
            $row=mysqli_fetch_array($data);
            $password_hash = $row['password'];
            if(password_verify($password,$password_hash))
            {
            $_SESSION["email"]="$email";
            $_SESSION["user_id"]="$user_id";
            if($_SESSION["email"]=='admin@btl.com'){
            echo "<script>window.location='admindashboard.php';</script>";
            }
            else{
                echo "<script>window.location='userdashboard.php';</script>";
            }  
            }
            else
            {
                echo "<script>alert('Sorry! You Entered Wrong EmailId or Password. Please Check & Try Again')</script>";
            }
        }
    }
?>           

                    </div>
                </div>
              </div>             
            </div>
            <div class="modal-footer mt-3">
                    <!-- <p>Don't have an account!</p>  -->
                   <small><p class="mt-3"> New to BTL? Sign up now, it's quick & free </p></small> 
                  <a href="signup.php"><button class="btn signup-btn btn-primary but" type="button"><i class="fas fa-user-plus"></i> Sign up</button></a>
            </div>
        </div>
        
    </div>
  </div>
</div>

</body>
</html>

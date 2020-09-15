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
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        $("#exampleModalCenter").modal('show');
        });
    </script>

    <title>Login</title>
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
        .rite{text-align: right;}
        .rite a{text-decoration: none; color:#642848}
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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button>-->
 

  <!-- Modal -->
<div class="modal nc" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
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
                        <small><p class="text-center">It's Alright. We'll help you to get back your new password. Let us know it's you we'll help you out.</p></small><br>
                        <form action=" " method="post">
                            <input type="email"  name="email" id="inputEmail" class="form-control mb-2" placeholder="Email Address" required="" autofocus="">                   
                            <button class="btn btn-success btn-block but mt-4 mb-4" type="submit" name="submit"> Continue</button>
                        </form> 
<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $query = "SELECT * FROM users WHERE email='$email'";
        $data = mysqli_query($con, $query);
        $total = mysqli_num_rows($data);
        $row = mysqli_fetch_array($data);
        if($total==1)
        {
            $_SESSION['email']=$email;

            echo "<script>window.location='changepassword.php';</script>";
        }
        else
        {
            echo "<script>alert('Email not registered with us');</script>";   
        }

    }
?>   

                    </div>
                </div>
              </div>             
            </div>
            <div class="modal-footer mt-3">
            <p class="rite"><a href="login.php">Cancel</a></p>
            </div>
        </div>
        
    </div>
  </div>
</div>

</body>
</html>

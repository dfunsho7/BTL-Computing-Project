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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button> -->
 

  <!-- Modal -->
<div class="modal nc" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <small><p class="text-center">Be a Fundraiser Easily</p></small>
                    
                    <form method="post">
                        <input type="hidden" name="userid" value="<?php echo $_POST['u1']; ?>">
                        <input type="text" name="fullname" value="<?php echo $_POST['u2']; ?>" id="user-name" class="form-control mt-5 mb-2" placeholder="Full name" required="" autofocus="">
                        <input type="email" name="email" value="<?php echo $_POST['u3']; ?>" id="user-email" class="form-control mb-2" placeholder="Email Address" required autofocus="">
                        <input type="password" name="password" value="<?php echo $_POST['u4']; ?>" id="user-pass" class="form-control mb-2" placeholder="Password" required autofocus="">
                        <input type="password" name="confirmpassword" value="<?php echo $_POST['u5']; ?>" id="user-repeatpass" class="form-control" placeholder="Confirm Password" required autofocus="">
                        
                        <button class="btn btn-primary btn-block but mt-4" name="submit" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>                     
                    </form>
<?php

   if(isset($_POST['submit']))
    {
        $u1=$_POST['userid'];
        $u2=$_POST['fullname'];
        $u3=$_POST['email'];
        $u4=$_POST['password'];
        $u5=$_POST['confirmpassword'];


        $check_query = "SELECT * FROM users WHERE email = '$u3'";
	    $statement = mysqli_query($con,$check_query);
	    $check_data = mysqli_num_rows($statement);
	    if($check_data>0)	
	    {
            echo "<script>alert('Email Already Existed')</script>";
        }
        else
        {
        if($u4 != $u5)
        {
            echo "<script>alert('Password Does Not Match')</script>";
        }
        else
        {
            $u1=$_POST['userid'];
            $u2=$_POST['fullname'];
            $u3=$_POST['email'];
            $u4=password_hash($_POST['password'], PASSWORD_DEFAULT);
            $u5=password_hash($_POST['confirmpassword'], PASSWORD_DEFAULT);
            $query="INSERT INTO users VALUES('$u1','$u2', '$u3', '$u4', '$u5')";
            $data=mysqli_query($con, $query);
            if($data)
            {
?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/btlfunding/signup.php">  
            echo "<script>alert('User Created Successfully')</script>";
      
<?php
            }
            else
            {
            echo "<font color='red'> User Not Created...";
            }
        }
    }
}
?>            
                </div>
              </div>             
            </div>
            <div class="modal-footer mt-3">
                    <!-- <p>Don't have an account!</p>  -->
                   <small><p class="mt-3"> Already a member of BTL </p></small> 
                  <a href="login.php"><button class="btn btn-success but mt-4 mb-4" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button></a>
            </div>
        </div>
        
    </div>
  </div>
</div>    
</body>
</html>

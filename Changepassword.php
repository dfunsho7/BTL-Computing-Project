<?php
session_start();
include("dbconnection.php");
//echo $_SESSION["email"];

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create new Password</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
<div class="signin-form">
    <form action="" method="post">
		<div class="form-header mb-4">
			<h2>Change User Password</h2>
		</div>
		<div class="form-group">
			<label>Enter Password</label>
        	<input type="password" class="form-control" placeholder="Password" name="pass1" autocomplete="off" required="required">
        </div>
        <div class="form-group">
			<label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="pass2" autocomplete="off" required="required">
        </div>
        <div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
</div>
    </form>
</div>
</body>
</html>
<?php 
if(isset($_POST['change'])){
		
$email=$_SESSION["email"];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

if($pass1 != $pass2){
echo"
    <div class='alert alert-danger'>
<strong>Your new password did't match with each other</strong> 
</div>
	        ";
	    }
	    else{
            $email = $_SESSION['email'];
            $pass1=password_hash($_POST['pass1'], PASSWORD_DEFAULT);
            $pass2=password_hash($_POST['pass2'], PASSWORD_DEFAULT);
            $update_pass = mysqli_query($con, "UPDATE users SET `password`='$pass1' , `confirmpassword`='$pass2' WHERE email='$email'");
            session_destroy();
            echo"
            	<script>alert('Go ahead and signin')</script>
            	<script>window.open('login.php','_self')</script>
            ";
        }
	
}


?>

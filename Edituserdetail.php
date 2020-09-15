<?php
session_start();
include("dbconnection.php");
error_reporting(0);

$_GET['r1'];
$_GET['r2'];
$_GET['r3'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>

<h3>Updating User Information</h3> <hr>    

<div class="container col-lg-6 bg-light">
  <form>
    ID<input type="text" name="user_id" value="<?php echo $_GET['r1']; ?>">
    Full Name<input type="text" name="fullname" value="<?php echo $_GET['r2']; ?> ">
    Email<input type="text" name="email" value="<?php echo $_GET['r3']; ?> ">

    <input type="submit" name="submit" value="Update"> <br><br>
  </form>
  <?php
    if($_GET['submit'])
    {
        $r1=$_GET['user_id'];
        $r2=$_GET['fullname'];
        $r3=$_GET['email'];

        $query="UPDATE users SET fullname='$r2', email='$r3' WHERE user_id='$r1'";
        $data=mysqli_query($con, $query);
        if($data)
        {
            echo "<script>alert('Record Updated Successfully...')</script>";
  ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/btlfunding/edituser.php">

  <?php   
        }
        else
        {
            echo "<script>alert('Record Not Updated...')</script>";
        }

    }
?>
</div>
</body>
</html>

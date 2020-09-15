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

    <style>
    .bg{
        background-color: darkcyan;
        color:white;
        border: 1px solid grey;
        padding:20px;
    }
    .nw{
        background-color: darkslategrey;
        color:white;
        padding:20px;
        font-size: 25px;
    }
    </style>

</head>
<body>
<div class="container-fluid">
  <div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <div class="nw"><i class="fas fa-edit"></i> Add New Story</div>
        <form class="bg" action="stories.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Story Title</label>
                <input type="text" name="Title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Required Amount</label>
                <input type="text" name="Reqamt" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Select Image</label>
                <input type="file" name="Image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label>Story</label>
                <textarea class="form-control" name="Story" rows="15" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block"><i class="fas fa-check"></i> Publish</button>
        </form>
        <?php
            $email=$_SESSION["email"];
            $query=mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
            $row=mysqli_fetch_array($query);
            $id=$row['user_id'];


            if(isset($_POST['submit'])) {
                $Title      = $_POST['Title'];
                $Reqamt     = $_POST['Reqamt'];
                $Image      = $_FILES["Image"]["name"];
                $tempname   = $_FILES["Image"]["tmp_name"];
                $Target    = "uploads/".basename($_FILES["Image"]["name"]); 
                move_uploaded_file($tempname,$Target);             
                $Story = $_POST['Story'];

                $insert="insert into stories (title,requiredamt,image,story,user_id) values('$Title','$Reqamt','$Target','$Story','$id')";
                $run=$con->query($insert);

                if($run){
                    echo "<script>alert('Story Published Successfully')</script>";
                }
                else{
                    echo "<script>alert('Some Problem in Story Publishing')</script>";
                }
 
            }

          ?>

        </div>
        <div class="col-sm-1"></div>
    </div>
  </div>
</div>


</body>
</html>

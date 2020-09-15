<?php
session_start();
include("dbconnection.php");
error_reporting(0);

$_GET['id'];
$_GET['date'];
$_GET['title'];
$_GET['requiredamt'];
$_GET['image'];
$_GET['story'];
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

<h3>Editing Story</h3> <hr>    

<div class="container col-sm-10 bg-light">

<form class="bg" method="POST" action="editstories.php"  enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id']; ?> ">
            </div>
            <div class="form-group">
                <input type="hidden" name="date" class="form-control" value="<?php echo $_GET['date']; ?> ">
            </div>
            <div class="form-group">
                <label>Story Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $_GET['title']; ?> ">
            </div>
            <div class="form-group">
                <label>Required Amount</label>
                <input type="text" name="requiredamt" class="form-control" value="<?php echo $_GET['requiredamt']; ?> ">
            </div>
            <div class="form-group">
                <span class="fieldinfo">Existing Image:</span>
                <img src="<?php echo $_GET['image']; ?>" alt="" height="100px" width="100px"><br><br>
                <label>Select New Image</label>
                <input type="file" name="Image" class="form-control">
            </div>
            <div class="form-group">
                <label>Story</label>
                <textarea class="form-control" name="story" rows="15"><?php echo $_GET['story']; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block"><i class="fas fa-check"></i> Update</button>
</form>

  <?php
    $query=mysqli_query($con,"SELECT * FROM stories WHERE id='$id'");
    $row=mysqli_fetch_array($query);
    $id=$row['id'];
    
    
    if(isset($_POST['submit'])) {
        $id=$_POST['id'];
        $date = date('Y-m-d H:i:s');
        $title=$_POST['title'];
        $requiredamt=$_POST['requiredamt'];
        $Image      = $_FILES["Image"]["name"];
        $tempname   = $_FILES["Image"]["tmp_name"];
        $Target    = "uploads/".basename($_FILES["Image"]["name"]); 
        move_uploaded_file($tempname,$Target);             
        $story=$_POST['story'];

        $query="UPDATE stories SET id='$id', date='$date', title='$title', requiredamt='$requiredamt', image='$Target', story='$story' WHERE id='$id'";
        $data=mysqli_query($con, $query);
        if($data)
        {
            echo "<script>alert('Record Updated Successfully...')</script>";
    ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/btlfunding/storieslist.php">

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

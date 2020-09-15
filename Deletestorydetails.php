<?php
include("dbconnection.php");
error_reporting(0);
$id= $_GET['id'];
$res = mysqli_query($con,"select * from stories where id='$id'");
while($row=mysqli_fetch_array($res))
{
    $img=$row["image"];
}
unlink($img);
$query="DELETE FROM STORIES WHERE ID='$id'";
$data=mysqli_query($con, $query);
if ($data)
{
    echo "<script>alert('Story Deleted Successfully');</script>";
?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/btlfunding/deletestory.php">
<?php
 unlink("uploads/$Image");
}
else{
    echo "<script>alert('Sorry! Delete Process Failed');</script>";
}
?>

<?php
include("dbconnection.php");
error_reporting(0);
$id= $_GET['user_id'];
$query="DELETE FROM USERS WHERE USER_ID='$id'";
$data=mysqli_query($con, $query);
if ($data)
{
    echo "<script>alert('User Deleted Successfully');</script>";
?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/btlfunding/deleteuser.php">

<?php
}
else{
    echo "<script>alert('Sorry! Delete Process Failed');</script>";
}
?>

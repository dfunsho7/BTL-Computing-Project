<?php
session_start();
include("dbconnection.php");
error_reporting(0);
$query="select * from users";
$data=mysqli_query($con, $query);
$totalrows=mysqli_num_rows($data);

if($totalrows != 0)
{
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <div class="container-fluid mt-4 mb-2 pt-4 pb-2">
    <h4 class="mt-5 text-center bg-danger pt-3 pb-3">Edit User Information</h4>
    <table style="width:100%;" border="1">
        <tr>
        <th>ID</th>
        <th>FullName</th>
        <th>Email</th>
        <th>Action</th>
        </tr>
    </div>
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
        
    echo "<tr>
        <td><small>".$result ['user_id']."</small></td>
        <td><small>".$result ['fullname']."</small></td>
        <td><small>".$result ['email']."</small></td>
        <td><a href='edituserdetail.php?r1=$result[user_id]&r2=$result[fullname]&r3=$result[email]'>Edit</a></td>
        </tr>";   
    
    }
}
else
{
    echo "No Records Found";
}

?>
</table>
<br><br><br>
</head>
</html>

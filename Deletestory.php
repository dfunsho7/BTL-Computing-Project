<?php
session_start();
include("dbconnection.php");
error_reporting(0);
$query="select * from stories";
$data=mysqli_query($con, $query);
$totalrows=mysqli_num_rows($data);

if($totalrows != 0)
{
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <div class="container-fluid mt-4 mb-2 pt-4 pb-2">
    <h5 class="text-center bg-info text-white pt-2 pb-2">Delete Story</h5>
    <table style="width:100%;" border="1">
        <tr>
        <th>ID</th>
        <th>DateTime</th>
        <th>Title</th>
        <th>Required Amount</th>
        <th>Image</th>
        <th>Action</th>
        </tr>
    </div>
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
        
    echo "<tr>
        <td><small>".$result ['id']."</small></td>
        <td><small>".$result ['date']."</small></td>
        <td><small>".$result ['title']."</small></td>
        <td><small>".$result ['requiredamt']."</small></td>
        <td><small><img src='".$result ['image']."' height='50' width='50'/></small></td>
        <td><a href='deletestorydetail.php?id=$result[id]' onclick='return checkdelete()'>Delete</a> </td>
        </tr>";   
    
    }
}
else
{
    echo "Sorry! No Stories Found";
}

?>
</table>
<br><br><br>
</head>
</html>

<script>
    function checkdelete()
        {
           return confirm('Are you sure! You really want to delete this record???');
        }
</script>

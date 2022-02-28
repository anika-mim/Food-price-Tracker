
<?php
//include("nav_bar.php");
error_reporting(0);

$review_id=$_GET['store'];
$query = "DELETE FROM review_table WHERE review_id='$review_id' ";

$data=mysqli_query($conn,$query);

if($data)

{
    echo"<font color='green'>Record deleted from database";
}

else

{
    echo"<font color='red'>Failed to delete record from database";
}
?>
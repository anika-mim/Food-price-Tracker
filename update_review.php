<?php
include('include/nav_bar.php');


$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}

       

    

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $store = $_GET['store'];

    if ($store == 'review_table') {
        $sql = "DELETE FROM review_table WHERE review_id={$review_id}";
        $delete_data = mysqli_query($conn, $sql);
        if ($delete_data) {
            
            echo "Data Deleted Successfully";
        }
    } elseif ($store == 'review_table2') {
        $sql = "DELETE FROM review_table2 WHERE review_id={$review_id}";
        $delete_data = mysqli_query($conn, $sql);
        if ($delete_data) {
            
            echo "Data Deleted Successfully";
        }
    } else {
        $sql = "DELETE FROM review_table3 WHERE review_id={$review_id}";
        $delete_data = mysqli_query($conn, $sql);
        if ($delete_data) {
           
            echo "Data Deleted Successfully";
        }
    }
}
?>

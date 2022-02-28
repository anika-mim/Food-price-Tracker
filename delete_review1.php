<?php
//include('include/nav_bar.php');


$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $store = $_GET['store'];
    if ($store == 'review_table') {
        $sql = "SELECT * FROM review_table WHERE review_id={$review_id}";
    } elseif ($store == 'review_table2') {
        $sql = "SELECT * FROM review_table2 WHERE review_id={$review_id}";
    } else {
        $sql = "SELECT * FROM review_table3 WHERE review_id={$review_id}";
    }
    $update_data = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($update_data)) {
        $review_id = $row['review_id'];
        $user_name = $row['user_name'];
        $user_rating = $row['user_rating'];
        $user_review = $row['user_review'];
        $datetime = $row['datetime'];
       
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
            <title>Update|product</title>
        </head>

        <body>
            <div class="container shadow p-3" style="margin-top: 80px;">
                <div class="form-control" style="background-color:rgb(255,228,196);">
                    <h2>
                        Update Food Info <br>
                    </h2>
                </div><br>
                <form action="" method="POST" enctype="multipart/form-data" class="d-flex justify-content-around">
                    <table>
                        <?php  ?>
                        <tr>
                            <th>
                                <label class="label">review id</label>
                            </th>
                            <td>
                                <input type=" text" name="review_id" value="<?php echo $review_id; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">user Name</label>
                            </th>
                            <td>
                                <input type="text" name="user_name" value="<?php echo $user_name; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">user rating</label>
                            </th>
                            <td>
                                <input type="file" name="files" value="<?php echo $user_rating; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">user_rrview</label>
                            </th>
                            <td>
                                <input type="text" name="user_review" value="<?php echo $user_review; ?>" class="form-control" required>
                            </td>
                        </tr>
                        
                        
                        
                        
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Update" name="update_btn" class="btn btn-warning">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>



            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/app.js"></script>
        </body>

        </html>

<?php
    }
}

if (isset($_POST['update_btn'])) {
    $review_id = $_POST["review_id"];
    $user_name = $_POST["user_name"];
    $user_rating = $_POST["user_rating"];
    $user_review = $_POST["user_review"];
   

    if ($origin == 'review_table') {
        $sql = "UPDATE review_table SET review_id='$review_id',user_name='$user_name',user_rating='$user_rating',user_Review='$user_review' WHERE review_id=$review_id";
    } elseif ($origin == 'review_table2') {
        $sql = "UPDATE review_table2 SET review_id='$review_id',user_name='$user_name',user_rating='$user_rating',user_Review='$user_review' WHERE review_id=$review_id";
    } elseif ($origin == 'review_table3') {
        $sql = "UPDATE review_table3 SET review_id='$review_id',user_name='$user_name',user_rating='$user_rating',user_Review='$user_review' WHERE review_id=$review_id";
    }

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

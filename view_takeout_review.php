<?php
$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>View Takeout Review</title>
</head>

<body>
    <?php
    include('include/nav_bar.php');
    ?>
    <div style="margin-top: 80px;">
        <?php
        $sql = "SELECT * FROM review_table3";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
        ?>
                <div class="table-responsive">
                    <table class="table table-secondary table-hover table-bordered border-info table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>Review Id</th>
                                <th>User Name</th>
                                <th>User rating</th>
                                <th>User Review</th>
                                <th>datetime</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row['review_id']; ?></td>
                                    <td><?php echo $row['user_name']; ?></td>
                                    
                                    <td><?php echo $row['user_rating']; ?></td>
                                    <td><?php echo $row['user_review']; ?></td>
                                    <td><?php echo $row['datetime']; ?></td>

                                     
                                    
                                    <td><a href="delete_review1.php?store=<?php echo $row['user_review']; ?>&&delete=<?php echo $row['review_id']; ?>" class="btn btn-danger">Delete</a></td>
                                </tr>

                        </tbody>
                    <?php } ?>
                    </table>
                </div>
        <?php
                mysqli_free_result($result);
            } else {
                echo "No record Matching";
            }
        } else {
            echo "Error:Could not able to execure $sql." . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/app.js"></script>
</body>

</html>
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
    <title>Takeout</title>
</head>

<body>
    <?php
    include('include/nav_bar.php');
    ?>
    <div style="margin-top: 80px;">
        <?php
        $sql = "SELECT * FROM Takeout";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
        ?>
                <div class="table-responsive">
                    <table class="table table-secondary table-hover table-bordered border-info table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>CODE NO</th>
                                <th>Food Name</th>
                                <th>Image</th>
                                <th>Type Name</th>
                                <th>Price</th>
                                <th>Offer Price</th>
                                <th>Food Description</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row['code_no']; ?></td>
                                    <td><?php echo $row['food_name']; ?></td>
                                    <td><img src="upload/<?php echo $row['image_name']; ?>" alt="book image" width="70px" height="70px"></td>
                                    <td><?php echo $row['typ_name']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['offer_price']; ?></td>
                                    <td><?php echo $row['food_desc']; ?></td>
                                    <td><a href="update_product.php?store=<?php echo $row['origin']; ?>&&update=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                                    <td><a href="update_product.php?store=<?php echo $row['origin']; ?>&&delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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
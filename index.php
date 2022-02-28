<?php

$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
session_start();
if (!isset($_SESSION['username'])) {
    header('location: cust_login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="background-color: #b0aca9;">

    <?php include('include/nav_bar.php'); ?>
    <?php include('include/carocel.php'); ?>

    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:#9c7282">Foods of Mr. Burger</h2>
        <div class="row">

            <?php
            $sql = "SELECT * FROM Mr_Burger";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)  {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src="upload/<?php echo $row['image_name'] ?>" class="card-img-top" alt="food Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['food_name']; ?></h5>
                                <p class="card-text"><?php echo $row['typ_name']; ?></p>
                                <a href="compare_index.php?store=Mr. Burger&&food_name=<?php echo $row['food_name']; ?>" class="btn btn-warning">Compare</a>
                                <a href="single_product.php?store=Mr. Burger&&id=<?php echo $row['id']; ?>" class="btn btn-warning">View</a>
                                
                            </div>
                        </div>
                    </div>
            <?php
                }
                echo "<br>";
                mysqli_free_result($result);
            } else {
                echo "No record Found";
            }
            ?>
        </div>
    </div>
    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:#6aa8a3">Foods of Chillox</h2>
        <div class="row">

            <?php
            $sql = "SELECT * FROM Chillox";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src="upload/<?php echo $row['image_name']; ?>" class="card-img-top" alt="food Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['food_name']; ?></h5>
                                <p class="card-text"><?php echo $row['typ_name']; ?></p>
                                <a href="compare_index.php?store=Chillox&&food_name=<?php echo $row['food_name']; ?>" class="btn btn-warning">Compare</a>
                                <a href="single_product.php?store=Chillox&&id=<?php echo $row['id']; ?>" class="btn btn-warning">View</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
                echo "<br>";
                mysqli_free_result($result);
            } else {
                echo "No record Found";
            }
            ?>
        </div>
    </div>
    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:lightblue">Foods of Takeout</h2>
        <div class="row">

            <?php
            $sql = "SELECT * FROM Takeout";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src="upload/<?php echo $row['image_name']; ?>" class="card-img-top" alt="food Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['food_name']; ?></h5>
                                <p class="card-text"><?php echo $row['typ_name']; ?></p>
                                <a href="compare_index.php?store=Takeout&&food_name=<?php echo $row['food_name']; ?>" class="btn btn-warning">Compare</a>
                                <a href="single_product.php?store=Takeout&&id=<?php echo $row['id']; ?>" class="btn btn-warning">View</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
                mysqli_free_result($result);
            } else {
                echo "No record Found";
            }
            ?>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
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
    <title>Grid</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include('include/nav_bar.php'); ?>
    <div class="container" style="margin-top: 80px;">
        <form class="d-flex justify-content-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="search" placeholder="Enter food Name">

            <!-- <button>Search</button> -->
            <input type="submit" value="SEARCH" class="btn btn-success">
        </form> <br><br>
    </div>

    <div class="container">
        <div id="main">

            <?php include('include/compare_img.php') ?>

            <?php include('include/compare_chillox.php'); ?>

            <?php include('include/compare_burger.php'); ?>

            <?php include('include/compare_takeout.php'); ?>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
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
<?php //echo $_SESSION['username']; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include('include/nav_bar.php'); ?>

    <div class="container" style="margin-top: 80px;">
        <h3 class="bg-success" style="text-align: center; color:whitesmoke">Welcome <?php echo $_SESSION['username'];  ?></h3>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
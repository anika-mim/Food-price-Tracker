<?php

$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
session_start();
if (!isset($_SESSION['username'])) {
    //header('location: cust_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Navigation Bar</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-family: Broadway;" href="index.php"><img src="image/11.jpg" alt="logo" width="40" height="40">Food
                Tracker</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target='#main-menu'>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-menu">
                <?php
                if ($_SESSION['username'] == 'admin') {
                ?>

                 <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li> 
                        
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="view_customer.php">User Info</a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_chill_food.php">Chillox Info</a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_burger_food.php">Mr Burger Info</a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_takeout_food.php">Takeout Info</a></li>

                        </li>
                        <li class="nav-item"><a class="nav-link active" href="view_chillox_review.php">Chillox Review</a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_burger_review.php">Mr Burger Review </a></li>
                        <li class="nav-item"><a class="nav-link active" href="view_takeout_review.php">Takeout Review</a></li>


                           <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">Review</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="view_chillox_review.php">Chillox</a></li>
                                <li><a class="dropdown-item" href="view_burger_review.php">Mr.Burger</a></li>
                                <li><a class="dropdown-item" href="view_takeout_review.php">Takeout</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                              

                            </ul>
                        </li>-->

                        
                    
                        <li class="nav-item"><a class="nav-link" href="product.php">Add food</a></li>

                        <?php
                        if (!isset($_SESSION['username'])) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="cust_login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="cust_registration.php">Registration</a></li>
                        <?php
                        } else {
                            //echo "Hello " . $_SESSION['username'];
                        ?><li class="nav-item"><a class="nav-link" href="sidebar.php"><?php echo "Hello " . $_SESSION['username']; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <?php
                        }
                        ?>

                    </ul>
                <?php
                } else {
                ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <?php
                        if (!isset($_SESSION['username'])) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="cust_login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="cust_registration.php">Registration</a></li>
                        <?php
                        } else {
                            //echo "Hello " . $_SESSION['username'];
                        ?><li class="nav-item"><a class="nav-link" href="#"><?php echo "Hello " . $_SESSION['username']; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <?php
                        }
                        ?>
                        <li class="nav-item"><a class="nav-link" href="compare.php">Search</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">Restaurant</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="store_chillox.php">Chillox</a></li>
                                <li><a class="dropdown-item" href="store_burger.php">Mr. Burger</a></li>
                                <li><a class="dropdown-item" href="store_takeout.php">Takeout</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="compare.php">Others</a></li>

                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">Review</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="review.php">Chillox</a></li>
                                <li><a class="dropdown-item" href="review2.php">Mr.Burger</a></li>
                                <li><a class="dropdown-item" href="review3.php">Takeout</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                              

                            </ul>
                        </li>



                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
    



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
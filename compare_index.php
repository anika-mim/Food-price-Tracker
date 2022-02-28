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

<body style="background-color: #b0aca9;">
    <?php include('include/nav_bar.php'); ?>

    <div class="container" style="margin-top: 80px;">
        <div id="main">

            <?php
            if (isset($_GET['store'])) {
                $food_name = $_GET['food_name'];
                

                $sql = "SELECT * FROM Chillox WHERE food_name = '$food_name'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
                        <div class="child">
                            <img src="upload/<?php echo $row['image_name']; ?>" alt="Image" width="420px" height="610px" style="border-radius: 10px;">
                        </div>
                        <?php
                    }
                } elseif ($sql = "SELECT * FROM Takeout WHERE food_name = '$food_name'") {
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="child">
                                <img src="upload/<?php echo $row['image_name']; ?>" alt="Image" width="420px" height="610px" style="border-radius: 10px;">
                            </div>

                            <?php
                        }
                    } elseif ($sql = "SELECT * FROM Mr_Burger WHERE food_name = '$food_name'") {
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="child">
                                    <img src="upload/<?php echo $row['image_name']; ?>" alt="Image" width="420px" height="610px" style="border-radius: 10px;">
                                </div>
            <?php
                            }
                        }
                    }
                }
            }
            ?>

            <?php
            if (isset($_GET['store'])) {
                $food_name = $_GET['food_name'];

                $sql = "SELECT * FROM Chillox WHERE food_name = '$food_name'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
                        <div class="child">
                            <h2>Chillox</h2>
                            <h4>Price: <?php echo $row['price']; ?></h4>
                            <h4>Discount Price: <?php echo $row['offer_price']; ?></h4>
                            <button>Order food</button>
                            <p><?php echo $row['food_desc']; ?></p>
                        </div>

                    <?php
                    }
                    mysqli_free_result($result);
                } else {
                    ?>
                    <div class="child bg-denger">
                        <h2>Chillox</h2>
                        <p><?php echo "Not Available"; ?></p>
                    </div>
            <?php
                }
            }
            ?>

            <?php
            if (isset($_GET['store'])) {
                $food_name = $_GET['food_name'];

                $sql = "SELECT * FROM Mr_Burger WHERE food_name = '$food_name'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
                        <div class="child">
                            <h2>Mr. Burger</h2>
                            <h4>Price: <?php echo $row['price']; ?></h4>
                            <h4>Discount Price: <?php echo $row['offer_price']; ?></h4>
                            <button>Order food</button>
                            <p><?php echo $row['food_desc']; ?></p>
                        </div>
                    <?php
                    }
                    mysqli_free_result($result);
                } else {
                    ?>
                    <div class="child bg-denger">
                        <h2>Mr. Burger</h2>
                        <p><?php echo "Not Available"; ?></p>
                    </div>
            <?php
                }
            }
            ?>

            <?php
            if (isset($_GET['store'])) {
                $food_name = $_GET['food_name'];

                $sql = "SELECT * FROM Takeout WHERE food_name = '$food_name'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
                        <div class="child">
                            <h2>Takeout</h2>
                            <h4>Price: <?php echo $row['price']; ?></h4>
                            <h4>Discount Price: <?php echo $row['offer_price']; ?></h4>
                            <button>Order food</button>
                            <p><?php echo $row['food_desc']; ?></p>
                        </div>
                    <?php
                    }
                    mysqli_free_result($result);
                } else {
                    ?>
                    <div class="child bg-denger">
                        <h2>Takeout</h2>
                        <p><?php echo "Not Available"; ?></p>
                    </div>
            <?php
                }
            }
            ?>


           
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
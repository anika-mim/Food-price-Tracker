<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food View</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style6.css">
</head>

<body class="bg-secondary" style="background-color: #666b6b;">
    <?php include('include/nav_bar.php'); ?>
    <section>
        <div class="container" style="margin-top: 80px;">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "foods");

            if (!$conn) {
                die("Connection Error" . mysqli_connect_error());
            }

            if (isset($_GET['store'])) {
                $id = $_GET['id'];
                //$store = $_GET['store'];
                if ($_GET['store'] == 'Chillox') {
                    $query = "SELECT * FROM Chillox WHERE id = $id";
                } elseif ($_GET['store'] == 'Takeout') {
                    $query = "SELECT * FROM Takeout WHERE id = $id";
                } elseif ($_GET['store'] == 'Mr. Burger') {
                    $query = "SELECT * FROM Mr_Burger WHERE id = $id";
                }
                $result = mysqli_query($conn, $query);
            }
            //if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="left" style="background-image: url(upload/<?php echo $row['image_name']; ?>);"></div>
                <div class="right">
                    <div class="content">


                        <h1><?php echo $row['food_name']; ?></h1>
                        <h4 style="text-align: right;"> <i><?php echo $row['typ_name']; ?></i></h4>
                        <h2>Price: <?php echo $row['price']; ?></h2>
                        <h2>Discount Price: <?php echo $row['offer_price']; ?></h2>
                        <p><?php echo $row['food_desc']; ?></p>

                        
                    </div>
                </div>
            <?php
            }
            mysqli_free_result($result);
            //}
            ?>
        </div>
    </section>
</body>

</html>
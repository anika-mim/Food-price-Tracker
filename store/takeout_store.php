<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takeout</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php include('C:\xampp\htdocs\Price-Tracker-main\nav_bar.php'); ?>
    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:lightblue">Foods of Takeout</h2>
        <div class="row">

            <?php
            $conn = mysqli_connect("localhost", "root", "", "foods");

            if (!$conn) {
                die("Connection Error" . mysqli_connect_error());
            }
            $sql = "SELECT * FROM Takeout";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src='C:\xampp\htdocs\Price-Tracker-main\upload\<?php echo $row['image_name']; ?>' class="card-img-top" alt="Book Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['food_name']; ?></h5>
                                <p class="card-text"><?php echo $row['typ_name']; ?></p>
                                <a href="#" class="btn btn-warning">Compare</a>
                                <a href="#" class="btn btn-warning">৳ <?php echo $row['price']; ?></a>
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
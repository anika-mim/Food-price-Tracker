<?php

$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}

$code_no = $price = $offer_price = $food_name = $typ_name = $origin = $food_desc = $image_name = "";

if (isset($_POST['btn'])) {
    $code_no = $_POST["code_no"];
    $price = $_POST["price"];
    $offer_price = $_POST["offer_price"];
    $food_name = $_POST["food_name"];
    $image_name = $_FILES['files']['name'];
    $tmp_name = $_FILES['files']['tmp_name'];
    $size = $_FILES['files']['size'];
    $extention = pathinfo($image_name, PATHINFO_EXTENSION);
    $typ_name = $_POST['typ_name'];
    $origin = $_POST['origin'];
    $food_desc = $_POST['food_desc'];

    if ($origin == 'Chillox') {
        $sql = "INSERT INTO Chillox (code_no,food_name,typ_name,price,offer_price,origin,food_desc,image_name) VALUES('$code_no','$food_name','$typ_name','$price','$offer_price','$origin','$food_desc','$image_name')";
    } elseif ($origin == 'Mr. Burger') {
        $sql = "INSERT INTO Mr_Burger (code_no,food_name,typ_name,price,offer_price,origin,food_desc,image_name) VALUES('$code_no','$food_name','$typ_name','$price','$offer_price','$origin','$food_desc','$image_name')";
    } elseif ($origin == 'Takeout') {
        $sql = "INSERT INTO Takeout (code_no,food_name,typ_name,price,offer_price,origin,food_desc,image_name) VALUES('$code_no','$food_name','$typ_name','$price','$offer_price','$origin','$food_desc','$image_name')";
    }
    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($tmp_name, 'upload/' . $image_name);
        echo "Product stored successfully....";
    } else {
        echo "ERROR: Could not able to execute." . $sql . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Food</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

   <?php include('include/nav_bar.php'); ?>
    
    <br><br>
    <div class="container shadow p-3">
        <div class="form-control" style="background-color: rgb(255,228,196);">
            <h2>
                ADD FOODS IN THE RESTUARANTS  <br>
            </h2>
        </div><br>
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex justify-content-around">
            <table>
                <?php  ?>

                <tr>
                    <th>
                        <label class="label">CODE NO</label>
                    </th>
                    <td>
                        <input type=" text" name="code_no" placeholder="Enter CODE NO" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Food Name</label>
                    </th>
                    <td>
                        <input type="text" name="food_name" placeholder="Enter Food Name" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Food Image</label>
                    </th>
                    <td>
                        <input type="file" name="files" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Type Name</label>
                    </th>
                    <td>
                        <input type="text" name="typ_name" placeholder="Enter Food Type Name" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Price</label>
                    </th>
                    <td>
                        <input type="number" name="price" placeholder="Enter Price" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Offer Price</label>
                    </th>
                    <td>
                        <input type="number" name="offer_price" placeholder="Enter Price" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Food Description</label>
                    </th>
                    <td>
                       

                        <textarea name="food_desc" cols="60" rows="5" class="form-control" required></textarea><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Origin</label>
                    </th>
                    <td>
                        
                        <input type="radio" value="Chillox" name="origin" class="form-radio-input" required>
                        <label>Chillox</label>

                        <input type="radio" value="Takeout" name="origin" class="form-radio-input" required>
                        <label>Takeout</label>

                        <input type="radio" value="Mr. Burger" name="origin" class="form-radio-input" required>
                        <label>Mr. Burger</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SUBMIT" name="btn" class="btn btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
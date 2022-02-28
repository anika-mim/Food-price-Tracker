<?php

$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $store = $_GET['store'];
    if ($store == 'Chillox') {
        $sql = "SELECT * FROM Chillox WHERE id={$id}";
    } elseif ($store == 'Mr. Burger') {
        $sql = "SELECT * FROM Mr_Burger WHERE id={$id}";
    } else {
        $sql = "SELECT * FROM Takeout WHERE id={$id}";
    }
    $update_data = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($update_data)) {
        $id = $row['id'];
        $code_no = $row['code_no'];
        $food_name = $row['food_name'];
        $image_name = $row['image_name'];
        $typ_name = $row['typ_name'];
        $food_desc = $row['food_desc'];
        $price = $row['price'];
        $offer_price = $row['offer_price'];
        $origin = $row['origin'];
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
            <title>Update|product</title>
        </head>

        <body>
            <div class="container shadow p-3">
                <div class="form-control" style="background-color: rgb(255, 238, 0);">
                    <h2>
                        Update food Info <br>
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
                                <input type=" text" name="code_no" value="<?php echo $code_no; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Food Name</label>
                            </th>
                            <td>
                                <input type="text" name="food_name" value="<?php echo $food_name; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Food Image</label>
                            </th>
                            <td>
                                <input type="file" name="files" value="<?php echo $image_name; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Type Name</label>
                            </th>
                            <td>
                                <input type="text" name="typ_name" value="<?php echo $typ_name; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Price</label>
                            </th>
                            <td>
                                <input type="number" name="price" value="<?php echo $price; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Offer Price</label>
                            </th>
                            <td>
                                <input type="number" name="offer_price" value="<?php echo $offer_price; ?>" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="label">Food Description</label>
                            </th>
                            <td>
                                

                                <textarea name="food_desc" cols="60" rows="5" value="<?php echo $food_desc; ?>" class="form-control" required></textarea><br>
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
                                <input type="submit" value="Update" name="update_btn" class="btn btn-warning">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>



            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/app.js"></script>
        </body>

        </html>

<?php
    }
}

if (isset($_POST['update_btn'])) {
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
        $sql = "UPDATE Chillox SET code_no='$code_no',food_name='$food_name',typ_name='$typ_name',price='$price',offer_price='$offer_price',origin='$origin',food_desc='$food_desc',image_name='$image_name' WHERE id=$id";
    } elseif ($origin == 'Mr. Burger') {
        $sql = "UPDATE Mr_Burger SET code_no='$code_no',food_name='$food_name',typ_name='$typ_name',price='$price',offer_price='$offer_price',origin='$origin',food_desc='$food_desc',image_name='$image_name' WHERE id=$id";
    } elseif ($origin == 'Takeout') {
        $sql = "UPDATE Takeout SET code_no='$code_no',food_name='$food_name',typ_name='$typ_name',price='$price',offer_price='$offer_price',origin='$origin',food_desc='$food_desc',image_name='$image_name' WHERE id=$id";
    }
    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($tmp_name, 'upload/' . $image_name);
        echo "Product Update successfully....";
    } else {
        echo "ERROR: Could not able to execute." . $sql . mysqli_error($conn);
    }
}

<?php

$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}

$first_name = $username = $password = $email = $last_name = $phone_number = $role = $c_password = $emailErr = $passErr = $c_passErr = $p_numberErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is Required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email is not Valid. Type a valid email";
        }
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is Required";
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/^([A-Za-z0-9]+){8,20}$/", $password)) {
            $passErr = "Use valid Password";
        }
    }

    if (empty($_POST["c_password"])) {
        $c_passErr = "Password is Required";
    } else {
        $c_password = test_input($_POST["c_password"]);
        if (!preg_match("/^([A-Za-z0-9]+){8,20}$/", $c_password)) {
            $c_passErr = "Use valid Password";
        }
    }

    if (!($_POST["phone_number"])) {
        $phone_numberErr = "Bangladeshi Phone Number is Required";
    } else {
        $phone_number = test_input($_POST["p_number"]);
        if (!preg_match("/^(\+88)?(01)(\d+){9}$/", $phone_number)) {
            $phone_numberErr = "Use valid BD Phone Number";
        }
    }

    $parse_error = array();

    if ($password != $c_password) {
        $parse_error['password_error'] = "Password mismatch !!";
    }


    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $role = $_POST["role"];
    $c_password = $_POST["c_password"];


    $sql = "INSERT INTO customer (first_name,last_name,username,password,c_password,email,phone_number,role) VALUES('$first_name','$last_name','$username','$password','$c_password','$email','$phone_number','$role')";
    if (mysqli_query($conn, $sql)) {
        //echo "Value store successfully....";
        header('location:cust_login.php');
    } else {
        echo "ERROR: Could not able to execute." . mysqli_error($conn);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Customer Registration</title>
</head>

<body>
    <?php include('include/nav_bar.php') ?>

    <div class="container shadow p-3" style="margin-top: 70px;">
        <div class="form-control" style="background-color: rgb(255, 238, 0);">
            <h2 style="text-align: center; font-family:Fira Code">
                Customer Registration <br>
            </h2>
        </div><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data" class="d-flex justify-content-around">
            <table>
                <tr>
                    <th>
                        <label class="label">First Name</label>
                    </th>
                    <td>
                        <input type=" text" name="first_name" placeholder="Enter First Name" class="form-control" required>
                        <div id="" class="form-text"></div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Last Name</label>
                    </th>
                    <td>
                        <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" required>
                        <div id="" class="form-text"></div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Username</label>
                    </th>
                    <td>
                        <input type="text" name="username" placeholder="Enter Username" class="form-control" required>
                        <div id="" class="form-text">user name must be unique</div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Email</label>
                    </th>
                    <td>
                        <input type="email" name="email" placeholder="Enter Email Address" class="form-control" required>
                        <div id="" class="form-text"><?php echo $emailErr; ?></div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Phone Number</label>
                    </th>
                    <td>
                        <input type="digit" name="phone_number" placeholder="Enter Phone Number" class="form-control" required>
                        <div id="" class="form-text"><?php echo $p_numberErr; ?></div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Password</label>
                    </th>
                    <td>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                        <div id="" class="form-text"><?php echo $passErr; ?></div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Confirm Password</label>
                    </th>
                    <td>
                        <input type="password" name="c_password" placeholder="Enter Password" class="form-control" required>
                        <div id="" class="form-text"><?php echo $passErr;
                                                        if (isset($parse_error['password_error'])) {
                                                            echo $parse_error['password_error'];
                                                        } ?></div>
                    </td>
                </tr>
               
                <tr>
                    <td></td>
                    <td><br>
                        <input type="submit" value="SUBMIT" name="btn" class="btn btn-warning">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
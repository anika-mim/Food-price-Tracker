<?php
$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}

if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
}

if (isset($_POST['submit'])) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    $input_error = array();

    if (empty($username)) {
        $input_error['username'] = " *" . "ID field can't empty.";
    }
    if (empty($password)) {
        $input_error['password'] = " *" . "Password field can't empty.";
    }

    if (count($input_error) == 0) {
        $num = 0;
        $num_1 = 0;
        $query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
        $admin_login = mysqli_query($conn, $query);
        $num = mysqli_num_rows($admin_login);
        echo $num;
        if ($num > 0) {
            if (isset($_POST['remember'])) {
                $remember = $_POST['remember'];
                setcookie('username', $username, time() + 36000);
                setcookie('password', $password, time() + 36000);
            }

            session_start();
            $_SESSION['username'] = $username;
            //include('admin_panel.php');
            header("location: index.php");
        }
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $student_login = mysqli_query($conn, $query);
        $num_1 = mysqli_num_rows($student_login);


        if ($num_1 > 0) {
            if (isset($_POST['remember'])) {
                $remember = $_POST['remember'];
                setcookie('username', $username, time() + 36000);
                setcookie('password', $password, time() + 36000);
            }

            session_start();
            $_SESSION['username'] = $username;
            header("location: sidebar.php");
        } else {
            $wrong_input = "Invalid Username or Password";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Customer Login</title>
</head>

<body>
    <?php include('include/nav_bar.php') ?>
    <div class="container shadow p-3" style="margin-top: 70px;">
        <div class="form-control" style="background-color: rgb(255, 238, 0);">
            <h2 style="text-align: center; font-family:Fira Code">
                Customer Login <br>
            </h2>
        </div><br>
        <form action="" method="POST" class="d-flex justify-content-around">
            <table>
                <tr>
                    <th>
                        <label class="label">Username</label>
                    </th>
                    <td>
                        <input type="text" name="username" placeholder="Enter Username" class="form-control" required>
                        <!-- <div id="" class="form-text">user name must be unique</div> -->
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label">Password</label>
                    </th>
                    <td>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                        <!-- <div id="" class="form-text">Password must be grater than 8 character</div> -->
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="remember" class="form-check-input"> Remember Me
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><br>
                        <input type="submit" value="SUBMIT" name="submit" class="btn btn-warning">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
<?php

$conn = mysqli_connect("localhost", "root", "", "foods");

if (!$conn) {
    die("Connection Error" . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //$user_name = mysqli_real_escape_string($user_name);
    //$password = mysqli_real_escape_string($password);
    $sql = "SELECT * FROM customer WHERE password = '$password' AND username = '$username'";
    $result = mysqli_query($conn, $sql);

    /*$row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login success!!!" . $row['username'];
    }*/
    echo 'Login Success!!' . $username;
} else {
    echo "Login Fail";
}

mysqli_close($conn);

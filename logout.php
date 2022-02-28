<?php

if (!isset($_SESSION['username'])) {

}

?>

<?php
session_start();
session_destroy();
header('location: logout.php');
?>
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
    <link rel="stylesheet" href="Price-Tracker-main/css/bootstrap.min.css">
    <title>User View</title>
</head>


<body>
    <?php
    $sql = "SELECT * FROM customer";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
    ?>
            <div class="table-responsive">
                <table class="table table-secondary table-hover table-bordered border-info table-striped">
                    <thead class="table-info">
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['phone_number']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                            </tr>

                    </tbody>
                <?php } ?>
                </table>
            </div>
    <?php
            mysqli_free_result($result);
        } else {
            echo "No record Matching";
        }
    } else {
        echo "Error:Could not able to execure $sql." . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>


    <script src="Price-Tracker-main/js/bootstrap.bundle.min.js"></script>
    <script src="Price-Tracker-main/js/app.js"></script>
</body>

</html>
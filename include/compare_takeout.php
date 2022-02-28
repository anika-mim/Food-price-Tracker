<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $key = mysqli_real_escape_string($conn, $_POST['search']);

    $sql = "SELECT * FROM Takeout WHERE food_name = '$key'";
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
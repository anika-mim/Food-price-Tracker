<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PriyoShop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container p-3">
        <h2 style="text-align: center; font-family:Fira Code; background-color:mediumseagreen">Book of Othoba</h2>
        <div class="row">

            <?php
            $conn = mysqli_connect("localhost", "root", "", "books");

            if (!$conn) {
                die("Connection Error" . mysqli_connect_error());
            }
            $sql = "SELECT * FROM priyo_bookstore LIMIT 12";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="card box-shadow" style="width: 17rem;">
                            <img src="upload/<?php echo $row['image_name']; ?>" class="card-img-top" alt="Book Image" height="250px" width="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['book_name']; ?></h5>
                                <p class="card-text"><?php echo $row['author_name']; ?></p>
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
















body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(186, 216, 125);
    font-size: 0.8rem;
    font-family: 'Work Sans'
}

.card {
    max-width: 1000px;
    width: 100%;
    padding: 4rem;
    background-color: rgb(46, 45, 45);
    color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

@media(max-width:768px) {
    .card {
        width: 100%;
        padding: 1.5rem
    }
}

.row {
    margin: 0
}

.path {
    color: grey;
    margin-bottom: 1rem
}

.path a {
    color: #ffffff
}

.info {
    padding: 6vh 0vh
}

@media(max-width:768px) {
    .info {
        padding: 0
    }
}

.checked {
    color: rgb(255, 217, 0);
    margin-right: 1vh
}

.fa-star-half-full {
    color: rgb(255, 217, 0)
}

img {
    height: fit-content;
    width: 75%;
    padding: 1rem
}

@media(max-width:768px) {
    img {
        padding: 2.5rem 0
    }
}

.title .col {
    padding: 0
}

.fa-heart-o {
    font-size: 2rem;
    color: #ffffffaf;
    font-weight: lighter
}

#reviews {
    margin-left: 3vh;
    color: grey
}

.price {
    margin-top: 2rem
}

label.radio span {
    padding: 1vh 4vh;
    background-color: rgb(54, 54, 54);
    color: grey;
    display: inline-block;
    margin-right: 2vh
}

label.radio input:checked+span {
    border: 1px solid white;
    padding: 1vh 4vh;
    background-color: rgb(54, 54, 54);
    margin-right: 2vh;
    color: #ffffff;
    display: inline-block
}

.carousel-control-prev {
    width: unset
}

.carousel-control-next {
    left: 8vh;
    right: unset;
    width: unset
}

.lower {
    margin-top: 3rem
}

.lower i {
    padding: 2.5vh;
    margin-right: 1vh;
    color: grey;
    border: 1px solid rgb(85, 85, 85)
}

.lower .col {
    padding: 0
}

@media(max-width:768px) {
    .lower i {
        padding: 2vh;
        margin-right: 1vh;
        color: grey;
        border: 1px solid rgb(85, 85, 85)
    }
}

.btn {
    background-color: transparent;
    border-color: rgba(186, 216, 125, 0.863);
    color: rgba(186, 216, 125, 0.863);
    padding: 1.8vh 4.5vh;
    height: fit-content;
    border-radius: 3px
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

@media(max-width:768px) {
    .btn {
        background-color: transparent;
        border-color: rgba(186, 216, 125, 0.863);
        color: rgba(186, 216, 125, 0.863);
        padding: 1vh;
        font-size: 0.9rem;
        height: fit-content;
        border-radius: 3px
    }
}

a {
    color: unset
}

a:hover {
    color: unset;
    text-decoration: none
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio {
    cursor: pointer
}
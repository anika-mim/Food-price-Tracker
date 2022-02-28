<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <div id="slider" class="carousel slide carousel-fade" data-bs-target="#slider" style="margin-top: 20px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-100" src="image/34.jpg" alt="">
                <div class="carousel-caption">
                    <h4>Mr. Burger</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-99" src="image/54.jpg" alt="">
                <div class="carousel-caption">
                    <h4>Takeout</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-100" src="image/67.jpg" alt="">
                <div class="carousel-caption">
                    <h4>Chillox</h4>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
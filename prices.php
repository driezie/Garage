<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            require_once '../config.php'; 
            require_once './assets/html/head.php'; 
            
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Home</title>
        <link rel="stylesheet" href="./css/style.css">
        
    </head>
    <body>
    <div class="sticky" id="myTopnav">
        <div class="left topnav" >
            <h3 class="title"><b>van Franken Car Service</b></h3>
            <a href="./">Home</a>
            <a href="#">How does it work?</a>
            <a href="#">Prices</a>
            <a href="#">Our Garage</a>
            <a href="#">Contact</a>
            <a href="./login.php">Sign In</a>
            <a href="./werkplaatsplanner/" class="special">Schedule your appointment</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="image_container">
            <img class="container_image" src="./assets/img/garage_3.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center;" >
            <div class="centered"> 
            <h1 class="" style='padding: 20px 0 20px 0; font-size: 60px; line-height: 60px;'>van Franken. Forward together.</h1>
            <div class="container__lower" style= 'text-align: center; position: relative; z-index: 100;'>
            <a href="./werkplaatsplanner/1.voertuig/" class="container_button" style='font-size: 17px;'><b>Schedule maintenance</b></a>
            <span class="container_text" style='font-size: 17px; padding-left: 10px; padding-right: 10px;'><b> | </b></span>
                <a href="index.php" class="container_button" style='font-size: 17px;'><b>View reviews</b></a>
            </div>
            </div>
        </div>

        <div class="container">
            <h2 class="h3 header">
                Prices
            </h2>
            <p class="container__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt consectetur, nisl nunc euismod nisi, eu porttitor nisl nunc euismod nisi.
            </p>
            <div class="row gutters-4 gutters-lg-3 align-items-center" >
            
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        Item 1
                    </h3>
                    <p class="review__text">
                        Small description about the price and the item
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        Item 2
                    </h3>
                    <p class="review__text">
                        Small description about the price and the item
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        Item 3
                    </h3>
                    <p class="review__text">
                        Small description about the price and the item
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        Item 4
                    </h3>
                    <p class="review__text">
                        Small description about the price and the item
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        Item 5
                    </h3>
                    <p class="review__text">
                        Small description about the price and the item
                    </p>
                </div>
                
            </div>
            </div>
        </div>
    </body>
</html>




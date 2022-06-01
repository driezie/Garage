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
            <a href="#">Home</a>
            <a href="#">How does it work?</a>
            <a href="#">Prices</a>
            <a href="#">Our Garage</a>
            <a href="#">Contact</a>
            <a href="./login.php">Sign Up</a>
            <a href="./werkplaatsplanner/" class="special">Schedule your appointment</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
        <div class="image_container">
            <img class="container_image" src="./assets/img/onderhoud_banner_3.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center;" >
            <div class="centered"> 
            <h1 class="" style='padding: 20px 0 20px 0; font-size: 60px; line-height: 60px;'>van Franken. Forward together.</h1>
            <div class="container__lower" style= 'text-align: center; position: relative; z-index: 100;'>
            <a href="./werkplaatsplanner/1.voertuig/" class="container_button" style='font-size: 17px;'><b>Schedule maintenance</b></a>
            <span class="container_text" style='font-size: 17px; padding-left: 10px; padding-right: 10px;'><b> | </b></span>
                <a href="index.php" class="container_button" style='font-size: 17px;'><b>View reviews</b></a>
            </div>

            </div>
            
        </div>


        <div class="container" >
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                <div class="col-12 col-lg-9">
                    <div class="alert alert-success" role="alert" style="margin: 10px;">
                        👋 <b>Welcome!</b> This website is made by <b>someone</b>, <b>someone</b> & <b>someone</b>.
                    </div>
                    <h2 class="h3 header">
                        Why a maintenance service at Van Franken?
                    </h2>
                    <p class="container__text">
                        For the best maintenance on your car, go to van Franken. Have your car serviced regularly to avoid the risk of expensive repairs.
                    </p>
                    <div class="container__list">
                        <p>✅  A clear price for your maintenance in advance</p>
                        <p>✅  Free breakdown assistance with maintenance</p>
                        <p>✅  Free loan bike</p>
                        <p>✅  Discount on future repairs</p>
                        <p>✅  Always entitled to replacement transport at a service rate</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                <div class="col-12 col-lg-5">
                    <img class="img-fluid" src="./assets/img/working-man.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px"  >

                </div>

                <div class="col-12 col-lg-7">
                    <h2 class="h3 header">Small maintenance</h2>
                    <p class="container__text">
                        For the best maintenance on your car, go to van Franken. Have your car serviced regularly to avoid the risk of expensive repairs.
                    </p>
                    <h3 class="h4 smallheader">
                        When do you need a small maintenance?
                    </h3>
                    <p class="container__text">
                        Does your car need maintenance? Then a small maintenance is the right time to do. This is if you have driven less than 15,000 kilometers or if your car is less than 2 years old. If you have driven more than 15,000 kilometers, a larger service is more suitable for you.
                    </p>
                    <a href="./werkplaatsplanner/" class="btn btn-primary" style='font-size: 15px;'>Schedule your appointment</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                

                <div class="col-12 col-lg-7">
                    <h2 class="h3 header">
                        Big maintenance
                    </h2>
                    <p class="container__text">
                        Have you driven more than 15,000 kilometers? Then a major overhaul is the right time to do. Our skilled technicians know everything about your Franken car and will repair your car as quickly as possible. You can always borrow a free loaner bike or borrow a car at a service rate.
                    </p>
                    <h3 class="h4 smallheader">
                        When do you need a big maintenance?
                    </h3>
                    <p class="container__text">
                        Is your car older than 2 years or has it driven more than 15,000 kilometres? Then a major overhaul is the right time to do. We at Van Franken think it is important that every car needs a service every 5 years.
                    </p>
                    <a class="btn btn-primary" href="./werkplaatsplanner/" role="button">Schedule your appointment</a>
                </div>

                <div class="col-12 col-lg-5">
                    <img class="img-fluid" src="./assets/img/working-man-2.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px"  >

                </div>
            </div>
        </div>




        <div class="container">
            <h2 class="h3 header">
                Reviews
            </h2>
            <p class="container__text">
                Here we have some reviews about our services for you.
            </p>
            <a class="btn btn-primary" href="index.php" role="button">Click for more reviews</a>
            <div class="row gutters-4 gutters-lg-3 align-items-center" >
            
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        J. van het paard
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                        Good service with affordable prices
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        H. Kleefman
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                        Excellent
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        P. Meindertsma
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                        Brought my Volkswagen to Driezie last Friday evening to have the cleats replaced. I indicated that I could not arrive earlier than 17:30 and that was no problem. It would be ready in an hour. Thank you and see you next time.                    </p>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>




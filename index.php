<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once '../config.php';
    require_once './assets/html/head.php';
    require_once './assets/database/dbh.php';
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>

<body>

    <?php
    // op school
    $_SESSION['session_id'] = '1';
    $_SESSION['session_email'] = 'officialjustdevv@gmail.com';
    $_SESSION['session_role'] = '1';
    //  link naar dashboard: http://localhost/Projecten/Garage/public/customer/?action=green&message=You%20logged%20in%20successfully!&title=%F0%9F%A5%B3%20Logged%20in!

    require_once './assets/html/navbar.php';
    $array = array(
        // (Button name , Button link , Button type)
        // class types: "normal", "special", "disabled",
        'title' => 'van Franken Car Service',
        'nav' => array(
            array('Home', '#', 'normal'),
            array('How does it work?', './howdoesitwork.php', 'normal'),
            array('Prices', './prices.php', 'disabled'),
            array('Contact', './contact.php', 'normal'),
            array('Sign in', './login.php', 'normal'),
            array('Schedule your appointment', './order', 'special'),
        ),
    );
    createnavbar($array);
    ?>

    <div class="image_container">
        <img class="container_image" src="./assets/img/onderhoud_banner_3.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center;">
        <div class="centered">
            <h1 class="" style='padding: 20px 0 20px 0; font-size: 60px; line-height: 60px;'>van Franken. Forward together.</h1>
            <div class="container__lower" style='text-align: center; position: relative; z-index: 100;'>
                <a href="./order/" class="container_button" style='font-size: 17px;'><b>Schedule maintenance</b></a>
                <span class="container_text" style='font-size: 17px; padding-left: 10px; padding-right: 10px;'><b> | </b></span>
                <a href="#reviews" class="container_button" style='font-size: 17px;'><b>View reviews</b></a>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="alert alert-success" role="alert">
                    👋 <b>Welcome!</b> This website is made by <b>someone</b>, <b>someone</b> & <b>someone</b>.
                </div>
                <h2 class="header">
                    Why a maintenance service at Van Franken?
                </h2>
                <p class="container__text">
                    For the best maintenance on your car, go to van Franken. Have your car serviced regularly to avoid the risk of expensive repairs.
                </p>
                <div class="container__list">
                    <p>✅ A clear price for your maintenance in advance</p>
                    <p>✅ Free breakdown assistance with maintenance</p>
                    <p>✅ Free loan bike</p>
                    <p>✅ Discount on future repairs</p>
                    <p>✅ Always entitled to replacement transport at a service rate</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="./assets/img/working-man.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px">
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="header">Small maintenance</h2>
                <p class="container__text">
                    For the best maintenance on your car, go to van Franken. Have your car serviced regularly to avoid the risk of expensive repairs.
                </p>
                <h3 class="h4 smallheader">
                    When do you need a small maintenance?
                </h3>
                <p class="container__text">
                    Does your car need maintenance? Then a small maintenance is the right time to do. This is if you have driven less than 15,000 kilometers or if your car is less than 2 years old. If you have driven more than 15,000 kilometers, a larger service is more suitable for you.
                </p>
                <a href="./order/" class="btn btn-primary" style='font-size: 15px;'>Schedule your appointment</a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center my-5">
            <div class="col-12 col-lg-6">
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
                <a class="btn btn-primary" href="./order/" role="button">Schedule your appointment</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="./assets/img/working-man-2.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px">
            </div>
        </div>
    </div>

    <div class="container my-5" id="reviews">
        <h2 class="h3 header">
            Reviews
        </h2>
        <p class="container__text">
            Here we have some reviews about our services for you.
        </p>
        <a class="btn btn-primary" href="index.php" role="button">Click for more reviews</a>
        <div class="row gutters-4 gutters-lg-3 align-items-center review-container">

            <?php

            require_once 'assets/actions/getfromdatabase.php';

            $reviews = getFromDB('users.first_name, users.last_name, reviews.content, reviews.stars, reviews.header', 'reviews join users on users.klnr = reviews.user_id', '1 ORDER by reviews.stars DESC LIMIT 6');

            foreach ($reviews as $review) {
                echo '<div class="col-12 col-lg-4">';
                echo '<h3 class="review__name">';
                echo $review['first_name'] . ' ' . $review['last_name'];
                echo '</h3>';
                echo '<p class="review__stars">';
                for ($i = 0; $i < $review['stars']; $i++) {
                    echo '⭐';
                }
                echo '</p>';
                echo '<h4 class="review__header">';
                echo $review['header'];
                echo '</h4>';
                echo '<p class="review__text">';
                echo $review['content'];
                echo '</p>';
                echo '</div>';
            }

            ?>
        </div>
    </div>
    </div>

    <footer>
        <?php
        require_once './assets/html/footer.php';
        ?>
    </footer>
</body>
<script>
    <?php
    require_once './assets/js/nav.js';
    ?>
</script>

</html>
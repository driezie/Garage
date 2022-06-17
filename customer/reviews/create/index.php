<!DOCTYPE html>
<html>

<head>
    <?php
    require_once '../../../assets/html/head.php';

    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/nav.css">

</head>

<body>
    <?php

    if (isset($_POST['post_review'])) {
        $review = $_POST['review'];
        $header = $_POST['review_header'];
        $rating = $_POST['review_stars'];
        $user_id = $_SESSION['session_id'];


        $dbh = getDB();
        $sql = 'INSERT INTO reviews (user_id, header, content, stars) VALUES (?, ?, ?, ?)';

        $stmt = $dbh->prepare($sql);
        $stmt->execute([$user_id, $header, $review, $rating]);

        $review_id = $dbh->lastInsertId();

        if ($review_id) {
            echo '<script>alert("Review succesvol toegevoegd!");</script>';
        } else {
            echo '<script>alert("Er is iets fout gegaan!");</script>';
        }
    }
    $array = array(
        // (Button name , Button link , Button type)
        // class types: "normal", "special", "disabled",
        'title' => 'van Franken Car Service Dashboard',
        'nav' => array(
            array('Home', '../../', 'normal'),
            array('My Orders', '../../myorder', 'normal'),
            array('My Profile', '../../profile', 'normal'),
            array('My Reviews', '#', 'normal'),
            array('Logout', '?action=logout', 'normal'),
            array('Schedule your appointment', '../../../order/?step=1', 'special'),
        ),
    );
    createnavbar($array);
    ?>

    <div class="container" style="margin-top: 100px">
        <!-- breadcrumbs -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="../" class="active">Dashboard</a></li>
                        <li class="active">My Reviews</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center">
            <div class="col-12 col-lg-9">

                <!-- This is the alert box. If there is a notification it will be displayed using the alert -->
                <?php alert_session(); ?>

                <h2 class="h3 header">My Reviews</h2>


                <!-- if empty!!!!!!!!!!!!!!!!!!!!!!! -->
                <p class="container__text">You currently do not have any reviews. You can upload max 5 reviews</p>


                <div class="row">
                    <div class="col-lg-5">
                        <form action="index.php" method="post">
                            <?php if (isLoggedIn()) {  ?>
                                Leave a review if you have a question or if you have a problem with our service.
                                <form action="index.php" method="post" class="form">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="review_stars" id="review_stars" placeholder="Stars"> <br>
                                        <input class="form-control" type="text" name="review_header" id="review_header" placeholder="Title"> <br>
                                        <input class="form-control" type="text" name="review" id="review" placeholder="Content" limit='5'> <br>
                                        <input class="form-control" type="submit" value="Submit" name="post_review">
                                    </div>
                                </form>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
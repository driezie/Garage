    <!DOCTYPE html>
<html>

<head>
    <?php
    require_once '../assets/html/head.php';

    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">

</head>

<body>
    <?php
    $array = array(
        // (Button name , Button link , Button type)
        // class types: "normal", "special", "disabled",
        'title' => 'van Franken Car Service Dashboard',
        'nav' => array(
            array('Home', '#', 'normal'),
            array('My Orders', './myorder', 'normal'),
            array('My Profile', './profile', 'normal'),
            array('My Reviews', './reviews', 'normal'),
            array('Logout', '?action=logout', 'normal'),
            array('Schedule your appointment', '../order/?step=1', 'special'),
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
                        <!-- <li><a href="../" class="active">Dashboard</a></li> -->
                        <li class="active">Dashboard</li>
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

                <h2 class="h3 header">Dashboard</h2>
                <p class="container__text">Welcome to the dashboard website. Here you can see and track all your appointments you have created.</p>


                <div class="counter">
                    <!-- Just de default shit -->
                    <p class="text">Completed: <b>0</b></p>
                    <p class="text">In-progress: <b>0</b></p>
                    <p class="text">Canceled: <b>0</b></p>
                </div>
                <p class="container__text">Your latest order/appointment:</p>
                <div class="counter">
                    <!-- Latest order information -->
                    <div class="counter">
                        <!-- Just de default shit -->
                        <p class="text">Just empty...</p>
                    </div>

                </div>
                <!-- Here you will recieve your latest data from the appointment you created. If you havent added an appointment, it will show a button for you to enter -->
                <form class="login" action="?action=logout" id='login' method="post">
                    <div class="form-row"><button type="submit" class="btn btn-primary">Log out</button></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
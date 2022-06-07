<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../../config.php'; 
            require_once '../assets/html/head.php'; 
            
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../css/style.css">
        
    </head>
    <body>
    <div class="sticky" id="myTopnav">
        <div class="left topnav" >
            <h3 class="title"><b>van Franken Car Service</b></h3>
            <a href="#">Dashboard</a>
            <a href="./appointments/">My appointments</a>
            <a href="./profile/">My Profile</a>
            <a href="../assets/actions/action.php?action=logout">Log out</a>
            <a href="../werkplaatsplanner/" class="special">Schedule new appointment</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div> 
    </div>

    <div class="container" style="margin-top: 100px">
    <!-- breadcrumbs -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <!-- <li><a href="./" class="active">Dashboard</a></li> -->
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center" >
            <div class="col-12 col-lg-9">

                <!-- This is the alert box. If there is a notification it will be displayed using the alert -->
                <?php require_once '../assets/html/alert.php'; alert(); ?>

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
                <form class = "login" action="../assets/actions/action.php?action=logout" id='login' method="post">
                    <div class="form-row"><button type="submit" class="btn btn-primary">Log out</button></div>
                </form>
            </div>
        </div>
    </div>
        
    </body>
</html>




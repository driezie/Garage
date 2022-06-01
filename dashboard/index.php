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
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css">
        
    </head>
    <body>
    <div class="sticky" id="myTopnav">
        <div class="left topnav" >
            <h3 class="title"><b>van Franken Auto Service</b></h3>
            <a href="#dashboard">Dashboard</a>
            <a href="#appointments">My appointments</a>
            <a href="../assets/actions/action.php?action=logout">Log out</a>
            <a href="#" class="special">Schedule new appointment</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div> 
    </div>
        


        <div class="container" style="margin-top: 100px">
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                <div class="col-12 col-lg-9">
                    <?php
                        require_once '../assets/html/alert.php';
                        alert();
                    ?>
                    <h2 class="h3 header">
                    Dashboard
                    </h2>
                    <p class="container__text">
                    Welcome to the dashboard
                    </p>
                    <form class = "login" action="../assets/actions/action.php?action=logout" id='login' method="post">
                        <div class="form-row">
                            <button type="submit" class="btn btn-primary">Log out</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>




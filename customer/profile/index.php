<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../../../config.php'; 
            require_once '../../assets/html/head.php'; 
            session_start();
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../../css/style.css">
        
    </head>
    <body>
    <div class="sticky" id="myTopnav">
        <div class="left topnav" >
            <h3 class="title"><b>van Franken Car Service</b></h3>
            <a href="../">Dashboard</a>
            <a href="../appointments/">My appointments</a>
            <a href="#">My Profile</a>
            <a href="../assets/actions/action.php?action=logout">Log out</a>
            <a href="../../werkplaatsplanner/" class="special">Schedule new appointment</a>
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
                        <li><a href="../" class="active">Dashboard</a></li>
                        <li class="active">My Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center" >
            <div class="col-12 col-lg-9">

                <div class="alert alert-success" role="alert" style="margin: 10px;">
                    👋 <b>Profile Settings!</b> When changing your password you will recieve and email that you changed ur password.
                </div>
                <!-- This is the alert box. If there is a notification it will be displayed using the alert -->
                <?php require_once '../../assets/html/alert.php'; alert(); ?>
                <div class="col-12 col-lg-7">
                <h2 class="h3 header">Profile</h2>
                <div class="form-row" style="max-width: 400px; margin-bottom: 10px;">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Enter first name">
                    <label for="lastname">Last name</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Enter last name">
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Update profile</button>
                </div>

                </div>

                <div class="col-12 col-lg-5">
                    <h2 class="h3 header">Current Info</h2>
                    <p class="container__text">Customer number: <b><?= $_SESSION['session_id']; ?></b></p>
                    <p class="container__text">First name: <b>invalid</b></p>
                    <p class="container__text">Last name: <b>invalid</b></p>
                    <p class="container__text">Phone-number: <b>invalid</b></p>
                    <p class="container__text">Email: <b><?= $_SESSION['session_email']; ?></b></p>
                    </p>

                    <a href="./werkplaatsplanner/" class="btn btn-primary" style='font-size: 15px;'>Change password</a>
                </div>
                
                <!-- <p class="container__text">Here is your appointment list</p> -->
            </div>
        </div>
    </div>
        
    </body>
</html>




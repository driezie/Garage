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
                array('Home', '../', 'normal'),
                array('My Orders', '../myorder', 'normal'),
                array('My Profile', '.', 'normal'),
                array('My Reviews', '../reviews', 'normal'),
                array('Logout', '?action=logout', 'normal'),
                array('Schedule your appointment', './order', 'special'),
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
                        <li><a href="../" class="active">Home</a></li>
                        <li class="active">Schedule your appointment - Step 2: My Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- Step 1 -->
        <div class="col-12 col-lg-7">
            <h2 class="h3 header">Step 1: Vehicle Information</h2>
            <div class="form-row" style="max-width: 400px; margin-bottom: 10px;">
                <label for="firstname">Please enter your valid lincense plate</label>
                <input type="text" class="form-control" name='name' id="name" placeholder="Enter lincense plate"maxlength="7">
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Next Step</button>
            </div>
        </div>
        <!-- End of Step 1 -->


        <!-- Step 2 -->
        <!-- Asks if user wants to stay logged in or log in on a new account or create a new account. -->
        <!-- <div class="col-12 col-lg-7">
            <h2 class="h3 header">Step 2: My Account</h2>
            <p class="container__text">We see that you are already logged in on <b>Officialjustdevv@gmail.com</b>. Would you like to continue or log in to another account?</p>
            <div class="form-row">
                <button type="submit" class="btn btn-primary" onclick="window.location.href='../myorder'">Continue</button>
                <button type="submit" class="btn btn-primary" onclick="window.location.href='../'">Log in on another account</button>
                <button type="submit" class="btn btn-primary" onclick="window.location.href='../'">Create a new account</button>
            </div>   
        </div> -->
        <!-- End of Step 2 -->

        <div class="col-12 col-lg-5">
            <h2 class="h3 header">Steps:</h2>
            <p class="container__text">Step 1: Vehicle Information</p>
            <p class="container__text"><b>Step 2: My Account</b></p>
            <p class="container__text">Step 3: Sort problem</p>
            <p class="container__text">Step 4: Date and time</p>
            </p>

        </div>

        <!-- <p class="container__text">Here is your appointment list</p> -->
        </div>
        </div>
    </div>
        
    </body>
</html>




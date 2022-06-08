<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../../assets/html/head.php';  
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/nav.css">
        
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
                        <li><a href="../" class="active">Dashboard</a></li>
                        <li><a href="./" class="active">My Profile</a></li>
                        <li class="active">Change password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center" >
            <div class="col-12 col-lg-9">

                <div class="alert alert-success" role="alert" style="margin: 10px;">
                    👋 <b>Password!</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <!-- This is the alert box. If there is a notification it will be displayed using the alert -->
                <?php alert_session(); ?>
                <div class="col-12 col-lg-7">
                    <h2 class="h3 header">Change password</h2>
                    <div class="form-row" style="max-width: 400px; margin-bottom: 10px;">
                        <label for="lastname">Current password</label>
                        <input type="password" class="form-control" name='oldpass' id="oldpass" placeholder="Enter current password">
                        <label for="firstname">New password</label>
                        <input type="password" class="form-control" name='newpass' id="newpass" placeholder="Enter new password">
                        <label for="lastname">Repeat new password</label>
                        <input type="password" class="form-control" name='newpass2' id="newpass2" placeholder="Enter repeated new password">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Change password</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
        
    </body>
</html>




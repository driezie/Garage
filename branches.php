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
        <title>Prices</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/nav.css">
    </head>
    <body>
    <?php
        require_once './assets/html/navbar.php';
        $array = array(
            // (Button name , Button link , Button type)
            // class types: "normal", "special", "disabled",
            'title' => 'van Franken Car Service',
            'nav' => array(
                array('Home', './', 'normal'),
                array('How does it work?', './howdoesitwork.php', 'normal'),
                array('Prices', './prices.php', 'normal'),
                array('Contact', './contact.php', 'normal'),
                array('Sign in', './login.php', 'normal'),
                array('Schedule your appointment', './order', 'special'),
            ),
        );
        createnavbar($array);
    ?>
    <div class="container" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li class="active">Branches</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center" >
            <div class="col-12 col-lg-7">
                <h2 class="h3 header">Branches</h2>
                <p class="container__text">
                lol why u visiting this page
                </p>
                <a class="btn btn-primary" href="./contact.php" role="button">Just go back...</a>

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




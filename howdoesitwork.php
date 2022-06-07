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
        <title>How does it work?</title>
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
                array('How does it work?', '#', 'normal'),
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
                        <li class="active">How does it work?</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php 

    



    ?>



    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center" >
            <div class="col-12 col-lg-7">
                <h2 class="h3 header">How does it work?</h2>
                <p class="container__text">
                You might wonder how does our service work here? Well it's actually really easy. We have a team of mechanics who are always ready to help you. You wil be able to choose multiple issues and we will find the best solution for you to fix the issue you have. 
                </p>
                <p class="container__text">
                After you put in your numberplate and sort car, you will revieve the most recommend fixes for your car. You will always keep updated by our service. This will be shown on the order page. <a href="./customer/myorder">Open here</a>
                </p>
                <a class="btn btn-primary" href="./customer/myorder/" role="button">Check your order status</a>

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




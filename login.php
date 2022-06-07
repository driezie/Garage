<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php'; 
            require_once './assets/html/head.php'; 
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Sign in</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/nav.css">
    </head>
    <body>
    <div id="navbar" class="sticky"> 
        <ul class="left" id="navfunction"> 
            <li><p><b class="title">van Franken Car Service</b></p></li> 
            <li><a href="./">Home</a></li> 
            <li><a href="./howdoesitwork.php">How does it work?</a></li> 
            <li><a href="./prices.php">Prices</a></li> 
            <li><a href="./contact.php">Contact</a></li> 
            <li><a class="special" href="#">Login</a></li> 
        </ul> 
    </div> 
    <div class="container" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li class="active">Sign in</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


        <div class="container">
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                <div class="col-12 col-lg-9">
                    <?php
                        require_once './assets/html/alert.php';
                        alert();
                    ?>
                    <h2 class="h3 header">
                    Sign in
                    </h2>
                    <p class="container__text">
                    Sign in here with your created account. Don't have an account yet? Then you must make an appointment. <a href="./werkplaatsplanner/1.voertuig/">Click here to make an appointment</a>
                    </p>
                    <form class = "login" action="./assets/actions/action.php?action=login" id='login' method="post">
                        <div class="form-row" style="max-width: 300px; margin-bottom: 10px;" >
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name='email' placeholder="Email">
                        </div>

                        <div class="form-row" style="max-width: 300px; margin-bottom: 10px;">
                                <label for="inputEmail4">Wachtwoord</label>
                                <input type="password" class="form-control" name='password' id="password" placeholder="Password">
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <footer>
            <div class="container">
            <div class="row align-items-center" >
                

                <div class="col-10 col-lg-5">
                    <h3 class="h3">
                        About us
                    </h3>
                    <p class="container__text">
                        We are a small company that offers a service for your car. We are located in the Netherlands and we are open 24/7. For any questions about the car or our service you can use our contact page to get in touch with us.
                    </p>

                    <a class="btn btn-primary" href="./contact.php" role="button">Contact us</a>
                </div>
                <div class="col-12 col-lg-3">
                    <h3 class="h3">
                        Navigation
                    </h3>
                    <p class="container__text">
                        <a href="./" >Home</a>
                    </p>
                    <p class="container__text">
                        <a href="./howdoesitwork.php">How does it work?</a>
                    </p>
                    <p class="container__text">
                        <a href="./prices.php">Prices</a>
                    </p>
                    <p class="container__text">
                        <a href="./contact.php">Contact</a>
                    </p>
                    <p class="container__text">
                        <a href="./login.php">Sign In</a>
                    </p>
                </div>

                
            </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted" style="margin: 0 auto;">
                            van Franken Car Service, Copyright &copy; 2020
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
    <script>

        <?php
        require_once './assets/js/nav.js';
        ?>

    </script>
</html>

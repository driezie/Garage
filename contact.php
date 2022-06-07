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
    </head>
    <body>
    <div class="sticky" id="myTopnav">
        <div class="left topnav" >
            <h3 class="title"><b>van Franken Car Service</b></h3>
            <a href="./">Home</a>
            <a href="./howdoesitwork.php">How does it work?</a>
            <a href="./prices.php">Prices</a>
            <a href="#">Contact</a>
            <a href="./login.php">Sign In</a>
            <a href="./werkplaatsplanner/" class="special">Schedule your appointment</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="container" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center" >
            <div class="col-12 col-lg-7">
                <h2 class="h3 header">Contact us</h2>
                <p class="container__text">
                At van Franken, we want to provide you with the best possible service. Do you have a question, comment or complaint? Do not hesitate and contact us using the form below. We will answer your message as soon as possible.
                </p>
                <a href="#form" class="btn btn-primary" style='font-size: 15px;'>Contact Form</a>
                <a href="#" class="btn btn-primary" style='font-size: 15px;'>Our branches</a>
            </div>
            <div class="col-12 col-lg-5">
            <img class="img-fluid" src="./assets/img/working-man.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px"  >
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center" >
            <div class="col-12 col-lg-10">
                <h2 class="h3 header">Contact Form</h2>
                <form class="form" action="contact.php" method="post">
                    <div class="row gutters-3">
                    <div class="col-12 col-md-4">
                        <label for="name">First name</label>
                        <!-- est -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="First name" required>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="email">Last name</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Last name" required>
                    </div>
                    <div class="col-12 col-md-4 ">
                        <label for="email">E-mail address*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail address*" required>
                    </div>
                    <!-- frugioewjkghfbodird -->
                    <div class="col-12 col-md-4 ">
                        <label for="email">Phone number</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Phone number" required>
                    </div>
                    <br>
                    <div class="col-12 col-md-12">
                        <label for="message">Where can we help you with?</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 15px; margin-top: 10px !important;">Send</button>
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
</html>




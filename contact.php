<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './assets/html/head.php';
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Contact</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>

<body>
    <?php
    $array = array(
        // (Button name , Button link , Button type)
        // class types: "normal", "special", "disabled",
        'title' => 'van Franken Car Service',
        'nav' => array(
            array('Home', './', 'normal'),
            array('How does it work?', './howdoesitwork.php', 'normal'),
            array('Prices', './prices.php', 'normal'),
            array('Contact', '#', 'normal'),
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
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center">
            <div class="col-12 col-lg-7">
                <h2 class="h3 header">Contact us</h2>
                <p class="container__text">
                    At van Franken, we want to provide you with the best possible service. Do you have a question, comment or complaint? Do not hesitate and contact us using the form below. We will answer your message as soon as possible.
                </p>
                <a href="#form" class="btn btn-primary" style='font-size: 15px;'>Contact Form</a>
                <a href="./branches.php" class="btn btn-primary" style='font-size: 15px;'>Our branches</a>
            </div>
            <div class="col-12 col-lg-5">
                <img class="img-fluid" src="./assets/img/working-man.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center">
            <div class="col-12 col-lg-10">
                <h2 class="h3 header">Contact Form</h2>
                <form class="form" action="contact.php" method="post" id="form">
                    <div class="row gutters-3">
                        <div class="col-12 col-md-4">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
                        </div>
                        <div class="col-12 col-md-4 ">
                            <label for="email">E-mail address*</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail address*" required>
                        </div>
                        <!-- frugioewjkghfbodird -->
                        <div class="col-12 col-md-4 ">
                            <label for="number">Phone number</label>
                            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone number" required>
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
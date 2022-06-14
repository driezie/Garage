<!DOCTYPE html>
<html>

<head>
    <?php
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
    <?php
    // Login the pagina
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'register') {
            try_register();
        }
    }


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
                        <li class="active">Sign up</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row gutters-4 gutters-lg-6 align-items-center">
            <div class="col-12 col-lg-9">
                <?php
                alert_session();
                ?>
                <div class="alert alert-success" role="alert" style="margin: 10px;">
                    <b>Data:</b>
                    <?php
                    echo '<pre>';
                    print_r($_SESSION['data']);
                    echo '</pre>';
                    ?>
                </div>
                <h2 class="h3 header">
                    Sign up
                </h2>
                <form class="register" action="register.php?action=register" id='login' method="post">
                    <div class="form-group">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter phonenumber" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm password</label>
                        <input type="password" class="form-control" id="password" name="password2" placeholder="Password" required>
                    </div>
                    <!-- location street and streetnumber -->
                    <div class="form-group">
                        <label for="street">adress</label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="Enter street" required>
                    </div>
                    <!-- location zipcode and city -->
                    <div class="form-group">
                        <label for="zipcode">Plaats</label>
                        <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter location" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
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
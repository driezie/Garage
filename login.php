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
        if ($_GET['action'] == 'login') {
            try_login();
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
            array('Sign in', '#', 'normal'),
            array('Schedule your appointment', './order/?step=1', 'special'),
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
                        <li class="active">Sign in</li>
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
                <h2 class="h3 header">
                    Sign in
                </h2>
                <p class="container__text">
                    Sign in here with your created account. Don't have an account yet? Please register using a new account <a href="./register.php">here</a>.
                </p>
                <form class="login" action="login.php?action=login" id='login' method="post">
                    <div class="form-row" style="max-width: 300px; margin-bottom: 10px;">
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
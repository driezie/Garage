<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php'; 
            require_once './assets/html/head.php'; 
        ?>
        <title>Home</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="main-header__nav">
            <div class="row">
                <a href="index.php">
                    <img class="logo__image" src="./img/logo.png" alt="logo van de website">
                </a>
            </div>
            <div class="main-header__nav-menu">
                <ul>
                    <li><a href="#">Hoe werkt het?</a></li>
                    <li><a href="#">Prijzen</a></li>
                    <li><a href="#">Onze Garage</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./register.php" class="button__special">Registreer</a></li>
                </ul>
            </div>
        </div>
        <div class="login-container">
            <p class="alert green">
                Welkom terug!
            </p>
            <h2 class="h3 header">
                Inloggen
            </h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">E-mailadres</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Aanmelden" class="button__special">
                </div>
            </form>
            <p>Nieuw bij van Franken? <a class="btn btn-primary" href="index.php" role="button">Maak een gratis account</a></p>

        </div>
    </body>
</html>
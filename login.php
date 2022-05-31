<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php'; 
            require_once './assets/html/head.php'; 
        ?>
        <title>Inloggen</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Link</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Plan een onderhoudsbeurt</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


        <div class="login-container">
            <div class="alert alert-success" role="alert">
                Welkom terug!
            </div>
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
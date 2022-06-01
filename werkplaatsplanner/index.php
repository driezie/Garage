<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../../config.php'; 
            require_once '../assets/html/head.php'; 
        ?>
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <div class="planner-progress sticky">
    <ul>
        <li class='step-disabled'>
            <a href="../">
                <h3>Go Back</h3>
                <p><b>Return to homepage</b></p>
            </a>
        </li>
        <li class='step-active'>
            <a href="#news">
                <h3>Step 1</h3>
                <p><b>User information</b></p>
            </a>
        </li>

        <li>
            <a href="#news">
                <h3>Step 2</h3>
                <p><b>Vehicle Information</b></p>
            </a>
        </li>
        <li>

            <a href="#contact">
                <h3>Step 3</h3>
                <p><b>Wat is het merk van je auto?</b></p>
            </a>
        </li>
        <li>
            <a href="#about" >
                <h3>Step 3</h3>
                <p><b>Wat is het merk van je auto?</b></p>
            </a>
        </li>
    </ul>

    </div>



        

        <div class="container" style="margin-top: 100px">

            <h2 class="h2 smallheader">
                Stap 4
            </h2>
            <p class="container__text">
            Hier plan je gemakkelijk en snel het onderhoud van jouw auto in een van onze werkplaatsen. Het is zo gepiept! Binnen 24 uur bevestigen wij je afspraak per mail of telefoon.
            </p>
            <p class="text">Log in met uw account</p>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputEmail4">Wachtwoord</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Aanmelden</button>
                </div>
            </form>
            </div>

   

        
    </body>

</html>




<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../../../config.php'; 
            require_once '../../assets/html/head.php'; 
        ?>
        <title>Home</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="main-header__nav">
            <div class="row">
                <a href="../">
                    <img class="logo__image" src="./img/logo.png" alt="logo van de website">
                </a>
                <div class="main-header__nav-menu">
                <ul>
                    <li><a class="nav-link" href="#">Hoe werkt het?</a></li>
                    <li><a class="nav-link" href="#">Prijzen</a></li>
                    <li><a class="nav-link" href="#">Onze Garage</a></li>
                    <li><a class="nav-link" href="#">Contact</a></li>
                    <li><a class="nav-link special" href="#">Plan uw afspraak</a></li>
                </ul>
            </div>
            </div>
            
        </div>

        <div class="container">
            <h2 class="h3 header">
                Welkom in onze werkplaats
            </h2>
            <h2 class="h2 smallheader">
                Stap 3
            </h2>
            <p class="container__text">
            Hier plan je gemakkelijk en snel het onderhoud van jouw auto in een van onze werkplaatsen. Het is zo gepiept! Binnen 24 uur bevestigen wij je afspraak per mail of telefoon.
            </p>
            <p class="text">Kies de gewenste datum</p>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>31/05/2022</option>
                <option>01/06/2022</option>
                <option>01/06/2022</option>
                <option>01/06/2022</option>
            </select>

            <!-- date picker -->
            <p class="text">Kies de gewenste tijd</p>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>12:00</option>
                <option>12:30</option>
                <option>13:00</option>
                <option>13:30</option>
                <option>14:00</option>
                <option>14:30</option>
                <option>15:00</option>
                <option>15:30</option>
                <option>16:00</option>
                <option>16:30</option>
                <option>17:00</option>
                <option>17:30</option>
            </select>

            <br><br>
            <a class="btn btn-primary" href="../4.gegevens/" role="button">Volgende stap</a>
        </div>
    </body>
    <script>
        /* -- Sticky Navbar -- */
        const header = document.getElementsByClassName('main-header__nav')[0];
        
        function stickyNavbar() {
            header.classList.toggle('scrolled', window.scrollY > 0);
            // console.log(window.scrollY);
        }

        stickyNavbar();
        window.addEventListener('scroll', stickyNavbar);

        /* -- END OF Sticky Navbar -- */

    </script>
</html>




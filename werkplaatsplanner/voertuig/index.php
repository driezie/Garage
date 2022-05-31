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
                Stap 1
            </h2>
            <p class="container__text">
            Hier plan je gemakkelijk en snel het onderhoud van jouw auto in een van onze werkplaatsen. Het is zo gepiept! Binnen 24 uur bevestigen wij je afspraak per mail of telefoon.
            </p>
            <p>Wat is het merk van je auto?</p>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Volkswagen</option>
                <option value="1">Audi</option>
                <option value="2">Volvo</option>
            </select>


            <p class="text">Type auto</p>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Volkswagen 1</option>
                <option selected>Volkswagen 2</option>
                <option selected>Volkswagen 3</option>
                <option selected>Volkswagen 4</option>
                <option selected>Volkswagen 5</option>
                <option selected>Audi 1</option>
                <option selected>Audi 2</option>
                <option selected>Audi 3</option>
                <option selected>Audi 4</option>
                <option selected>Audi 5</option>
                <option selected>Audi 6</option>
                <option selected>Volvo 1</option>
                <option selected>Volvo 2</option>
                <option selected>Volvo 3</option>
                <option selected>Volvo 4</option>
                <option selected>Volvo 5</option>
                <option selected>Volvo 6</option>
            </select>
            <br><br>
            <a class="btn btn-primary" href="../onderhoud/" role="button">Volgende stap</a>
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




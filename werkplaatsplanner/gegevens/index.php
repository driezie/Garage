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
   
  
</form>

        
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



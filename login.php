<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php'; 
            require_once './assets/html/head.php'; 
            
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Home</title>
        <link rel="stylesheet" href="./css/style.css">
        
    </head>
    <body>
    <div class="sticky" id="myTopnav">
        <div class="left topnav" >
            <h3 class="title"><b>van Franken Auto Service</b></h3>
            <a href="./">Home</a>
            <a href="#">Hoe werkt het?</a>
            <a href="#">Prijzen</a>
            <a href="#">Onze Garage</a>
            <a href="#">Contact</a>
            <a href="#">Aanmelden</a>
            <a href="#" class="special">Plan uw afspraak</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div> 
    </div>
        


        <div class="container" style="margin-top: 100px">
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                <div class="col-12 col-lg-9">
                    <?php
                        require_once './assets/html/alert.php';



                    ?>

                    <h2 class="h3 header">
                    Aanmelden
                    </h2>
                    <p class="container__text">
                    Log hier in met uw aangemaakte account. Heeft u nog gee account? Dan moet u een afspraak maken. <a href="./werkplaatsplanner/1.voertuig/">klik hier om een afspraak te maken</a>
                    </p>
                    <form class = "login" action="./assets/actions/action.php?action=login" id='login' method="post">
                        <div class="form-row" style="max-width: 300px; margin-bottom: 10px;" >
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name='email' placeholder="Email">
                        </div>

                        <div class="form-row" style="max-width: 300px; margin-bottom: 10px;">
                                <label for="inputEmail4">Wachtwoord</label>
                                <input type="password" class="form-control" name='password' id="password" placeholder="password">
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-primary">Aanmelden</button>
                        </div>
                    </form>
                </div>
            </div>
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




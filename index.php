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
            <a href="#">Home</a>
            <a href="#">Hoe werkt het?</a>
            <a href="#">Prijzen</a>
            <a href="#">Onze Garage</a>
            <a href="#">Contact</a>
            <a href="./login.php">Aanmelden</a>
            <a href="#" class="special">Plan uw afspraak</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div> 
    </div>
        <div class="image_container">
            <img class="container_image" src="./assets/img/onderhoud_banner_3.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center;" >
            <div class="centered"> 
            <h1 class="" style='padding: 20px 0 20px 0; font-size: 60px; line-height: 60px;'>van Franken. Samen vooruit.</h1>
            <div class="container__lower" style= 'text-align: center; position: relative; z-index: 100;'>
            <a href="./werkplaatsplanner/1.voertuig/" class="container_button" style='font-size: 17px;'><b>Plan onderhoudsbeurt</b></a>
            <span class="container_text" style='font-size: 17px; padding-left: 10px; padding-right: 10px;'><b> | </b></span>
                <a href="index.php" class="container_button" style='font-size: 17px;'><b>Bekijk reviews</b></a>
            </div>

            </div>
            
        </div>


        <div class="container" >
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                <div class="col-12 col-lg-9">
                    <div class="alert alert-success" role="alert" style="margin: 10px;">
                        👋 <b>Welkom!</b> Deze website is gemaakt door <b>Jelte Cost</b>, <b>Harm kraats</b> & <b>Olaf</b>.
                    </div>
                    <h2 class="h3 header">
                    Waarom een onderhoudsbeurt bij van Franken?
                    </h2>
                    <p class="container__text">
                        Voor het beste onderhoud aan uw wagen gaat u naar van Franken. Laat je auto regelmatig onderhouden en voorkom zo de kans op dure reparaties.
                    </p>
                    <div class="container__list">
                        <p>✅  Vooraf een duidelijke prijs voor je onderhoudsbeurt</p>
                        <p>✅  Gratis pechhulp bij onderhoud</p>
                        <p>✅  Gratis leenfiets</p>
                        <p>✅  Korting op toekomstige reparaties</p>
                        <p>✅  Altijd recht op vervangend vervoer tegen servicetarief</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                <div class="col-12 col-lg-5">
                    <img class="img-fluid" src="./assets/img/working-man.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px"  >

                </div>

                <div class="col-12 col-lg-7">
                    <h2 class="h3 header">Kleine beurt</h2>
                    <p class="container__text">
                        Voor het beste onderhoud aan uw wagen gaat u naar van Franken. Laat je auto regelmatig onderhouden en voorkom zo de kans op dure reparaties.
                    </p>
                    <h3 class="h4 smallheader">
                        Wanneer een kleine beurt?
                    </h3>
                    <p class="container__text">
                        Uw auto heeft onderhoud nodig? Dan is een kleine onderhoudsbeurt het juiste moment om te doen. Dit is als u minder dan 15.000 kilometer heeft gereden of uw auto is minder dan 2 jaar. Als u langer dan 15.000 kilometer heeft gereden, dan past een grotere onderhoudsbeurt meer bij u.
                    </p>
                    <a href="./werkplaatsplanner/1.voertuig/" class="btn btn-primary" style='font-size: 15px;'>Plan een kleine beurt</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gutters-4 gutters-lg-6 align-items-center" >
                

                <div class="col-12 col-lg-7">
                    <h2 class="h3 header">
                        Grote beurt
                    </h2>
                    <p class="container__text">
                        Heeft u meer dan 15.000 kilometer gereden? Dan is een grote onderhoudsbeurt het juiste moment om te doen. Onze vakkundige moneurts weten alles van uw Franken auto en zullen uw auto zo snel mogelijk repareren. U kunt altijd een gratis leenfiets lenen of een auto lenen tegen servicetarief.
                    </p>
                    <h3 class="h4 smallheader">
                        Wanneer een grote beurt?
                    </h3>
                    <p class="container__text">
                        Is uw auto ouder dan 2 jaar of heeft meer dan 15.000 kilometer gereden? Dan is een grote onderhoudsbeurt het juiste moment om te doen. Wij als van Franken vinden het belangrijk dat elke auto elke 5 jaar een servicebeurt nodig heeft.
                    </p>
                    <a class="btn btn-primary" href="./werkplaatsplanner/1.voertuig/?onderhoud=grotebeurt" role="button">Plan een grote beurt</a>
                </div>

                <div class="col-12 col-lg-5">
                    <img class="img-fluid" src="./assets/img/working-man-2.png" alt="banner" loading="lazy" style="width:100%; background-attachment: fixed; background-position: center; border-radius: 20px"  >

                </div>
            </div>
        </div>




        <div class="container">
            <h2 class="h3 header">
                Reviews
            </h2>
            <p class="container__text">
                Hier hebben wij voor u een aantal reviews over onze diensten. 
            </p>
            <a class="btn btn-primary" href="index.php" role="button">Klik voor meer reviews</a>
            <div class="row gutters-4 gutters-lg-3 align-items-center" >
            
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        J. van het paard
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                        Goede service met betaalbare prijzen
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        H. Kleefman
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                        Uitstkend
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <h3 class="review__name">
                        P. Meindertsma
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                    Afgelopen vrijdagavond mijn Volkswagen naar Jelte gebracht om de klampen te laten vervangen. Ik gaf aan niet eerder te kunnen dan 17:30 uur en dat was geen probleem. Met een uur zou deze klaar zijn. Jelte dankjewel en tot de volgende keer.
                    </p>
                </div>
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




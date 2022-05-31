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
                <div class="main-header__nav-menu">
                <ul>
                    <li><a class="nav-link" href="#">Hoe werkt het?</a></li>
                    <li><a class="nav-link" href="#">Prijzen</a></li>
                    <li><a class="nav-link" href="#">Onze Garage</a></li>
                    <li><a class="nav-link" href="#">Contact</a></li>
                    <li><a class="nav-link special" href="./werkplaatsplanner/voertuig/">Plan uw afspraak</a></li>
                </ul>
            </div>
            </div>
            
        </div>

        <div class="container">
            <img class="container__image" src="./assets/img/onderhoud_banner.png" alt="banner" loading="lazy" style="max-width: 10rem">
            <div class="row">
                <h1 class="container__title">Wat wij doen</h1>
                <p class="container__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt consectetur, ipsum nunc euismod nisi, eu tincidunt nisl nunc euismod nisi.
                </p>
                <div class="container__lower">
                <a href="./werkplaatsplanner/voertuig/" class="container__button">Plan onderhoudsbeurt</a>
                    <a href="index.php" class="container__button">Bekijk reviews</a>
                </div>
                
            </div>
        </div>

        <div class="container">
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


        <div class="container">
            <h2 class="h3 header">
                Kleine beurt
            </h2>
            <p class="container__text">
                Voor het beste onderhoud aan uw wagen gaat u naar van Franken. Laat je auto regelmatig onderhouden en voorkom zo de kans op dure reparaties.
            </p>
            <h3 class="h4 smallheader">
                Wanneer een kleine beurt?
            </h3>
            <p class="container__text">
                Uw auto heeft onderhoud nodig? Dan is een kleine onderhoudsbeurt het juiste moment om te doen. Dit is als u minder dan 15.000 kilometer heeft gereden of uw auto is minder dan 2 jaar. Als u langer dan 15.000 kilometer heeft gereden, dan past een grotere onderhoudsbeurt meer bij u.
            </p>
            <a class="btn btn-primary" href="./werkplaatsplanner/voertuig/" role="button">Plan een kleine beurt</a>
        </div>


        <div class="container">
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
                Is ur auto ouder dan 2 jaar of heeft meer dan 15.000 kilometer gereden? Dan is een grote onderhoudsbeurt het juiste moment om te doen. Wij als van Franken vinden het belangrijk dat elke auto elke 5 jaar een servicebeurt nodig heeft.
            </p>
            <a class="btn btn-primary" href="./werkplaatsplanner/voertuig/" role="button">Plan een grote beurt</a>
        </div>

        <div class="container">
            <h2 class="h3 header">
                Reviews
            </h2>
            <p class="container__text">
                Hier hebben wij voor u een aantal reviews over onze diensten.
            </p>
            <div class="review container__list">
                <div class="review-container">
                    <h3 class="review__name">
                        J. van het paard
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                        Goede service met betaalbare prijzen
                    </p>
                <div>
                <div class="review-container">
                    <h3 class="review__name">
                        H. Kleefman
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                        Uitstkend
                    </p>
                <div>
                <div class="review-container">
                    <h3 class="review__name">
                        P. Meindertsma
                    </h3>
                    <span class="review__stars" >
                        ⭐⭐⭐⭐⭐
                    </span>
                    <p class="review__text">
                    Afgelopen vrijdagavond mijn Volkswagen naar Jelte gebracht om de klampen te laten vervangen. Ik gaf aan niet eerder te kunnen dan 17:30 uur en dat was geen probleem. Met een uur zou deze klaar zijn. Jelte dankjewel en tot de volgende keer.
                    </p>
                <div>

            </div>
            <a class="btn btn-primary" href="index.php" role="button">Klik voor meer reviews</a>
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




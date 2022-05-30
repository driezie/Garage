# Project W6 - Garage


Een garagebedrijf voert onderhoudsbeurten uit aan auto’s. De laatste jaren is de garage flink gegroeid, en het aantal medewerkers natuurlijk ook. Er werken 2 parttime receptionisten, 1 boekhouder, 6 verkopers, en zojuist is de 4e monteur aangenomen. Met zoveel verschillende medewerkers is het niet alleen lastig om te zorgen dat ze hun tijd efficiënt besteden, maar ook dat er geen miscommunicatie optreed. 
Jouw team (je werkt in een duo) is gevraagd een applicatie ontwerpen/bouwen die de auto van een klant volgt tijdens werkzaamheden in een garage. Van het moment dat de klant een afspraak maakt tot het moment dat de klant zijn/haar auto weer komt ophalen ophalen en de factuur betaalt. 
De applicatie kent een webomgeving voor de klanten en een kantooromgeving (C#) voor de receptie en de werkplaats. 
Beide applicaties maken gebruik van de zelfde MySQL database. 
Doe zelf onderzoek naar het “garageproces” en realiseer dit in een applicatie (overleg dit goed met de docent). 

# EISEN
•    Gebruik 1 database.
•    De dashboard applicatie voor de klant, receptie, werkplaats en magazijn.

Gegevens welke door het garagebedrijf worden geregistreerd staan op de factuur hieronder.

## Doelen

Je analyseert gegevens en werkt dit uit naar een front-end voor klanten en bruikbare informatie voor de garagehouder.
Je programmeert een applicatie voor verschillende rollen.
Je werkt samen met een andere discipline aan een gemeenschappelijk product.
Zorg voor een ruim gevulde database met artikelen, prijzen en reparaties.

## Beoordeling

Bij de beoordeling zal worden gelet op wat we in de lessen behandeld hebben.

•    Object georiënteerd programmeren
•    Veilige manier van wachtwoorden opslaan
•    Aparte data laag en/of gebruik van MVC
•    De database user heeft beperkte rechten
•    Zorg voor voldoende testgegevens
•    De site is niet kwetsbaar voor SQL injectie of XSS
​

## Benodigde kennis

In dit project maak je gebruik van de volgende vakken en technieken:
•    Analyse van gegevens
•    Database design
•    SQL
•    PHP
•    JavaScript
•    C#
•    Laravel
 

## Functionaliteit

Website voor klanten: 
•    Registreren / inloggen
•    Afspraak plannen met datumpicker. Al gekozen datums zijn niet meer beschikbaar
•    Reparatie / keuring aanvragen met keuze uit standaard handelingen en eigen opmerkingen
•    Status bekijken, inclusief opmerkingen en de factuur.
•    Factuur betalen. Dit is alleen een simulatie door op een knop te drukken, geen hele betaalomgeving.
•    Beoordeling achterlaten (rating / review), zichtbaar voor andere klanten.

Applicatie voor de garage:
•    Receptionist bevestigt de afspraak en kan een overzicht van alle afspraken per dag zien. Ook wijst deze rol de afspraken toe aan een monteur.
•    De monteur ziet de afspraken die aan hem zijn toegewezen.
•    De monteur slaat bij de afspraak de werkzaamheden en materialen op. Dit zijn standaard handelingen uit een dropdown box.
•    De monteur kan een reparatie afronden.
•    De receptionist ziet de afgeronde reparaties. De receptionist controleert de status en informeert de klant wanneer de auto kan worden opgehaald. Hierbij kunnen opmerkingen worden geplaatst.
•    De receptionist ziet of de factuur is betaald en controleert dit bij het ophalen van de auto. Dan wordt de status omgezet in afgerond.
•    De eigenaar van de garage kan een overzicht opvragen per maand. Hierin staan de uitgevoerde reparaties en de omzet. Ook de totale omzet van die maand wordt vermeld. Een grafiek maakt het aantal gewerkte uren en de gedraaide omzet over de afgelopen 6 maanden inzichtelijk.

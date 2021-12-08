<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/support.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<div class="px-5 py-5 text-left herobillede">
    <div class="herosek">
        <h1 class="imgover">Support</h1>
    </div>
</div>


<div class="container-fluid">
    <div class="row">

        <div class="sektion1 col-sm-12 col-md-12 col-lg-8">
            <div class="contact-section">
                <p class="ksekover">Kontakt mig herunder</p>
                <div class="line1"></div>


                <p class="ksektekst">Brug venligst kontaktformularen herunder for at kontakte mig med diverse spørgsmål.
                    Jeg vender tilbage med svar hurtigst muligt.
                    Du er også velkommen til at ringe eller sende en sms.</p>

                <form class="contact-form" action="#" method="post">
                    <input type="text" class="contact-form-text" aria-label="" placeholder="Dit navn">
                    <input type="email" class="contact-form-text"  aria-label="" placeholder="Email">
                    <input type="text" class="contact-form-text"  aria-label="" placeholder="Telefon nr.">
                    <textarea class="contact-form-text"  aria-label="" placeholder="Besked"></textarea>
                    <input type="submit" class="contact-form-btn" value="SEND">
                </form>
            </div>


        </div>
        <div class="sektion2 col-sm-12 col-md-12 col-lg-4">
            <div class="kontaktinfo">
                <p class="infoover">Kontakt information</p>
                <div class="line2"></div>
                <p class="infotekst">+45 11 22 33 44</p>
                <p class="infotekst2">Hestemøllestræde 2 1461 København K</p>
                <a href="#" class="infoteks3"><p>tekbas425@gmail.com</p></a>
            </div>
            <p class="åbenover">Åbningstider</p>
            <div class="line3"></div>
            <p class="åbentekst">Mandag - Tirsdag: 09.00 - 17.00</p>
            <p class="åbentekst">Onsdag - Fredag: 09.00 - 19.00</p>
            <p class="åbentekst">Lørdag: 11.00 - 15.30</p>
            <p class="åbentekst">Søndag: Lukket</p>

        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
    <path fill="#f01012" fill-opacity="1" d="M0,128L1440,32L1440,320L0,320Z"></path>
</svg>

<div class="omreplay">
    <p class="replayover">Om Replay</p>
    <div class="replayline"></div>
    <p class="replaytekst">Vi er 4 gutter fra Lolland-Falster, som er gaming entusiaster. Vi kom på ideen om genbrugte gaming computere, da vi stod til at skulle Opgradere vores computere. Vi måtte dog konkludere hvor svært det var at bygge en gaming PC i dag, med det store resource mangel. Vi tænkte at der var mange med samme problem, og valgte derfor at hjælpe vores
        medgamere. </p>
</div>



<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
    <path fill="#f01012" fill-opacity="1" d="M0,64L1440,160L1440,0L0,0Z"></path>
</svg>

<div class="omholdet">
    <p class="overholdet">Mød holdet</p>
    <div class="lineholdet"></div>

</div>


<div class="kortsektion h-50">
    <div class="container">
        <div class="row d-flex justify-content-evenly">
            <div class="col-sm-12 col-md-6 col-lg-3 p-2 profile mb-3">
                <div class="card rounder border-0 bg-transparent">
                    <img class="card-img-top rounder" src="Image/Joachim.jpg">
                    <div class="p-2">
                        <h5 class="text-left card-title text-uppercase">Joachim Berner</h5>
                        <div class="row text-left">
                                <div class="col-12">
                                    <a class="px-1 text-decoration-none text-black"><i class="fas fa-envelope me-2 "></i>contact@bnopone.dk</a>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 p-2 profile mb-3">
                <div class="card rounder border-0 bg-transparent">
                    <img class="card-img-top rounder" src="Image/Oliver.jpg">
                    <div class="p-2">
                        <h5 class="text-left card-title text-uppercase">Oliver Krüger</h5>
                        <div class="row text-left">
                                <div class="col-12">
                                    <a class="px-1 text-decoration-none text-black"><i class="fas fa-envelope me-2 "></i>contact@properathlete.com</a>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 p-2 profile mb-3">
                <div class="card rounder border-0 bg-transparent">
                    <img class="card-img-top rounder" src="Image/Victor.jpg">
                    <div class="p-2">
                        <h5 class="text-left card-title text-uppercase">Victor Frandsen</h5>
                        <div class="row text-left">
                            <div class="col-12">
                                <a class="px-1 text-decoration-none text-black"><i class="fas fa-envelope me-2 "></i>contact@victorfrandsen.dk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 p-2 profile">
                <div class="card rounder border-0 bg-transparent">
                    <img class="card-img-top rounder" src="Image/Ømer.jpg">
                    <div class="p-2">
                        <h5 class="text-left card-title text-uppercase">Ømer Tekbas</h5>
                        <div class="row text-left">
                            <div class="col-12">
                                <a class="px-1 text-decoration-none text-black"><i class="fas fa-envelope me-2 "></i>contact@ømertekbas.dk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

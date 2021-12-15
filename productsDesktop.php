<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="css/forside.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/51ba2cda25.js" crossorigin="anonymous"></script> <script src="https://kit.fontawesome.com/51ba2cda25.js" crossorigin="anonymous"></script>
    <link href="css/footer.css" rel="stylesheet" type="text/css">

    <link href="css/navbar.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<?php include 'includes/navbar.php'; ?>

<div class="heroimage">
    <img src="Image/desk.png" class=" w-100 mobil"  alt="...">
    <img src="Image/Oliver-Hero-Image.png" class=" w-100 desk"  alt="...">

</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
    <path fill="#f01012" fill-opacity="1" d="M0,128L1440,32L1440,320L0,320Z"></path>
</svg>


    <div class="gameon-section">
        <div class="gameon-border">
        <h2>desktop</h2>
        <p>Replay.dk sælger primært brugte Gaming computere, hvor komponenterne er blevet taget fra flere computere og samlet til en super PC. Udstyret har gennemgået en streng kvalitetskontrol og de brugte computere er renset, reinstalleret og opdateret med de seneste Drivers.</p>
        </div>
    </div>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
    <path fill="#f01012" fill-opacity="1" d="M0,64L1440,160L1440,0L0,0Z"></path>
</svg>




<div class="container p-5">
    <div class="products">
        <div class="filter p-5"></div>


        <div class="items">
            <!-- Her vises musikken -->
        </div>
    </div>
</div>



<div class="container">
    <div class="prev/next ">
<i class="fas fa-chevron-left icon "></i>
        <div class="numberBox">
            <div class="number">1</div>
        </div>
<i class="fas fa-chevron-right icon2"></i>
    </div>
</div>

<div class="image_bund_2 ">
    <img src="Image/tilbehør-mobil2.png" class=" mobil"  alt="...">
    <img src="Image/tilbehør.png" class=" w-100 desk"  alt="tilbehørBillede">
    <div class="hero-text-bund">
        <button class="text-white">se mere</button>
    </div>
</div>





<?php include 'includes/footer.php'; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    import Products from "./js/products";

    const products = new Products();


</script>



</body>
</html>

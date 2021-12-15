<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/forside.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/51ba2cda25.js" crossorigin="anonymous"></script> <script src="https://kit.fontawesome.com/51ba2cda25.js" crossorigin="anonymous"></script>
    <link href="css/footer.css" rel="stylesheet" type="text/css">

    <link href="css/navbar.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<?php include 'includes/navbar.php'; ?>

<div class="px-5 py-5 text-left herobilledeDesk">
    <div class="herosek"></div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
    <path fill="#f01012" fill-opacity="1" d="M0,128L1440,32L1440,320L0,320Z"></path>
</svg>

<div class="gameon-section">
    <div class="container">
        <div class="d-flex justify-content-center" style="height: 400px">
            <div class="align-self-center border-for-text p-5">
                <h1 class="text-center text-white" style="font-family: 'Red Hat Display',serif" >Game On</h1>
                <div class="badge text-wrap text-center" style="width: 30rem; font-family: 'Poppins',serif; font-size: xx-large">
                    Med en computer fra os
                    er du klar til at game på
                    nul komma fem, plus er
                    alle vores computere og
                    komponenter testet,
                    opdateret og klar til kamp
                </div>
            </div>
        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
    <path fill="#f01012" fill-opacity="1" d="M0,64L1440,160L1440,0L0,0Z"></path>
</svg>




<div class="container p-5">
    <div class="products  ">
        <div class="filter p-5"></div>


        <div class="items ">
            <!-- Her vises musikken -->
        </div>
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

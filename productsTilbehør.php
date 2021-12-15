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


<div class="px-5 py-5 text-left herobilledeTilbe">
    <div class="herosek"></div>
</div>


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
    import Accessories from "./js/tilbehør";

    const products = new Accessories();


</script>



</body>
</html>


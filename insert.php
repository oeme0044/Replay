    <?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;

    if (!empty($file["prodImage"]["tmp_name"])) {
        move_uploaded_file($file["prodImage"]["tmp_name"], "uploads/" . basename($file["prodImage"]["name"]));

    }


    $sql = "INSERT INTO produkter (prodNavn, prodPrismrd, prodProcesser, prodGrafikkort, prodRam,  prodImage VALUES 
                                        (:prodNavn, :prodPrismrd, :prodProcesser, :prodGrafikkort, :prodRam,  :prodImage)";
    $bind = [
        ":prodNavn" => $data["prodNavn"],
        ":prodPrismrd" => $data["prodPrismrd"],
        ":prodProcesser" => $data["prodProcesser"],
        "prodGrafikkort" => $data["prodGrafikkort"],
        "prodRam" => $data["prodRam"],
        "prodImage" => (!empty($file["prodImage"]["tmp_name"])) ? $file["prodImage"]["name"] : NULL,
    ];

    $db->sql($sql, $bind, false);

    header("Location: insert.php?status=1");
    exit;

}


?>


<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Replay Produkt insert</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/h4ru18k2oqic6a1dmyhtku0v5gp4y1lc52kb2r4saf99fguv/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

</head>

<body>


<nav class="navbar bg-dark navbar-light justify-content-between p-5 mb-5">
    <a class="navbar-brand fw-bold text-white"><h2>Produkter
            <small class="text-muted">Indsæt Produkter Her</small>
        </h2></a>

    <form class="form-inline">
        <a href="">
            <div class="btn btn-outline-light btn-floating btn-rounded m-1">
                <i class="fas fa-home">Return Home</i>
            </div>
        </a>
    </form>
</nav>


<div class="container mb-4 p-4 bg-dark bg-opacity-10 rounded-2 text-white ">

    <hr class="p-1">

    <form class="m-5" method="post" action="insert.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="prodNavn">Produkt Navn</label>
                    <input class="form-control" type="text" name="data[prodNavn]" id="prodNavn"
                           placeholder="Navn på Produktet" value="">
                </div>
            </div>

            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="prodPrismrd">Pris pr. mrd i Kroner</label>
                    <input class="form-control" type="number" name="data[prodPrismrd]" id="prodPrismrd"
                           placeholder="Pris på Produktet" value="">
                </div>
            </div>


            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="prodProcesser">Processer Type</label>
                    <input class="form-control" type="text" name="data[prodProcesser]" id="prodProcesser"
                           placeholder="Hvilken type Processer har den?" value="">
                </div>
            </div>


            <div class="col-12 col-md-4 mb-4">
                <div class="form-group">
                    <label for="prodGrafikkort">Grafikkort Type</label>
                    <input class="form-control" type="text" name="data[prodGrafikkort]" id="prodGrafikkort"
                           placeholder="Hvilken type Grafikkort har den?" value="">
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="form-group">
                    <label for="prodRam">Ram Type og Mængde</label>
                    <input class="form-control" type="text" name="data[prodRam]" id="prodRam"
                           placeholder="Hvilken type Ram og Mængde har den?" value="">
                </div>
            </div>



        </div>
</div>





<div class="col-12">
    <label class="form-label" for="prodImage">Produkt Billede</label>
    <input type="file" class="form-control" id="prodImage" name="prodImage">
</div>


<hr class="p-1 mt-3">


<div class="col-3 ">
    <button class=" btn btn-primary text-white-50" type="submit" id="btnSubmit" data-toggle="modal"
            data-target="#exampleModal">Opret Produkt
    </button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert Completed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" type="button" href="insert.php" role="button">Insert New Artist</a>
            </div>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
    });

    const url = new URL(window.location.href);
    const status = url.searchParams.get("status");

    const modal = document.querySelector('.modal');
    const bsModal = new bootstrap.Modal(modal);

    modal.addEventListener('hide.bs.modal', () => {
        window.history.replaceState(null, null, window.location.pathname);
    })

    if (status === "1") {
        bsModal.show();
    }

</script>


</body>


</html>


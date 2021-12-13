<?php
require "settings/init.php";

if (!empty($_GET["type"])) {
    if ($_GET["type"] == "slet"){
        $id = $_GET["id"];

        $db->sql("DELETE FROM produkter WHERE prodId = :prodId", [":prodId"=>$id], false);

        header("Location: index.php");

    }

}


include 'includes/navbar.php';
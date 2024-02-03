<?php
include_once("queries/queries.php");

if ($_GET) {

    $id = $_GET["id"];
    $table = $_GET["table"];
    if ($id != "" && $table != "") {
        deleteById($id, $table);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
    }
}













<?php
include_once("queries/queries.php");

if ($_GET) {

    $id = $_GET["id"];
    $page = $_GET["page"];
    if ($id != "" && $page != "") {
        deleteSliderByPageId($id, $page);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
    }
}

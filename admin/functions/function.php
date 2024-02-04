<?php


function importImageFile($file)
{
    try {
        $target_dir = "../images/";
        $target_file = $target_dir . basename(basename($_FILES["Url"]["name"]));
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $url = basename($_FILES["Url"]["name"]);
        if (move_uploaded_file($_FILES["Url"]["tmp_name"], $target_file)) {
            return $url;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }

}

function messageWarning()
{
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
    echo "<script> Swal.fire({
        icon: 'warning',
        title: 'Hata',
        text: 'Hata oluştu!',
    })</script>";
}

function messageError()
{
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
    echo "<script> Swal.fire({
            icon: 'error',
            title: 'Hata',
            text: 'Tekrar Deneyiniz',
        })</script>";
}

function messageSuccess()
{
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
    echo "<script> Swal.fire({
            icon: 'success',
            title: 'Başarılı',
            text: 'Başarıyla eklendi',
        })</script>";
}


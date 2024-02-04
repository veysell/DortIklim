<?php
include_once("queries/queries.php");

include("inc/head.php");
if (isset($_GET["id"])) {

    $id = $_GET["id"];
    $resultdata = getById($id, "slider");
    $IsActive = $resultdata["IsActive"] == "1" ? true : false;
}
?>

<style>
    img {
        max-width: 300px;
        max-height: 300px;
        margin-top: 20px;
        border-radius: 5px;
    }
</style>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

            <div class="col-8 grid-margin stretch-card">

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Slider Düzenleme</h4>
                        <?php
                        if (($_POST)) {
                            $name = $_POST["sliderName"];
                            $desc = $_POST["sliderDesc"];
                            $active = (isset($_POST["isActive"]) == '') ? 0 : 1;
                            $imagePath = isset($_FILES["Url"]["name"]) == "" ? null : $_FILES["Url"]["name"];
                            $id = $_POST["Id"];
                            if ($imagePath == null) {
                                $imagePath = "null";
                                $result = updateSlider($id, $name, $desc, $active, $imagePath);
                                if ($result) {
                                    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                    echo "<script> Swal.fire({
                                                        icon: 'success',
                                                        title: 'Başarılı',
                                                        text: 'Slider güncellendi',
                                                    })</script>";
                                    echo '<script>window.location.href = "listSlider";</script>';
                                    exit();
                                } else {
                                    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                    echo "<script> Swal.fire({
                                                        icon: 'error',
                                                        title: 'Hata',
                                                        text: 'işlem başarısız oldu',
                                                    })</script>";

                                    echo '<script>window.location.href = "listSlider";</script>';
                                    exit();

                                }
                            } else {


                                if ($_FILES["Url"]["error"] == 4) {
                                    $uploadOk = 0;
                                    $url = $sonuc["ImageUrl"];
                                } else {
                                    $target_dir = "../images/";
                                    $target_file = $target_dir . basename(basename($_FILES["Url"]["name"]));
                                    $uploadOk = 1;
                                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                    $url = basename($_FILES["Url"]["name"]);
                                }

                                if ($uploadOk == 1) {
                                    if (move_uploaded_file($_FILES["Url"]["tmp_name"], $target_file)) {
                                        $result = updateSlider($id, $name, $desc, $active, $url);
                                        if ($result) {
                                            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                            echo "<script> Swal.fire({
                                                            icon: 'success',
                                                            title: 'Başarılı',
                                                            text: 'Slider Güncellendi',
                                                        })</script>";
                                            echo '<script>window.location.href = "listBlog";</script>';
                                            exit();

                                        } else {
                                            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                            echo "<script> Swal.fire({
                                                        icon: 'error',
                                                        title: 'Hata',
                                                        text: 'Database hatası',
                                                    })</script>";
                                            echo '<script>window.location.href = "listSlider";</script>';
                                            exit();
                                        }
                                    } else {
                                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                        echo "<script> Swal.fire({
                                                        icon: 'error',
                                                        title: 'Hata',
                                                        text: 'Resim yüklenemedi',
                                                    })</script>";
                                        echo '<script>window.location.href = "listSlider";</script>';
                                        exit();
                                    }
                                }
                            }
                        }

                        ?>

                        <form class="forms-sample" method="post" action="editSlider" enctype="multipart/form-data">
                            <input type="text" style="display:none;" hide name="Id" value="<?= $resultdata["Id"] ?>">
                            <div class="form-group">
                                <label for="exampleInputName1">Yeni Slider Adı</label>
                                <input type="text" class="form-control" name="sliderName" id="exampleInputName1"
                                    value="<?= $resultdata["Name"] ?>">
                            </div>


                            <style>
                                label i {
                                    font-size: 90%;
                                    color: #6c7293;
                                }
                            </style>


                            <div class="form-group">
                                <label for="sliderImage">Yeni Slider Resmi <i
                                        style="font-size: 90%; color: #6c7293;">(Slider
                                        resmi en az 1280x800 boyutunda olmalıdır!)</i></label>
                                <input type="file" id="sliderImage" name="Url" class="file-upload-default"
                                    onchange="previewImage(event)">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Resmi Güncelle">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Dosya
                                            Seç</button>
                                    </span>
                                </div>
                                <div id="previewContainer"></div>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Yeni Slider Metni</label>
                                <textarea class="form-control" id="exampleTextarea1" name="sliderDesc" rows="4"
                                    placeholder="Slider alanında görünecek metni yeni giriniz..."><?= $resultdata["Description"] ?></textarea>
                            </div>
                            <div class="form-check form-check-success mb-4">
                                <label class="form-check-label">

                                    <input type="checkbox" class="form-check-input" name="isActive" <?= $IsActive == true ? "checked" : "" ?>>
                                    Aktif<i class="input-helper"></i></label>

                            </div>
                            <button type="submit" class="col-2 btn btn-rounded btn-success mr-4">Yükle</button>
                            <a href="listSlider" class="btn btn-rounded btn-danger col-2">Vazgeç</a>
                        </form>
                    </div>
                </div>


                <div class="col-md-8 col-xl-6 grid-margin stretch-card mb-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Eski Görünüm</h4>
                            <!-- Resim eklendi -->
                            <img src="../images/<?= $resultdata["ImagePath"] ?>" alt="Eski Görünüm"
                                class="img-fluid rounded-circleS">
                        </div>


                    </div>
                </div>
            </div>
        </div>



        <?php
        include("inc/footer.php")
            ?>
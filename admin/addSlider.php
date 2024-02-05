<?php
include_once("queries/queries.php");

include("inc/head.php");
if(isset($_GET["id"])){

    $id = $_GET["id"];
    $pagename=getPageName($id);
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


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Slider Ekle - <?=$pagename["Name"]?></h4>
                        <?php
                        if (($_POST)) {
                            $name = $_POST["sliderName"];
                            $desc = $_POST["sliderDesc"];
                            $page= $_POST["page"];
                            $active = (isset($_POST["isActive"]) == '') ? 0 : 1;




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
                                    $result = insertSlider($name, $desc, $active, $url,$page);
                                    if ($result) {
                                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                        echo "<script> Swal.fire({
                                                        icon: 'success',
                                                        title: 'Başarılı',
                                                        text: 'Slider eklendi',
                                                    })</script>";
                                        echo "<script>window.history.go(-2);</script>";
                                        exit();
                                    } else {
                                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                        echo "<script> Swal.fire({
                                                    icon: 'error',
                                                    title: 'Hata',
                                                    text: 'Tekrar Deneyiniz',
                                                })</script>";
                                    }

                                } else {
                                    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>';
                                    echo "<script> Swal.fire({
                                                    icon: 'warning',
                                                    title: 'Hata',
                                                    text: 'Fotoğraf yüklenirken hata oluştu!',
                                                })</script>";
                                }
                            }

                        }

                        ?>

                        <form class="forms-sample" method="post" action="addSlider" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Slider Adı</label>
                                <input type="text" required class="form-control" name="sliderName" id="exampleInputName1"
                                    placeholder="Slider İsmi Giriniz...">
                            </div>

                            <input type="text" hidden value="<?=$id?>" name="page">
                            <style>
                                label i {
                                    font-size: 90%;
                                    color: #6c7293;
                                }
                            </style>

                            <div class="form-group">
                                <label for="sliderImage">Slider Resmi <i style="font-size: 90%; color: #6c7293;">(Slider
                                        resmi en az 1280x800 boyutunda olmalıdır!)</i></label>
                                <input type="file" id="sliderImage" required name="Url" class="file-upload-default"
                                    onchange="previewImage(event)">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" required disabled
                                        placeholder="Resim Yükle">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Dosya
                                            Seç</button>
                                    </span>
                                </div>
                                <div id="previewContainer"></div>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Slider Metni</label>
                                <textarea class="form-control" id="exampleTextarea1" name="sliderDesc" rows="4"
                                    placeholder="Slider alanında görünecek metni giriniz..."></textarea>
                            </div>
                            <div class="form-check form-check-success mb-4">
                                <label class="form-check-label">

                                    <input type="checkbox" class="form-check-input" name="isActive" checked="">
                                    Aktif <i class="input-helper"></i></label>

                            </div>
                            <button type="submit" class="col-2 btn btn-rounded btn-success mr-4">Yükle</button>
                            <a href="listSlider" class="btn btn-rounded btn-danger col-2">Vazgeç</a>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>





    <?php
    include("inc/footer.php")
        ?>
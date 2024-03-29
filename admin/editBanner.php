<?php
include_once("queries/queries.php");
include("functions/function.php");
include("inc/head.php");
if (isset($_GET["id"])) {

    $id = $_GET["id"];
    $resultdata = getById($id, "banner");
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

                        <h4 class="card-title">Banner Düzenleme</h4>
                        <?php
                        if (($_POST)) {
                            $id = $_POST["Id"];
                            $name = $_POST["name"];
                            $desc = $_POST["desc"];
                            $active = (isset($_POST["isActive"]) == '') ? 0 : 1;

                            $bannerdata = getById($id, "banner");

                            if ($_FILES["Url"]["error"] != 4) {
                                $importResult = importImageFile($_FILES);
                                $url = $importResult == false ? $bannerdata["ImagePath"] : $importResult;
                            } else {
                                $url = $bannerdata["ImagePath"];
                            }
                            $result = updateBanner($id, $name, $desc, $active, $url);
                            if ($result) {
                                messageSuccess();
                                echo '<script>window.location.href = "listBanner";</script>';
                                exit();
                            } else {
                                messageError();
                            }
                        } else {
                            //messageWarning();
                        }
                        ?>

                        <form class="forms-sample" method="post" action="editBanner" enctype="multipart/form-data">
                            <input type="text" style="display:none;" hide name="Id" value="<?= $resultdata["Id"] ?>">
                            <div class="form-group">
                                <label for="exampleInputName1">Yeni Banner Adı</label>
                                <input type="text" class="form-control" name="name" id="exampleInputName1"
                                    value="<?= $resultdata["Name"] ?>">
                            </div>


                            <style>
                                label i {
                                    font-size: 90%;
                                    color: #6c7293;
                                }
                            </style>


                            <div class="form-group">
                                <label for="sliderImage">Yeni Banner Resmi <i
                                        style="font-size: 90%; color: #6c7293;">(Banner
                                        resmi en az 250x259 boyutunda olmalıdır!)</i></label>
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
                                <label for="exampleTextarea1">Yeni Banner Metni</label>
                                <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4"
                                    placeholder="Slider alanında görünecek metni yeni giriniz..."><?= $resultdata["Description"] ?></textarea>
                            </div>
                            <div class="form-check form-check-success mb-4">
                                <label class="form-check-label">

                                    <input type="checkbox" class="form-check-input" name="isActive" <?= $IsActive == true ? "checked" : "" ?>>
                                    Aktif<i class="input-helper"></i></label>

                            </div>
                            <button type="submit" class="col-2 btn btn-rounded btn-success mr-4">Güncelle</button>
                            <a href="listBanner" class="btn btn-rounded btn-danger col-2">Vazgeç</a>
                        </form>
                    </div>
                </div>


                <div class="col-md-8 col-xl-6 grid-margin stretch-card mb-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mevcut Görünüm</h4>
                            <!-- Resim eklendi -->
                            <img src="../images/<?= $resultdata["ImagePath"] ?>" alt="Mevcut Görünüm"
                                class="img-fluid rounded-circleS">
                        </div>


                    </div>
                </div>
            </div>
        </div>



        <?php
        include("inc/footer.php")
            ?>
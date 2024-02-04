<?php
include_once("queries/queries.php");
include("functions/function.php");
include("inc/head.php")
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
                        <h4 class="card-title">Banner Ekle</h4>
                        <?php
                        if (($_POST)) {
                            $name = $_POST["name"];

                            $desc = $_POST["desc"];
                            $active = 1;
                            if ($_FILES["Url"]["error"] != 4) {
                                $importResult = importImageFile($_FILES);
                                $url = $importResult == false ? "" : $importResult;
                            } else {
                                $url = "";
                            }
                            $result = insertBanner($name, $desc, $active, $url);
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
                        <form class="forms-sample" method="post" action="addBanner" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Banner Adı</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="name"
                                    placeholder="Banner İsmi Giriniz...">
                            </div>
                            <div class="form-group">
                                <label>Banner Resmi</label>
                                <input type="file" name="Url" class="file-upload-default"
                                    onchange="previewImage(event)">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Resim Yükleyiniz">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Dosya
                                            Seç</button>
                                    </span>
                                </div>
                                <div id="previewContainer"></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Banner Metni</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="desc"
                                    placeholder="Banner alanında görünecek metni giriniz..."></textarea>
                            </div>
                            

                            <button type="submit" class="btn btn-primary mr-2">Yükle</button>
                            <button class="btn btn-danger">Vazgeç</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <?php
    include("inc/footer.php")
        ?>
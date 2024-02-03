<?php
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
                        <h4 class="card-title">Slider Ekle</h4>
                        

                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Slider Adı</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Slider İsmi Giriniz...">
                            </div>

                            <div class="form-group">
                                <label>Slider Resmi</label>
                                <input type="file" name="img[]" class="file-upload-default" onchange="previewImage(event)">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Resim Yükleyiniz">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Dosya Seç</button>
                                    </span>
                                </div>
                                <div id="previewContainer"></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Slider Metni</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Slider alanında görünecek metni giriniz..."></textarea>
                            </div>
                            <div class="form-check form-check-success mb-4">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked=""> Aktif <i class="input-helper"></i></label>
                            </div>
                            <button type="submit" class="col-2 btn btn-rounded btn-success mr-4">Yükle</button>
                            <button class="btn btn-rounded btn-danger col-2">Vazgeç</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <?php
    include("inc/footer.php")
    ?>
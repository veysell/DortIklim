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
                    <h4 class="card-title">Slider Yükle</h4>

                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Slider Adı</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" alt="$name">
                        </div>

                        <div class="form-group">
                            <label>Slider Resmi</label>
                            <input type="file" name="img[]" class="file-upload-default" onchange="previewImage(event)">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Resim Yükle" >
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Dosya Seç</button>
                                </span>
                            </div>
                            <div id="previewContainer"></div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Slider Metni</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
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
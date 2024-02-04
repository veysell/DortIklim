<?php
include("inc/head.php")
?>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<style>
    .card-description {
        font-family: 'Protest Riot', cursive;
        font-size: medium;
    }
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">

<body>
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="page-header">
                <h2> Blog Yaz </h2>
                <nav aria-label="breadcrumb">

                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <p class="card-description">Kelimelerinle dünyana dokun, bir blog yazmaya başla!</p>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Yazar</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Yazar ismi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Başlık</label>
                                    <input type="tex" class="form-control" id="exampleInputEmail3" placeholder="Blog başlığı">
                                </div>
                                <div class="form-group">
                                <label for="blogImage">Blog Resmi <i style="font-size: 90%; color: #6c7293;">(Blog
                                        resmi en az 150x150 boyutunda olmalıdır!)</i></label>
                                <input type="file" id="blogImage" required name="Url" class="file-upload-default"
                                    onchange="previewImage(event)">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Resim Yükle">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Dosya
                                            Seç</button>
                                    </span>
                                </div>
                                <div id="previewContainer"></div>
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Yayın Tarihi</label>
                                    <input type="date" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                    </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Blog Metni</label>
                                            <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Yazmaya başlayın..."></textarea>

                                        </div>
                                    
                                    <div>

                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-dark">Cancel</button>

                                    </div>

                                </div>
                        </div>
                    </div>

                </div>
            </div>

</body>
<?php
include("inc/footer.php")
?>
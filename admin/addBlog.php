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
                    <?php
                    if (($_POST)) {
                        $name = $_POST["name"];
                        $title = $_POST["title"];
                        $date = $_POST["date"];
                        $desc = $_POST["desc"];
                        $active = 1;
                        if ($_FILES["Url"]["error"] != 4) {
                            $importResult = importImageFile($_FILES);
                            $url = $importResult == false ? "" : $importResult;
                        } else {
                            $url = "";
                        }
                        $result = insertBlog($name, $desc, $active, $url, $date, $title);
                        if ($result) {
                            messageSuccess();
                            echo '<script>window.location.href = "listblog";</script>';
                            exit();
                        } else {
                            messageError();
                        }
                    } else {
                        //messageWarning();
                    }
                    ?>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <p class="card-description">Kelimelerinle dünyana dokun, bir blog yazmaya başla!</p>
                            <form class="forms-sample" method="post" action="addBlog" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1">Yazar</label>
                                    <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Yazar ismi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Başlık</label>
                                    <input name="title" type="text" class="form-control" id="exampleInputEmail3" placeholder="Blog başlığı">
                                </div>
                                <div class="form-group">
                                    <label for="blogImage">Blog Resmi <i style="font-size: 90%; color: #6c7293;">(Blog
                                            resmi en az 150x150 boyutunda olmalıdır!)</i></label>
                                    <input type="file" id="blogImage" required name="Url" class="file-upload-default" onchange="previewImage(event)">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Resim Yükle">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Dosya
                                                Seç</button>
                                        </span>
                                    </div>
                                    <div id="previewContainer"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Yayın Tarihi</label>
                                    <input name="date" type="date" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Blog Metni</label>
                                    <textarea name="desc" class="form-control" id="exampleTextarea1" rows="4" placeholder="Yazmaya başlayın..."></textarea>

                                </div>

                                <div>

                                    <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
                                    <a href="listBlog" class="btn btn-dark">Vazgeç</a>

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
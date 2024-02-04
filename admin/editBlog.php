<?php
include_once("queries/queries.php");
include("functions/function.php");
include("inc/head.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $resultdata = getById($id, "blog");
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
                <h2> Bloğunuzu Düzenleyin </h2>
                <nav aria-label="breadcrumb">

                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" method="post" action="editBlog" enctype="multipart/form-data">
                            <?php
                            if (($_POST)) {
                                $id= $_POST["Id"];
                                $title = $_POST["title"];
                                $date = $_POST["date"];
                                $desc = $_POST["desc"];
                                $active = 1;

                                $blogdata=getById($id,"blog");

                                if ($_FILES["Url"]["error"] != 4) {
                                    $importResult = importImageFile($_FILES);
                                    $url = $importResult == false ? $blogdata["ImagePath"] : $importResult;
                                } else {
                                    $url = $blogdata["ImagePath"];
                                }
                                $result = updateBlog($id, $desc, $active, $url, $date, $title);
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

                            
                            <p class="card-description">Kelimelerinle dünyana dokun, bir blog yazmaya başla!</p>
                            <form class="forms-sample"  method="post" action="editBlog" enctype="multipart/form-data">
                                <input type="text" style="display:none;" hide name="Id"
                                    value="<?= $resultdata["Id"] ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Yeni Başlık</label>
                                    <input type="tex" class="form-control" id="exampleInputEmail3" name="title"
                                        value="<?= $resultdata["Title"] ?>" placeholder="Blog başlığı">
                                </div>
                                <div class="form-group">
                                    <label for="blogImage">Yeni Blog Resmi <i
                                            style="font-size: 90%; color: #6c7293;">(Blog
                                            resmi en az 150x150 boyutunda olmalıdır!)</i></label>
                                    <input type="file" id="blogImage" name="Url" class="file-upload-default"
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
                                    <label for="exampleInputPassword4">Güncellenme Tarihi</label>
                                    <input type="date" name="date" class="form-control" id="exampleInputPassword4"
                                        value="<?= $resultdata["Date"] ?>" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Blog Metni</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="desc"
                                        placeholder="Yazmaya başlayın..."><?= $resultdata["Description"] ?></textarea>

                                </div>

                                <div>

                                    <button type="submit" class="btn btn-primary mr-2">Güncelle</button>
                                    <a href="listBlog" class="btn btn-dark">Vazgeç</a>

                                </div>
                            </form>
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
                </div>

            </div>
        </div>

</body>
<?php
include("inc/footer.php")
    ?>
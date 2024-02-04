<?php
include_once("queries/queries.php");
include("inc/head.php");
$blogs = getAllData("blog");
?>
<style>
    .multiline {
        white-space: nowrap;
        /* Satır sonu karakterlerini yok sayar */
        overflow: hidden;
        /* Taşan içeriği gizler */
        text-overflow: ellipsis;
        /* Taşan içeriği üç nokta (...) ile gösterir */
        max-width: 200px;
        /* Belirli bir genişlikte keser */
    }
</style>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex justify-content-between align-items-center">Blog Yazıları
                        <a class="btn btn-primary btn-icon-text" href="addBlog">Blog Ekle</></a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Yazar</th>
                                    <th>Başlık</th>
                                    <th>Blog Metni</th>
                                    <th>Resim</th>
                                    <th>Görünürlük</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($blogs as $blog) {


                                    ?>
                                    <tr>
                                        <td class="text-white">
                                            <?= $blog["AuthorName"] ?>
                                        </td>
                                        <td class="text-white">
                                            <?= $blog["Title"] ?>
                                        </td>
                                        <td class="text-white">
                                            <?= $blog["Description"] ?>
                                        </td>
                                        <td>
                                            
                                                <img src="../images/<?= $blog["ImagePath"] ?>"
                                                    style="width: 150px; height: 90px; border-radius: 10px; align:center;">
                                           
                                        </td>
                                        <td class="col-1">
                                            <label
                                                class="<?= $blog["IsActive"] == "1" ? "badge badge-success" : "badge badge-danger" ?>"
                                                for="statusCheckbox">
                                                <?= $blog["IsActive"] == "1" ? "Aktif" : "Pasif" ?>
                                            </label>
                                        </td>

                                        <td>
                                            <a class="btn badge badge-warning"
                                                href='editBlog?id=<?= $blog["Id"] ?>'>Düzenle</a>
                                        </td>
                                        <td>
                                            <a href="delete?id=<?= $blog["Id"] ?>&table=blog" class="btn badge badge-danger"
                                                onclick="return confirm('Silmek istediğinize emin misiniz ?')">Sil</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <script>
        function toggleStatus(checkbox) {
            var statusText = document.getElementById("statusText");
            statusText.innerText = checkbox.checked ? "Aktif" : "Pasif";
        }
    </script>


    <?php
    include("inc/footer.php")
        ?>
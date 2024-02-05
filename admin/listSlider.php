<?php
include_once("queries/queries.php");
include("inc/head.php");

if (isset($_GET["id"])) {
    $pageid=intval($_GET["id"]);
    $pageName=getPageName($pageid);
}
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
                    <h4 class="card-title d-flex justify-content-between align-items-center">Slider Listesi (<?=$pageName["Name"]?>)
                        <a class="btn btn-primary btn-icon-text" href="addSlider?id=<?=$pageName["Id"]?>">Slider Ekle</a>
                    </h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-2">İsim</th>
                                    <th class="col-5">Metin</th>
                                    <th class="col-2">Resim</th>
                                    <th class="col-1">Durum</th>
                                    <th class="col-1"></th>
                                    <th class="col-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sliders = getSliderData($pageid);
                                foreach ($sliders as $slider) {
                                    ?>

                                    <tr>
                                        <td class="col-2 text-white">
                                            <?= $slider["Name"] ?>
                                        </td>
                                        <td class="col-4 text-white">
                                            <div class="mb-1 mb-sm-0 multiline">
                                                <?= $slider["Description"] ?>
                                            </div>
                                        </td>
                                        <td class="col-3">
                                            <a href="editSlider?id=<?= $slider["Id"] ?>">
                                                <img src="../images/<?= $slider["ImagePath"] ?>"
                                                    style="width: 150px; height: 90px; border-radius: 10px; align:center;">
                                            </a>
                                        </td>
                                        <td class="col-1">
                                            <label
                                                class="<?= $slider["IsActive"] == "1" ? "badge badge-success" : "badge badge-danger" ?>"
                                                for="statusCheckbox">
                                                <?= $slider["IsActive"] == "1" ? "Aktif" : "Pasif" ?>
                                            </label>
                                        </td>
                                        <td class="col-1">
                                            <a class="btn badge badge-warning"
                                                href='editSlider?id=<?= $slider["Id"]?>&page=<?=$pageid?>'>Düzenle</a>
                                        </td>
                                        <td class="col-1">
                                            <a href="deleteslider?id=<?=$slider["Id"]?>&page=<?=$pageid?>"
                                                class="btn badge badge-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>
                                            <?php
                                            ?>
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



    <?php
    include("inc/footer.php")
        ?>
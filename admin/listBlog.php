<?php
include("inc/head.php")
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
                   <h4 class="card-title d-flex justify-content-between align-items-center">Blog Yazıları <button type="button" class="btn btn-success btn-fw ml-5">
                    <a href="addBlog">Blog Ekle</button></a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Yazar</th>
                                    <th>Başlık</th>
                                    <th>Blog Metni</th>
                                    <th>Görünürlük</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Premier</td>
                                    <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                                    <td class="col-1">
                                            <label
                                                class="<?= $blog["IsActive"] == "1" ? "badge badge-success" : "badge badge-danger" ?>"
                                                for="statusCheckbox">
                                                <?= $blog["IsActive"] == "1" ? "Aktif" : "Pasif" ?>
                                            </label>
                                        </td>
                                    <td>
                                        <button type="button" class="badge badge-warning">Düzenle</button>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-danger">Sil</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>Premier</td>
                                    <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                                    <td>
                                        <div class="form-check form-check-success">
                                            <input type="checkbox" class="form-check-input" id="statusCheckbox" onclick="toggleStatus(this)" checked>
                                            <label class="form-check-label" for="statusCheckbox"> <span id="statusText">Aktif</span> <i class="input-helper"></i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-warning">Düzenle</button>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-danger">Sil</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>Premier</td>
                                    <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                                    <td>
                                        <div class="form-check form-check-success">
                                            <input type="checkbox" class="form-check-input" id="statusCheckbox" onclick="toggleStatus(this)" checked>
                                            <label class="form-check-label" for="statusCheckbox"> <span id="statusText">Aktif</span> <i class="input-helper"></i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-warning">Düzenle</button>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-danger">Sil</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>After effects</td>
                                    <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                                    <td>
                                        <div class="form-check form-check-success">
                                            <input type="checkbox" class="form-check-input" id="statusCheckbox" onclick="toggleStatus(this)" checked>
                                            <label class="form-check-label" for="statusCheckbox"> <span id="statusText">Aktif</span> <i class="input-helper"></i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-warning">Düzenle</button>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-danger">Sil</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dave</td>
                                    <td>53275535</td>
                                    <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                                    <td>
                                        <div class="form-check form-check-success">
                                            <input type="checkbox" class="form-check-input" id="statusCheckbox" onclick="toggleStatus(this)" checked>
                                            <label class="form-check-label" for="statusCheckbox"> <span id="statusText">Aktif</span> <i class="input-helper"></i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-warning">Düzenle</button>
                                    </td>
                                    <td>
                                        <button type="button" class="badge badge-danger">Sil</button>
                                    </td>
                                </tr>
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
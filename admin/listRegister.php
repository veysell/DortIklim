<?php
include_once("queries/queries.php");
include("inc/head.php")
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex justify-content-between align-items-center">Kullanıcı Listesi
                        <a class="btn btn-primary btn-icon-text" href="registerPage">Kullanıcı Ekle</a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th> Kullanıcı Adı </th>
                                    <th> Email </th>
                                    <th> Şifre </th>

                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-1">
                                        <img src="assets/images/faces-clipart/pic-1.png" alt="image">
                                    </td>
                                    <td class="col-2"> Cemali Yeşilot </td>
                                    <td class="col-2"> cemaliyesilol@gmail.com</td>
                                    <td class="col-2"> 123456 </td>

                                    <td class=col-1>
                                        <a href="delete?id=<?= $slider["Id"] ?>&table=slider" class="btn badge badge-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-1">
                                        <img src="assets/images/faces-clipart/pic-1.png" alt="image">
                                    </td>
                                    <td> Cemali Yeşilot </td>
                                    <td> cemaliyesilol@gmail.com</td>
                                    <td> 4iklim </td>

                                    <td class="col-1">
                                        <a href="delete?id=<?= $slider["Id"] ?>&table=slider" class="btn badge badge-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
            <script src="assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="assets/js/off-canvas.js"></script>
            <script src="assets/js/hoverable-collapse.js"></script>
            <script src="assets/js/misc.js"></script>
            <script src="assets/js/settings.js"></script>
            <script src="assets/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <!-- End custom js for this page -->
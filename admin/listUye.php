<?php
include_once("queries/queries.php");
include("inc/head.php")
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex justify-content-between align-items-center">Üye Listesi
                        <a class="btn btn-primary btn-icon-text" href="addUye">Üye Ekle</a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th> İsim </th>
                                    <th> Email </th>
                                    <th> Telefon</th>
                                    <th> Cinsiyet </th>
                                    <th> Tarih </th>
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
                                    <td class="col-2"> 0505 466 7584 </td>
                                    <td class="col-2"> Erkek </td>
                                    <td class="col-2"> 04.02.2024 </td>
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
                                    <td> May 15, 2015 </td>
                                    <td> $ 77.99 </td>
                                    <td> May 15, 2015 </td>
                                    <td class="col-1">
                                        <a href="delete?id=<?= $slider["Id"] ?>&table=slider" class="btn badge badge-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Toplam</h4>
                                        <canvas id="doughnutChart" style="height: 273px; display: block; width: 546px;" width="682" height="341" class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
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
<?php
session_start();
if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789")) {
  header("location:login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>4 İklim Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />




</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.php"><img src="../images/logo.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="../images/logo-mini.svg" alt="logo" /></a>
        <style>
          .navbar-toggler.custom-button {
            color: white;
            /* Düğme rengini beyaz yapar */
            background-color: transparent;
            /* Düğme arkaplan rengini şeffaf (transparent) yapar */
          }
        </style>
        <!-- ... diğer HTML kodları ... -->
        <button class="navbar-toggler navbar-toggler align-self-center custom-button" type="button"
          data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <i class="mdi mdi-account"></i>
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">
                  <?= $_SESSION["Name"] . " " . $_SESSION["Surname"] ?>
                </h5>
                <span>
                  <?= $_SESSION["role"] ?>
                </span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
              aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Yönlendirme</span>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="index">
            <span class="menu-icon">
              <i class="mdi mdi-access-point"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Slider Yönetimi</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="listSlider?id=1">Anasayfa</a></li>
              <li class="nav-item"> <a class="nav-link" href="listSlider?id=2">Hakkımızda</a></li>
              <li class="nav-item"> <a class="nav-link" href="listSlider?id=3">Faaliyetlerimiz</a></li>
              <li class="nav-item"> <a class="nav-link" href="listSlider?id=4">Blog</a></li>
              <li class="nav-item"> <a class="nav-link" href="listSlider?id=5">İletişim</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="listBanner">
            <span class="menu-icon">
              <i class="mdi mdi-access-point"></i>
            </span>
            <span class="menu-title">Bannerlar</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="listBlog">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Blog Yazıları </span>

          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="faaliyetler">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Faaliyetler </span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="listUye">
            <span class="menu-icon">
              <i class="mdi mdi-account-multiple"></i>
            </span>
            <span class="menu-title">Üyeler </span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="listRegister">
            <span class="menu-icon">
              <i class="mdi mdi-account-multiple"></i>
            </span>
            <span class="menu-title">Kullanıcılar </span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="FQA">
            <span class="menu-icon">
              <i class="mdi mdi-account-multiple"></i>
            </span>
            <span class="menu-title">Sıkça Sorulan Sorular </span>
          </a>
        </li>


      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index"><i class="mdi mdi-account"></i>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
              </a>
            </li>
          </ul>
        </div>
      </nav>
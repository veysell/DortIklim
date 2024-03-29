<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Giriş</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Giriş Yap</h3>
              <?php
              session_start();
              include("database/connection.php");
              if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
                header("location:index");
              }

              ?>
              <form method="post" action="login">
                <div class="form-group">
                  <label>Kullanıcı Adı</label>
                  <input type="text" name="txtUserName" required class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Şifre</label>
                  <input type="password" name="txtUserPass" id="pass" required class="form-control p_input">
                </div>

                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" id="showPassword" onchange="togglePasswordVisibility()"> Şifreyi göster <i class="input-helper"></i></label>
                  </div>
                  <a href="forget" class="forgot-pass">Şifremi Unuttum</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Giriş</button>
                </div>
            </div>

            <!-- <div class="d-flex">
                  <button class="btn btn-facebook mr-2 col">
                    <i class="mdi mdi-facebook"></i> Facebook </button>
                  <button class="btn btn-google col">
                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                </div>
                <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> -->

            </form>
            <?php


            if ($_POST) {
              $name = $_POST["txtUserName"];
              $pass = $_POST["txtUserPass"];
              $sorgu = $baglanti->prepare("select * from user where Name=:userName");
              $sorgu->execute(['userName' => htmlspecialchars($name)]);
              $sonuc = $sorgu->fetch();

              if ($sonuc != null) {
                if (($pass == $sonuc['Password'])) {
                  $_SESSION["Oturum"] = 6789;
                  $_SESSION["usernaname"] = $username;
                  $_SESSION["Name"] = $sonuc["Name"];
                  $_SESSION["Surname"] = $sonuc["Surname"];
                  $_SESSION["role"] = ($sonuc["Role"] === 1) ? "Super Admin" : "Admin";
                  header("location:index");
                } else {
                  echo 'Şifrenizi Kontrol Ediniz';
                }
              } else {
                echo "Kayıt Bulunamadı";
              }
            }

            ?>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- row ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
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
  <script>
    function togglePasswordVisibility() {
      console.log("test");
      var showPasswordCheckbox = document.getElementById("showPassword");
      var passwordField = document.getElementById("pass");

      // Checkbox durumuna göre şifre görünürlüğünü ayarla
      passwordField.type = showPasswordCheckbox.checked ? "text" : "password";
    }
  </script>


  <!-- endinject -->
</body>

</html>
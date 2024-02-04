<?php
include_once("queries/queries.php");

include("inc/head.php");

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-6 grid-margin stretch-card">
      
      <div class="card">
        <div class="card-body">

          <h4 class="card-title d-flex justify-content-between align-items-center">Yeni Kullanıcı Ekle

          </h4>

          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputUsername1">Kullanıcı adı</label>

              <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Kullanıcı adını giriniz">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-Mail Adresi</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail adresini giriniz">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Şifre</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre belirleyiniz">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Şifre Tekrar</label>
              <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Şifrenizi onaylayınız">
            </div>

            <button type="submit" class="btn btn-primary mr-2">Ekle</button>
            <a href="listRegister" class="btn btn-danger">Vazgeç</button>
          </form>



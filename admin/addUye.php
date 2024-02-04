<?php
include_once("queries/queries.php");

include("inc/head.php");

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Üye Kayıt Formu</h4>
                    <form class="forms-sample">
                        <div class="col-sm-12">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">İsim</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Üye ismi" name="membername">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" name="memberemail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Telefon </label>
                                <div class="col-sm-8">
                                <input type="number" class="form-control" id="exampleInputMobile" placeholder="(___-___-____)" name="memberphonenumber">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label" name="membergender">Cinsiyet </label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>Seçiniz</option>
                                        <option>Erkek</option>
                                        <option>Kadın</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tarih </label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="exampleInputMobile" placeholder="Mobile number" name="memberdate">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Ekle</button>
                        <a href="listUye" class="btn btn-danger">Vazgeç</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <?php
        include("inc/footer.php")
        ?>
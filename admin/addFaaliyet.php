<?php
include("inc/head.php")
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <style>
                                    label i {
                                        font-size: 90%;
                                        color: #6c7293;
                                    }
                                </style>
                                <h4 class="card-title">Faaliyet Ekle</h4>
                                <div class="form-group">

                                    <label>Gönüllü İsmi</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Faaliyet Tipi</label>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" required>
                                        <option value="" disabled selected>Seçiniz</option>
                                        <option value="Su Kusuyu">Su Kusuyu</option>
                                        <option value="Kurban Bağışı">Kurban Bağışı</option>
                                        <option value="İftar Yardımı">İftar Yardımı</option>
                                        <option value="Kuran Yardımı">Kuran Yardımı</option>
                                        <option value="Cami Yardımı">Cami Yardımı</option>
                                        <option value="Cami Yardımı">Cami Yardımı</option>
                                        <option value="Cami Yardımı">Cami Yardımı</option>
                                        <option value="Cami Yardımı">Cami Yardımı</option>
                                        <option value="Cami Yardımı">Cami Yardımı</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Bağıs Adedi</label>
                                    <input type="number" class="form-control" placeholder="Yalnızca Sayı" aria-label="Username">
                                </div>
                                <div class="form-group">
                                    <label>Bağış Tarihi</label>
                                    <input type="date" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
                                </div>
                            </div>
                            <button type="submit" class="col-2 btn btn-rounded btn-success mr-4">Yükle</button>
                            <button class="btn btn-rounded btn-danger col-2">Vazgeç</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
    <script>
        window.onload = function() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        };
    </script> -->

    <script>
        function checkSelectedOption(selectElement) {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            if (selectedOption.value === "") {
                selectedOption.textContent = "Seçiniz";
            }
        }
    </script>




    <?php
    include("inc/footer.php")
    ?>
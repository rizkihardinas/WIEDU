<?php 
$this->load->view('parts/header');
$this->load->view('parts/menu');
 ?>
<!--Sidebar End-->
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Resep
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <br>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary"><i class="icon icon-search"></i> Cari Resep</button>
            </div>
        </div>
        <form id="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Nama Resep</label>
                            <input type="text" class="form-control" id="validationCustom01"
                                   placeholder="Nama Resep" value="" required autofocus>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Nama Bahan</label>
                            <select class="form-control"  id="validationCustom01" required placeholder="-- Plih Bahan --">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Diambil</label>
                            <input type="number" class="form-control" id="validationCustom01"
                                   placeholder="Diambil" value="" required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Harga Persatuan</label>
                            <input type="number" class="form-control" id="validationCustom01"
                                   placeholder="Harga" value="" required disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Bahan Baku</th>
                                    <th>Bahan diambil</th>
                                    <th>Harga</th>
                                    <th>Pengaturan</th>
                                </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            "use strict";
                            window.addEventListener("load", function () {
                                var form = document.getElementById("needs-validation");
                                form.addEventListener("submit", function (event) {
                                    if (form.checkValidity() == false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add("was-validated");
                                    var editorElement = document.getElementById("productDetails");
                                    if (editorElement.value == '') {
                                        editorElement.parentNode.classList.add("is-invalid");
                                        editorElement.parentNode.classList.remove("is-valid");
                                    } else {
                                        editorElement.parentNode.classList.remove("is-invalid");
                                        editorElement.parentNode.classList.add("is-valid");
                                    }

                                }, false);
                            }, false);
                        }());
                    </script>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <h6 class="card-header white">Pengaturan</h6>
                        <div class="card-body text-success">

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                <label class="custom-control-label" for="customControlValidation1">Centang disini apabila semua sudah terisi</label>
                                <div class="invalid-feedback">Belum dicentang</div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
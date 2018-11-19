
<!--Sidebar End-->
<div class="page height-full">
    <div class="container-fluid relative animatedParent animateOnce">
        <br>
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <button class="btn btn-primary"><i class="icon icon-search"></i> Cari Paket</button>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Nama Barang</label>
                            <select class="form-control"  id="validationCustom01" required placeholder="-- Plih Bahan --">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Diambil</label>
                            <input type="number" class="form-control" id="validationCustom01"
                                   placeholder="0" value="" required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Harga Persatuan</label>
                            <input type="number" class="form-control" id="validationCustom01"
                                   placeholder="0" value="" required disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Bahan Baku</th>
                                    <th>Bahan diambil</th>
                                    <th>Pengaturan</th>
                                </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                </div>  
            </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
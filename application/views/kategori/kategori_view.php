
<!--Sidebar End-->
<div class="page height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Kategori
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <br>
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori">
                            <input type="hidden" class="form-control" id="kode_kategori">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <button class="btn btn-primary" id="btnSimpanKategori" status="simpan"><i class="icon icon-save"></i> Simpan</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered" id="table_kategori">
                            <thead>
                                <tr>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
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
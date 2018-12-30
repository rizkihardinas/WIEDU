
<!--Sidebar End-->
<div class="page height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Brand
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
                            <label for="validationCustom01">Nama Brand</label>
                            <input type="text" class="form-control" id="nama_brand">
                            <input type="hidden" class="form-control" id="kode_brand">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <button class="btn btn-primary" id="btnSimpanBrand" status="simpan"><i class="icon icon-save"></i> Simpan</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered" id="table_brand">
                            <thead>
                                <tr>
                                    <th>Kode Brand</th>
                                    <th>Nama Brand</th>
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
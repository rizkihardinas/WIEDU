<?php 
$this->load->view('parts/header');
$this->load->view('parts/menu');
$this->load->view('parts/sidebar');
 ?>
<!--Sidebar End-->
<div class="page height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Purchase Order
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <br>
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <label>No Purchase Order</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" disabled>
                                <div class="input-group-append">
                                    <button class="btn btn-danger"><i class="icon icon-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <label>Subtotal</label>
                            <h4>Rp. 0,00</h4>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <label>Jumlah Barang</label>
                            <h4>0</h4>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <label>Supplier</label>
                            <select class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label>Nama Supplier</label>
                            <h4>-</h4>
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
                            <label for="validationCustom01">Qty</label>
                            <input type="number" class="form-control" id="validationCustom01"
                                   placeholder="0" value="" required>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Harga Persatuan</label>
                            <input type="number" class="form-control" id="validationCustom01"
                                   placeholder="0" value="" required disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="">
                        <h4>Detail Barang</h4>
                        <hr> 
                        <label>Barcode</label>
                        <input type="text" class="form-control" disabled>
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" disabled>
                        <label>Satuan</label>
                        <input type="text" class="form-control" disabled>
                        <label>Stok tersedia</label>
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>  
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Satuan</th>
                                <TH>Harga</TH>
                                <th>
                                    <center>
                                        <i class="icon icon-cogs"></i>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
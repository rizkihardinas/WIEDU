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
                        Terima Barang
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <br>
        <div class="row">
            <div class="col-md-3">
                <label>No Terima Barang</label>
                <div class="input-group mb-3">

                    <input type="text" class="form-control" disabled>
                    <div class="input-group-append">
                        <button class="btn btn-danger"><i class="icon icon-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <label>No Purchase Order</label>
                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-danger"><i class="icon icon-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <label>Tanggal</label>
                <input type="text" class="form-control" disabled id="tgl_input">
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>No Pengiriman</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Pengirim</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-4">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>Satuan</label>
                    <input type="text" class="form-control">    
                </div>
                <div class="col-md-2">
                    <label>Qty Diterima</label>
                    <input type="text" class="form-control">    
                </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div style="height: 300px;overflow: scroll;">
                    <table class="table table-bordered table-hovered">
                        <thead>
                            <tr>
                                <th>Barcode</th>
                                <th>Nama Barang</th>
                                <th>Qty Diterima</th>
                                <th>Qty Order</th>
                                <th>Satuan</th>
                                <th><i class="icon icon-cogs"></i></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <center>
                <button class="btn btn-primary"><i class="icon icon-save"></i> Simpan</button>
            </center>
            </div>
        </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
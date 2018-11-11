<?php 
$this->load->view('parts/header');
$this->load->view('parts/menu');
$this->load->view('parts/sidebar');
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
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tipe_barang">Tipe Barang</label>
                            <select class="form-control" autofocus>
                                <option value="goods">Barang atau Produk</option>
                                <option value="paket">Paket atau Menu</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>&nbsp;</label><br>
                            <button class="btn btn-primary"><i class="icon icon-search"></i> Cari Produk</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="barcode">Kategori</span></label>
                            <select class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="barcode">Sub Kategori</span></label>
                            <select class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="barcode">Barcode</span></label>
                            <input type="text" class="form-control" id="barcode"
                                    value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-2">
                            <label for="nama_barang_panjang">Nama Panjang <span id="nama_panjang"></span></label>
                            <input type="text" class="form-control" id="nama_barang_panjang"
                                    value="" required>
                        </div>
                        <div class="col-md-5 mb-2">
                            <label for="nama_barang">Nama Pendek <span id="nama_pendek"></span></label>
                            <input type="text" class="form-control" maxlength="25" id="nama_barang"
                                    value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nama_barang">Harga Beli <span id="harga_beli_view"></span></label>
                            <input type="text" class="form-control" maxlength="25" id="harga_beli"
                                    value="" required>
                                    <label for="nama_barang">Harga Jual <span id="harga_jual"></span></label>
                            <input type="text" class="form-control" maxlength="25" id="harga_jual"
                                    value="" required>
                            
                        </div>
                        <div class="col-md-3">
                            <label for="nama_barang">Stok Awal</span></label>
                            <input type="text" class="form-control" id="nama_barang"
                                    value="" required>
                            <label for="nama_barang">Stok Akhir</span></label>
                            <input type="text" class="form-control" id="nama_barang"
                                    value="" required>
                        </div>
                        <div class="col-md-5">
                            
                            <label for="nama_barang">Brand</span></label>
                            <input type="text" class="form-control" id="nama_barang"
                                    value="" required>
                            <label for="nama_barang">Satuan</span></label>
                            <input type="text" class="form-control" id="nama_barang"
                                    value="" required>  
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <h6 class="card-header white">Pengaturan</h6>
                        <div class="card-body text-success">
                            <img id="view_barcode" style="height: 100px;width: 200px">
                        </div>
                        <div class="card-footer bg-transparent">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
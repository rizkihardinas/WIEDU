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
                            <select class="form-control" >
                                <option value="goods">Barang atau Produk</option>
                                <option value="paket">Paket atau Menu</option>
                            </select>
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
                            <label>Barcode</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="barcode" autofocus>
                                <div class="input-group-append">
                                    <button class="btn btn-danger"><i class="icon icon-search"></i></button>
                                </div>
                            </div>
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
                        <div class="col-md-3">
                            <label for="nama_barang">Harga Jual <span id="harga_beli_view"></span></label>
                            <input type="text" class="form-control" maxlength="25" id="harga_beli"
                                    value="" required>
                                    
                            
                        </div>
                        <div class="col-md-4">
                            <label for="nama_barang">Brand</span></label>
                                <input type="text" class="form-control" id="nama_barang"
                                        value="" required>
                        </div>
                        <div class="col-md-5">
                            
                            
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card no-b">
                        <div class="card-header white pb-0">
                            <div class="d-flex justify-content-between">
                                <div class="align-self-center">
                                    <h5>Pengaturan Barang</h5>
                                </div>
                                <div class="align-self-center">
                                    <ul class="nav nav-pills mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="w4--tab1" data-toggle="tab" href="#w4-tab1" role="tab" aria-controls="tab1" aria-expanded="true" aria-selected="true">Pembelian</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="w4--tab2" data-toggle="tab" href="#w4-tab2" role="tab" aria-controls="tab2" aria-selected="false">Persediaan</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="w4--tab3" data-toggle="tab" href="#w4-tab3" role="tab" aria-controls="tab3" aria-selected="false">Tab 3</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="w4-tab1" role="tabpanel" aria-labelledby="w4-tab1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="harga_beli">@Harga Beli</span></label>
                                            <input type="number" class="form-control" id="harga_beli"
                                            value="" required>
                                        </div>       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="w4-tab2" role="tabpanel" aria-labelledby="w4-tab2">
                                    <div class="col-md-4">
                                        <label for="nama_barang">Stok Awal</span></label>
                                        <input type="text" class="form-control" id="nama_barang"
                                                value="" required>
                                        <label for="nama_barang">Stok Akhir</span></label>
                                        <input type="text" class="form-control" id="nama_barang"
                                                value="" required>
                                        <label for="nama_barang">Min Akhir</span></label>
                                        <input type="text" class="form-control" id="nama_barang"
                                                value="" required>
                                        <label for="nama_barang">Max Akhir</span></label>
                                        <input type="text" class="form-control" id="nama_barang"
                                                value="" required>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade text-center p-5" id="w4-tab3" role="tabpanel" aria-labelledby="w4-tab3">
                                    <h4 class="card-title">Tab 3</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
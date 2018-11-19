
<div class="page height-full">

<div class="page has-sidebar-left height-full">
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
                        <div class="col-md-6 col-xs-12">
                            <label>No Adjusment</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                                <div class="input-group-append">
                                    <button class="btn btn-danger"><i class="icon icon-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label>Adjustment Oleh</label>
                            <input type="text" class="form-control" disabled>
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
                        <div class="col-md-2 mb-2">
                            <label for="validationCustom01">Qty</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="validationCustom01">Satuan</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">@ Harga Jual</label>
                            <input type="number" class="form-control" id="validationCustom01"
                                   placeholder="0" value="" required disabled>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            	<th>No</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Satuan</th>
                                <th>Stock</th>
                                <th>Stock Baru</th>
                                <th>Selisih</th>
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
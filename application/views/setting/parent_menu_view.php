
<div class="page height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Menu
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <br>
        <div class="card no-b no-r col-md-4">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-12 m-0">
                        <label for="menu">Nama Induk Menu</label>
                        <input type="hidden" class="form-control" id="kode_parent_menu">
                        <input type="text" class="form-control" id="nama_parent_menu">
                    </div>
                    <div class="form-group col-12 m-0">
                        <label for="menu">Icon</label>
                        <input type="text" class="form-control" id="icon">
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <button class="btn btn-primary" id="btnSimpanParentMenu" status="simpan"><i class="icon icon-save"></i> Simpan</button>
            </div>
        </div>
        
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <table class="table table-bordered" id="table_parent_menu">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>menu</th>
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
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
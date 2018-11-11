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
                        Sub Kategori
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
                            <label for="kode_kategori">Nama Kategori</label>
                            <select class="form-control" id="kode_kategori"></select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="validationCustom01">Nama Sub Kategori</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Sub Kategori</th>
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
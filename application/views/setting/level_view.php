
<div class="page height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Level
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
                        <div class="col-md-4 mb-2">
                            <label for="level">Level</label>
                            <input type="text" class="form-control" id="nama_level">
                            <input type="hidden" class="form-control" id="kode_level">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <center>
                        <button class="btn btn-primary" id="btnSimpanLevel" status="simpan"><i class="icon icon-save"></i> Simpan</button>
                    </center>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" id="table_level">
                        <thead>
                            <tr>
                            	<th>No</th>
                                <th>Level</th>
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
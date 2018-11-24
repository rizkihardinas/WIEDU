
<div class="page height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Hak Akses
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
                            <input type="hidden" id="kode_akses">
                            <label for="level">Level</label>
                            <select class="form-control" id="level">
                                <option value="">-- Pilih Level --</option>
                            <?php foreach ($level as $level): ?>
                                <option value="<?php echo $level['kode_level'] ?>"><?php echo $level['nama_level'] ?></option>
                            <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <th>Menu</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($data_menu as $menu): ?>
                                <tr  >
                                  <td data-column="name"><?php echo $menu['nama_menu'] ?></td>
                                  <td>
                                      <center>
                                          <button class="btn btn-warning" id="btnSimpanHakAkses" data-id="<?php echo $menu['kode_menu'] ?>" data-parent="<?php echo $menu['kode_parent_menu'] ?>"><i class="icon icon-plus"></i></button>
                                      </center>
                                  </td>
                                </tr>    
                            <?php endforeach ?>
                          </tbody>
                        
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-hover table-bordered" >
                        <thead>
                            <th>Menu</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="table_yang_diakses">
                          </tbody>
                        
                    </table>
                </div>
            </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
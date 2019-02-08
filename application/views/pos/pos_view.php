<?php 
$this->load->view('parts/header');
$this->load->view('parts/menu');
$this->load->view('parts/sidebar');
 ?>
 <script>
    /*
     *  Add sidebar classes (sidebar-offcanvas-desktop) in body tag
     *  you can remove this script tag and add classes directly to body
     *  this is only for demo
     */
    document.body.className += ' sidebar-collapse' + ' sidebar-offCanvas-lg';
</script>

    <header class="blue accent-2 relative nav-sticky" style="height: 110px;">
        <div class="container-fluid text-white">
        </div>
    </header>
    <div class="container relative animatedParent animateOnce pull-up-lg pull-up-md pull-up-sm">
      <div class="animated fadeInUpShort my-3 mb-5">
          
          <div class="row gutters" style="
                  height: 520px; ">
              <div class="col-md-8 b-r pl-9">
                    <div class="row">
                      <div class="barmenu">
                      <div class="row">
                        <div class="col-md-7 no-pad">&nbsp;</div>
                        <div class="col-md-5"><input type="text" class="form-control" id="validationCustom01" placeholder="Cari Produk" required></div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                        <a href="" class="menu col-md-2 shadow no-b p-2">
                          <span class="badge badge-primary right">Rp. 15.000</span>
                          <img class="card-img-top" src="assets/img/menu/M001.jpg" alt="">
                          <div class="nama">
                              <small class="text-center">Es Kopi Susu BOTOL</small>
                          </div>
                        </a>
                        <a href="" class="menu col-md-2 shadow no-b p-2">
                          <span class="badge badge-primary right">Rp. 12.000</span>
                          <img class="card-img-top" src="assets/img/menu/M002.jpg" alt="">
                          <div class="nama">
                              <small class="text-center">Es Kopi Susu</small>
                          </div>
                        </a>
                        <a href="" class="menu col-md-2 shadow no-b p-2">
                          <span class="badge badge-primary right">Rp. 10.000</span>
                          <img class="card-img-top" src="assets/img/menu/M003.jpg" alt="">
                          <div class="nama">
                              <small class="text-center">French fries</small>
                          </div>
                        </a>
                    </div>
              </div>
              <div class="col-md-4 det-pos">
                <div class="row">
                  <div class="col-md-12 no-pad" style="
                  height: 230px; background: #fff;">
                    
                    <table class="table table-hover ">
                      <tbody>
                          <tr class="no-b">
                              <td>
                                  <h6>ES KOPI SUSU BOTOL</h6>
                                  <small class="text-muted">Coffee</small>
                              </td>
                              <td>Rp. 15000</td>
                              <td>
                                  <a class="btn-fab btn-fab-sm btn-primary text-white">
                                      <i class="icon-trash"></i>
                                  </a>
                              </td>
                          </tr>
                          <tr class="no-b">
                              <td>
                                  <h6>FRENCH FRIES</h6>
                                  <small class="text-muted">Food</small>
                              </td>
                              <td>Rp. 10000</td>
                              <td>
                                  <a class="btn-fab btn-fab-sm btn-primary text-white">
                                      <i class="icon-trash"></i>
                                  </a>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                  <hr>

                                    <button type="button" class="btn btn-primary btn-lg btn-block"><b>BAYAR (Rp. 30.000)</b></button>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
   <!-- <<<<<<< tutup header -->
<?php 
$this->load->view('parts/footer');
 ?>
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

    <header class="blue accent-2 relative nav-sticky" style="height: 150px;">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
            </div>
        </div>
    </header>
    <div class="container relative animatedParent animateOnce pull-up-lg pull-up-md pull-up-sm">
      <div class="animated fadeInUpShort my-3 mb-5">
          
          <div class="row no-gutters my-1 white">
              <div class="col-md-8 b-r pl-3">
                    <div class="row">
                        <a href="" class="menu card shadow no-b p-2">
                                <img class="card-img-top" src="assets/img/menu/M001.jpg" alt="">
                                <div class="center">
                                    <small>Es Kopi Susu</small>
                                </div>
                        </a>
                        <a href="" class="menu card shadow no-b p-2">
                                <img class="card-img-top" src="assets/img/menu/M002.jpg" alt="">
                                <div class="center">
                                    <small>Es Kopi Susu</small>
                                </div>
                        </a>
                        <a href="" class="menu card shadow no-b p-2">
                                <img class="card-img-top" src="assets/img/menu/M003.jpg" alt="">
                                <div class="center">
                                    <small>Es Kopi Susu</small>
                                </div>
                        </a>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12">
                    <label>Customer</label>
                  <div class="input-group mb-3">
                      <input type="text" class="form-control">
                      <div class="input-group-append">
                          <button class="btn btn-primary"><i class="icon icon-plus"></i></button>
                      </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <label>No Faktur</label>
                  <input type="text" disabled class="form-control">
                </div>
                <div class="col-md-12">
                  <label>Nama Barang</label>
                  <select class="form-control">
                    <option>Nama Barang</option>
                  </select>
                </div>
                <hr>
                <div class="col-md-12" style="overflow: scroll;height: 300px;">
                  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                    Total  barang
                    </div>
                    <div class="col-md-5">
                    Total 
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive white">
                      <table class="table table-striped table-hover r-0">
                          <thead>
                          <tr class="no-b">
                              <th>COIN NAME</th>
                              <th>PRICE (USD)</th>
                              <th>MARKET CAP</th>
                              <th>CHANGE(24H)</th>
                              <th>STATUS</th>
                              <th>PURCHASE</th>
                              <th></th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="assets/fonts/icons/svg/cenz.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Centurs</strong>
                                      </div>
                                      <small>CENZ</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#7dc855",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="assets/fonts/icons/svg/eth.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Ethereum</strong>
                                      </div>
                                      <small>ETH</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#7dc855",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="assets/fonts/icons/svg/sbd.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Ethereum</strong>
                                      </div>
                                      <small>SBD</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 34, 5, 4, 25, 4, 3, 4, 5, 22, 17, 5, 1, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#fcce54",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="assets/fonts/icons/svg/ada.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Ethereum</strong>
                                      </div>
                                      <small>ETH</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#ed5564",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          </tbody>
                      </table>
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
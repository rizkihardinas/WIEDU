<?php 
$this->load->view('parts/header');
$this->load->view('parts/menu');
$this->load->view('parts/sidebar');
 ?>
<!--Sidebar End-->
    <div class="blue accent-2 p-5">
        <canvas data-chart="line" height="300" data-dataset="[
          [500, 350, 250, 150, 300, 400, 470, 540, 250],
          [100, 10, 50, 0, 300, 250, 70, 45, 30],

          ]" data-labels="['Senin, 19',
          'Selasa, 20',
          'Rabu, 21',
          'Kamis, 22',
          'Jumat, 23',
          'Sabtu, 24',
          'Minggu, 25 ',
          'Senin, 26',
          'Selasa, 27',]" data-dataset-options="[
          {   label:'Penjualan',
          fill: false,

          backgroundColor: '#fff',
          borderColor: 'rgba(255,255,255,0.5)',
          pointBorderColor: '#fff',
          pointBackgroundColor: '#4285f4',
          pointBorderWidth: '0',
          pointStyle: 'circle',
          borderWidth: 2,
          borderJoinStyle: 'miter',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: '#fff',
          pointHoverBorderWidth: 1,
          pointRadius: 3,
          lineTension:0,
            },
            {   label:'Pengeluaran',
            fill: false,
            borderDash: [5, 5],
            backgroundColor: '#fff',
            borderColor: 'rgba(0,0,0,0.1)',
            pointBorderColor: '#fff',
            pointBackgroundColor: '#4285f4',
            pointBorderWidth: '0',
            pointStyle: 'circle',
            borderWidth: 2,
            borderJoinStyle: 'miter',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: '#fff',
            pointHoverBorderWidth: 1,
            pointRadius: 3,
            lineTension:0,
        },
        ]" data-options="{
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    labels: {
                        fontColor: 'white',

                    }

                },
    
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            fontColor: 'rgba(255,255,255,0.5)',
                          
                        },
                        gridLines: {
                            display: false,
                        }

                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            fontColor: 'rgba(255,255,255,0.5)',
                            stepSize: 50,
                          
                        },
                        gridLines: {
                            zeroLineColor: 'rgba(255,255,255,0.1)',
                            color: 'rgba(255,255,255,0.1)',

                        }
                    }]

                },
                elements: {
                    line: {
                        tension: 0.4,
                        borderWidth: 1
                    },
                    point: {
                        radius: 2,
                        hitRadius: 10,
                        hoverRadius: 6,
                        borderWidth: 4,


                    }
                }
            }">
        </canvas>
    </div>
    <div class="container-fluid animatedParent animateOnce no-p">
        <div class="animated fadeInUpShort">
            <div class="card no-b shadow">
                <div class="card-body p-0">
                    <div class="lightSlider" data-item="6" data-item-xl="4" data-item-md="2" data-item-sm="1" data-pause="7000" data-pager="false" data-auto="true"
                        data-loop="true">
                        <div class="p-5 purple lighten-3 text-white">
                            <h5 class="font-weight-bold s-14">OMSET</h5>
                            <span class="align-top">Rp.<span class="s-48 font-weight-lighter">670.</span><small>000</small></span>
                            <div> Traffic
                                <span class="text-primary">
                                    <i class="icon icon-arrow_upward"></i> 20%</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h5 class="font-weight-bold s-14">PROFIT</h5>
                            <span class="align-top">Rp.<span class="s-48 font-weight-lighter text-green">335.</span><small class="text-green">000</small></span>
                            <div> Traffic
                                <span class="text-green">
                                    <i class="icon icon-arrow_upward"></i> 20%</span>
                            </div>
                        </div>

                        <div class="p-5 light">
                            <h5 class="font-weight-bold s-14">POTONGAN</h5>
                            <span class="align-top">Rp.<span class="s-48 font-weight-lighter amber-text">5.</span><small class="amber-text">000</small></span>
                            <div> Traffic
                                <span class="amber-text">
                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h5 class="font-weight-bold s-14">PENDAPATAN</h5>
                            <span class="align-top">Rp.<span class="s-48 font-weight-lighter text-primary">675.</span><small class="text-primary">000</small></span>
                            <div> Traffic
                                <span class="text-primary">
                                    <i class="icon icon-arrow_upward"></i> 20%</span>
                            </div>
                        </div>

                        <div class="p-5 light">
                            <h5 class="font-weight-bold s-14">TERJUAL</h5>
                            <span class="align-top"><span class="s-48 font-weight-lighter text-indigo">70</span> <small class="text-indigo">Cup</small></span>
                            <div> Traffic
                                <span class="text-indigo">
                                    <i class="icon icon-arrow_upward"></i> 89%</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h5 class="font-weight-bold s-14">Helium</h5>
                            <span class="align-top">Rp.<span class="s-48 font-weight-lighter pink-text">675.</span><small class="pink-text">000</small></span>
                            <div> Traffic
                                <span class="pink-text">
                                    <i class="icon icon-arrow_downward"></i> 47%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <div class="row my-3">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header white">
                                <h6>LATEST COMMENTS</h6>
                            </div>
                            <div class="card-body slimScroll" data-height="500">
                                <div class="media p-3 b-b">
                                    <img class="mr-3 mt-1 w-40px" src="assets/img/dummy/u4.png" alt="user">
                                    <div class="media-body">
                                        <h6 class="mt-0">Ami Fro</h6>
                                        Cras sit amet nibh libero, in gravida nulla.
                                    </div>
                                </div>
                                <div class="media p-3">
                                    <img class="mr-3 w-40px" src="assets/img/dummy/u1.png" alt="user">
                                    <div class="media-body">
                                        <h6 class="mt-0">Sara Kamzoon</h6>
                                        vestibulum in vulputate at, tempus viverra turpis.
                                        <div class="media p-2 my-3 bg-light r-5">
                                            <a class="pr-3" href="#">
                                                <img class="mt-1 w-40px" src="assets/img/dummy/u2.png" alt="user">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="mt-0">Joe Doe</h6>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                            </div>
                                        </div>
                                        <div class="media p-2 my-3 r-5">
                                            <a class="pr-3" href="#">
                                                <img class="mt-1 w-40px" src="assets/img/dummy/u3.png" alt="user">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="mt-0">Find Doe
                                                    <span class="badge r-3 badge-primary pt-1 pb-1">Moderator</span>
                                                </h6>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media p-3 r-5 yellow lighten-5">
                                    <img class="mr-3 mt-1 w-40px" src="assets/img/dummy/u6.png" alt="user">
                                    <div class="media-body">
                                        <span class="badge r-3 badge-warning pt-1 pb-1 float-right">Reported</span>
                                        <h6 class="mt-0">Ami Fro</h6>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                        vulputate at, tempus viverra turpis.
                                    </div>
                                </div>
                                <div class="media p-3">
                                    <img class="mr-3 mt-1 w-40px" src="assets/img/dummy/u5.png" alt="user">
                                    <div class="media-body">

                                        <h6 class="mt-0">Ami Fro </h6>

                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                        vulputate at, tempus viverra turpis.
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card light b-0">
                            <div class="card-header light">NEW ORDERS</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <tbody>
                                            <tr class="no-b">
                                                <td class="w-10">
                                                    <img src="assets/img/demo/shop/s1.png" alt="">
                                                </td>
                                                <td>
                                                    <h6>Apple Product</h6>
                                                    <small class="text-muted">Mobile Phones</small>
                                                </td>
                                                <td>$250</td>
                                                <td>
                                                    <span class="badge badge-success">Delivered</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <i class="icon icon-data_usage"></i> 5 days ago</span>
                                                    <br>
                                                    <span>
                                                        <i class="icon icon-timer"></i> 5 September, 2017</span>
                                                </td>
                                                <td>
                                                    <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <img src="assets/img/demo/shop/s2.png" alt="">
                                                </td>
                                                <td>
                                                    <h6>Apple Product</h6>
                                                    <small class="text-muted">Mobile Phones</small>
                                                </td>
                                                <td>$250</td>
                                                <td>
                                                    <span class="badge badge-success">Delivered</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <i class="icon icon-data_usage"></i> 5 days ago</span>
                                                    <br>
                                                    <span>
                                                        <i class="icon icon-timer"></i> 5 September, 2017</span>
                                                </td>
                                                <td>
                                                    <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <img src="assets/img/demo/shop/s3.png" alt="">
                                                </td>
                                                <td>
                                                    <h6>Apple Product</h6>
                                                    <small class="text-muted">Mobile Phones</small>
                                                </td>
                                                <td>$250</td>
                                                <td>
                                                    <span class="badge badge-danger">Pending</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <i class="icon icon-data_usage"></i> 5 days ago</span>
                                                    <br>
                                                    <span>
                                                        <i class="icon icon-timer"></i> 5 September, 2017</span>
                                                </td>
                                                <td>
                                                    <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <img src="assets/img/demo/shop/s4.png" alt="">
                                                </td>
                                                <td>
                                                    <h6>Apple Product</h6>
                                                    <small class="text-muted">Mobile Phones</small>
                                                </td>
                                                <td>$250</td>
                                                <td>
                                                    <span class="badge badge-success">Delivered</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <i class="icon icon-data_usage"></i> 5 days ago</span>
                                                    <br>
                                                    <span>
                                                        <i class="icon icon-timer"></i> 5 September, 2017</span>
                                                </td>
                                                <td>
                                                    <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <img src="assets/img/demo/shop/s5.png" alt="">
                                                </td>
                                                <td>
                                                    <h6>Apple Product</h6>
                                                    <small class="text-muted">Mobile Phones</small>
                                                </td>
                                                <td>$250</td>
                                                <td>
                                                    <span class="badge badge-primary">Sold Out</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <i class="icon icon-data_usage"></i> 5 days ago</span>
                                                    <br>
                                                    <span>
                                                        <i class="icon icon-timer"></i> 5 September, 2017</span>
                                                </td>
                                                <td>
                                                    <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <img src="assets/img/demo/shop/s6.png" alt="">
                                                </td>
                                                <td>
                                                    <h6>Apple Product</h6>
                                                    <small class="text-muted">Mobile Phones</small>
                                                </td>
                                                <td>$250</td>
                                                <td>
                                                    <span class="badge badge-warning">Low Stock</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <i class="icon icon-data_usage"></i> 5 days ago</span>
                                                    <br>
                                                    <span>
                                                        <i class="icon icon-timer"></i> 5 September, 2017</span>
                                                </td>
                                                <td>
                                                    <a class="btn-fab btn-fab-sm btn-primary text-white">
                                                        <i class="icon-eye"></i>
                                                    </a>
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
        </div>
    </div>
   <!-- <<<<<<< tutup header -->
<?php 
$this->load->view('parts/footer');
 ?>
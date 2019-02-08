
<div class="page height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user"></i>
                        Kasir
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                    	<?php echo anchor('Kasir','<i class="icon icon-home2"></i>All Users','class="nav-link"') ?>
                    </li>
                    <li>
                    	<?php echo anchor('Kasir/add','<i class="icon icon-plus-circle"></i> Add New User',' class="nav-link active""') ?>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-7  offset-md-2">
                    <form action="#">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">Tentang User</h5>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Nama User</label>
                                            <input id="name" placeholder="Enter User Name" class="form-control r-0 light s-12 " type="text">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-6 m-0">
                                                <label for="cnic" class="col-form-label s-12"><i class="icon-fingerprint"></i>Nama Panggilan</label>
                                                <input id="cnic" placeholder="Nama Panggilan" class="form-control r-0 light s-12 date-picker" type="text">
                                            </div>
                                            <div class="form-group col-6 m-0">
                                                <label for="dob" class="col-form-label s-12"><i class="icon-calendar mr-2"></i>Tanggal Lahir</label>
                                                <input id="dob"  class="form-control r-0 light s-12 datePicker" data-time-picker="false"
                                                       data-format-date='Y/m/d' type="date">
                                            </div>
                                        </div>

                                        <div class="form-group m-0">
                                            <label for="dob" class="col-form-label s-12">Jenis Kelamin</label>
                                            <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="male" name="gender" class="custom-control-input">
                                                <label class="custom-control-label m-0" for="male">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="female" name="gender" class="custom-control-input">
                                                <label class="custom-control-label m-0" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-md-1">
                                        <input hidden id="file" name="file"/>
                                        <div class="dropzone dropzone-file-area pt-4 pb-4" id="fileUpload">
                                            <div class="dz-default dz-message">
                                                <span>Pilih foto terbagus kamu</span>
                                                <div>Untuk memulai hari yang cerah</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row mt-1">
                                    <div class="form-group col-4 m-0">
                                        <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                        <input id="email" placeholder="user@email.com" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-group col-4 m-0">
                                        <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Phone</label>
                                        <input id="phone" placeholder="05112345678" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="mobile" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Mobile</label>
                                        <input id="mobile" placeholder="eg: 3334709643" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-9 m-0">
                                        <label for="address"  class="col-form-label s-12">Alamat</label>
                                        <input type="text" class="form-control r-0 light s-12" id="address"
                                               placeholder="Enter Address">
                                    </div>

                                    <div class="form-group col-3 m-0">
                                        <label for="inputCity" class="col-form-label s-12">Kota</label>
                                        <input type="text" class="form-control r-0 light s-12" id="inputCity">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">Apps Detail</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label for="roll1" class="col-form-label s-12">Username</label>
                                        <input id="roll1" placeholder="Enter ID Number" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col m-0">
                                        <label for="roll2" class="col-form-label s-12">Password</label>
                                        <input id="roll2" placeholder="Select Class" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">Pilih Level Akses</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Pilih Level Akses</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                        	<option>Administrator</option>
                                            <option value="1">Kasir</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>
<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>

    <?php 
$this->load->view('parts/footer');
 ?>
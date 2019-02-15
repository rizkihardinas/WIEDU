<div class="page height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user"></i>
                        Pengguna
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <?php echo anchor('Kasir','<i class="icon icon-home2"></i>All Users',' class="nav-link active"') ?>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row">
                <div class="col-md-6">
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
                            
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
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
                            
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card r-0 shadow">
                    <div class="table-responsive">
                        <form>
                            <table class="table table-striped table-hover r-0">
                                <thead>
                                <tr class="no-b">
                                    <th style="width: 30px">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                class="custom-control-label" for="checkedAll"></label>
                                        </div>
                                    </th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Supplier</th>
                                    <th>Service Level</th>
                                    <th>No Telp</th>
                                    <th>Alamat</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkSingle"
                                                   id="user_id_1" required><label
                                                class="custom-control-label" for="user_id_1"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="avatar avatar-md mr-3 mt-1 float-left">
                                            <span class="avatar-letter avatar-letter-m avatar-md circle"></span>
                                        </div>
                                        <div>
                                            <div>
                                                <strong>Muhammad Roni Siantury</strong>
                                            </div>
                                            <small> alexander@paper.com</small>
                                        </div>
                                    </td>

                                    <td>2</td>
                                    <td>256</td>

                                    <td>+92 333 123 136</td>
                                    <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> Inactive</td>
                                    <td><span class="r-3 badge badge-success ">Administrator</span></td>
                                    <td>
                                        <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                        <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>
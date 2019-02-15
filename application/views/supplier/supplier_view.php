<div class="page height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user"></i>
                        Supplier
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <?php echo anchor('Supplier','<i class="icon icon-home2"></i>Semua Supplier',' class="nav-link active"') ?>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row">
                <div class="col-md-6">
                    <div class="card no-b  no-r">
                        <div class="card-body">
                            <h5 class="card-title">Tentang Supplier</h5>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Kode Supplier</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" disabled id="kode_supplier">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger" id="btnModalSupplier"><i class="icon icon-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-0">
                                        <label for="nama_perusahaan_supplier" class="col-form-label s-12">Nama Perusahaan</label>
                                        <input id="nama_perusahaan_supplier" placeholder="Masukan Nama Supllier" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 m-0">
                                            <label for="nama_supplier" class="col-form-label s-12"><i class="icon-fingerprint"></i>Nama Supplier</label>
                                            <input id="nama_supplier" placeholder="Nama Supplier" class="form-control r-0 light s-12 date-picker" type="text">
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
                                <div class="form-row mt-1">
                                    <div class="form-group col-4 m-0">
                                        <label for="email_supplier" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                        <input id="email_supplier" placeholder="user@gmail.com" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-group col-4 m-0">
                                        <label for="no_telp_perusahaan" class="col-form-label s-12"><i class="icon-phone mr-2"></i>No Telp Perusahaan</label>
                                        <input id="no_telp_perusahaan" placeholder="05112345678" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="no_telp_supplier" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>No Hp Suuplier</label>
                                        <input id="no_telp_supplier" placeholder="eg: 0896 9195 4472" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Alamat</h5>
                        <div class="form-row">
                            <div class="form-row mt-1">
                            <div class="form-group col-6 m-0">
                                <label class="my-1 mr-2" for="provinsi_supplier">Provinsi</label>
                                <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="provinsi_supplier">
                                    <option value=''>-- Pilih Provinsi --</option>
                                    <?php foreach ($provinsi as $data): ?>

                                        <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group col-6 m-0">
                                <label class="my-1 mr-2" for="kabupaten_supplier">Kota</label>
                                <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="kabupaten_supplier">
                                    <option>-- Pilih Kota --</option>
                                </select>
                            </div>
                            

                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-row mt-1">
                            <div class="form-group col-6 m-0">
                                <label class="my-1 mr-2" for="kecamatan_supplier">Kecamatan</label>
                                <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="kecamatan_supplier">
                                    <option>-- Pilih Kecamatan --</option>
                                </select>
                            </div>

                            <div class="form-group col-6 m-0">
                                <label class="my-1 mr-2" for="kelurahan_supplier">Kelurahan/Desa</label>
                                <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="kelurahan_supplier">
                                    <option>-- Pilih Kelurahan/Desa --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-9 m-0">
                            <label for="alamat_lengkap_supplier" class="col-form-label s-12">Alamat</label>
                            <textarea id="alamat_lengkap_supplier" class="form-control r-0 light s-12"></textarea>
                        </div>

                        <div class="form-group col-3 m-0">
                            <label for="kodepos_supplier" class="col-form-label s-12">Kode Pos</label>
                            <input type="text" class="form-control r-0 light s-12" id="kodepos_supplier">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-6 m-0">
                            <label class="my-1 mr-2" for="kode_bank">Bank</label>
                                <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="kode_bank">
                                    <option value="">-- Pilih Bank --</option>
                                    <?php foreach ($bank as $bank): ?>
                                    <option value="<?php echo $bank['code'] ?>"><?php echo $bank['bank'] ?></option>  
                                    <?php endforeach ?>
                                </select>
                        </div>

                        <div class="form-group col-6 m-0">
                            <label for="no_rekening_supplier" class="col-form-label s-12">No Rekening</label>
                            <input type="text" class="form-control r-0 light s-12" id="no_rekening_supplier">
                        </div>
                        <div class="form-group col-12 m-0">
                            <label for="atas_nama_supplier" class="col-form-label s-12">Atas Nama</label>
                            <input type="text" class="form-control r-0 light s-12" id="atas_nama_supplier">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <center>
                        <button class="btn btn-primary" id="btnSimpanSupplier" status="simpan"><i class="icon icon-save"></i> Simpan</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalSupplier" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
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
                        <th>No Telp</th>
                        <th><i class="icon-cogs"></i></th>
                    </tr>
                    </thead>

                    <tbody id="data_supplier">

                    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>

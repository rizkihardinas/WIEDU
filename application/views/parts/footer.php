
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
                        <div class="progress-bar bg-error" role="progressbar" style="width: 75%;" aria-valuenow="75"
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
            <div class="activity-item activity-error">
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
<!--/#app -->
<script src="<?php echo base_url() ?>assets/js/app.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    window.onbeforeunload = function() {
        var x = doMyStaff();
            return x;
        };

        function doMyStaff(){
                console.log(new Date());
                return "Check console there are Date!"
        }
    $(document).ready(function(){
        
        $('#table_level').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": '<?php echo base_url(); ?>/setting/get_level',
                "type": "POST"
            },
            "sColumns": [
                {"data": "kode_level",width:170},
                {"data": "nama_level",width:220},
                {"data": "action",width:170}
            ]

        });
        $('#table_menu').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": '<?php echo base_url(); ?>/setting/get_menu',
                "type": "POST"
            },
            "sColumns": [
                {"data": "kode_menu",width:170},
                {"data": "nama_menu",width:220},
                {"data": "action",width:170}
            ]

        });
        $('#table_kategori').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": '<?php echo base_url(); ?>/kategori/get_kategori',
                "type": "POST"
            },
            "sColumns": [
                {"data": "kode_kategori",width:220},
                {"data": "nama_kategori",width:220},
                {"data": "action",width:170}
            ]

        });
        $('#table_sub_kategori').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": '<?php echo base_url(); ?>/sub_kategori/get_sub_kategori',
                "type": "POST"
            },
            "sColumns": [
                {"data": "kode_sub_kategori",width:220},
                {"data": "nama_kategori",width:220},
                {"data": "nama_sub_kategori",width:220},
                {"data": "action",width:170}
            ]

        });
        $('#table_parent_menu').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": '<?php echo base_url(); ?>/setting/get_parent_menu',
                "type": "POST"
            },
            "sColumns": [
                {"data": "kode_parent_menu",width:170},
                {"data": "nama_parent_menu",width:220},
                {"data": "action",width:170}
            ]

        });
        
        getKode();
    });
    function getKode(){
        $.ajax({
            url:'<?php echo base_url() ?>/setting/get_kode',
            success:function(data){
                $('#kode_level').val(data);
                $('#kode_akses').val(data);
                $('#kode_menu').val(data);
                $('#kode_parent_menu').val(data);
                $('#kode_sub_kategori').val(data);
                $('#kode_kategori').val(data);
            }
        });
    }
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();

    var output = ((''+month).length<2 ? '0' : '') + month + '/' +
        ((''+day).length<2 ? '0' : '') + day+ '/'+d.getFullYear();
    $('#tgl_input').val(output);
    /** add active class and stay opened when selected */
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.sidebar-menu a').filter(function() {
       return this.href == url;
    }).parent().addClass('active');


    // for treeview
    $('ul.treeview-menu a').filter(function() {
       return this.href == url;
    }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
    (function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)
    $(document).on('click','#btnSimpanLevel',function () {
        var kode_level = $('#kode_level').val();
        var nama_level = $('#nama_level').val();
        var status = $(this).attr('status');
        var value = {
            kode_level:kode_level,
            nama_level:nama_level,
            status:status
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/simpan_level',
            type:'POST',
            success:function(data){
                
                if (data == 0) {
                    swal('Berhasil','Data berhasil dimasukan','success');
                    var table = $('#table_level').DataTable();
                    table.ajax.reload();
                }else if (data == 2) {
                    swal('Berhasil','Data berhasil diubah','success');
                    var table = $('#table_level').DataTable();
                    table.ajax.reload(null,false);
                }
                else if (data == 3) {
                    swal('Peringatan','Data sudah tersedia','warning');
                    var table = $('#table_level').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dimasukan','error');
                }
            }
        });
    });
    $(document).on('click','#btnSimpanKategori',function () {
        var kode_kategori = $('#kode_kategori').val();
        var nama_kategori = $('#nama_kategori').val();
        var status = $(this).attr('status');
        var value = {
            kode_kategori:kode_kategori,
            nama_kategori:nama_kategori,
            status:status
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>Kategori/simpan_kategori',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    swal('Berhasil','Data berhasil dimasukan','success');
                    var table = $('#table_kategori').DataTable();
                    table.ajax.reload();
                    getKode();
                }else if (data == 2) {
                    swal('Berhasil','Data berhasil diubah','success');
                    var table = $('#table_kategori').DataTable();
                    table.ajax.reload(null,false);
                }
                else if (data == 3) {
                    swal('Peringatan','Data sudah tersedia','warning');
                    var table = $('#table_kategori').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dimasukan','error');
                }
            }
        });
    });
    $(document).on('click','#btnSimpanSubKategori',function () {
        var kode_kategori = $('#kode_kategori').val();
        var kode_sub_kategori = $('#kode_sub_kategori').val();
        var nama_sub_kategori = $('#nama_sub_kategori').val();
        var status = $(this).attr('status');
        var value = {
            kode_kategori:kode_kategori,
            kode_sub_kategori:kode_sub_kategori,
            nama_sub_kategori:nama_sub_kategori,
            status:status
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>sub_Kategori/simpan_sub_kategori',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    swal('Berhasil','Data berhasil dimasukan','success');
                    var table = $('#table_sub_kategori').DataTable();
                    table.ajax.reload();
                    getKode();
                }else if (data == 2) {
                    swal('Berhasil','Data berhasil diubah','success');
                    var table = $('#table_sub_kategori').DataTable();
                    table.ajax.reload(null,false);
                }
                else if (data == 3) {
                    swal('Peringatan','Data sudah tersedia','warning');
                    var table = $('#table_sub_kategori').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dimasukan','error');
                }
            }
        });
    });
    $(document).on('click','#btnSimpanMenu',function () {
        var kode_menu = $('#kode_menu').val();
        var kode_parent_menu = $('#kode_parent_menu').val();
        var nama_menu = $('#nama_menu').val();
        var url = $('#url_menu').val();
        var status = $(this).attr('status');
        var value = {
            kode_parent_menu:kode_parent_menu,
            kode_menu:kode_menu,
            nama_menu:nama_menu,
            url:url,
            status:status
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/simpan_menu',
            type:'POST',
            success:function(data){
                
                if (data == 0) {
                    swal('Berhasil','Data berhasil dimasukan','success');
                    var table = $('#table_menu').DataTable();
                    table.ajax.reload();
                }else if (data == 2) {
                    swal('Berhasil','Data berhasil diubah','success');
                    var table = $('#table_menu').DataTable();
                    table.ajax.reload(null,false);
                }
                else if (data == 3) {
                    swal('Peringatan','Data sudah tersedia','warning');
                    var table = $('#table_menu').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dimasukan','error');
                }
            }
        });
    });
    $(document).on('click','#btnSimpanParentMenu',function () {
        var kode_parent_menu = $('#kode_parent_menu').val();
        var nama_parent_menu = $('#nama_parent_menu').val();
        var icon = $('#icon').val();
        var status = $(this).attr('status');
        var value = {
            kode_parent_menu:kode_parent_menu,
            nama_parent_menu:nama_parent_menu,
            icon:icon,
            status:status
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/simpan_parent_menu',
            type:'POST',
            success:function(data){
                
                if (data == 0) {
                    swal('Berhasil','Data berhasil dimasukan','success');
                    var table = $('#table_parent_menu').DataTable();
                    table.ajax.reload();
                }else if (data == 2) {
                    swal('Berhasil','Data berhasil diubah','success');
                    var table = $('#table_parent_menu').DataTable();
                    table.ajax.reload(null,false);
                }
                else if (data == 3) {
                    swal('Peringatan','Data sudah tersedia','warning');
                    var table = $('#table_parent_menu').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dimasukan','error');
                }
            }
        });
    });
    $(document).on('click','#btnHapusLevel',function () {
        var kode_level = $(this).attr('data-id');
        var value = {
            kode_level:kode_level
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/delete_level',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    swal('Berhasil','Data dihapus dimasukan','success');
                    var table = $('#table_level').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dihapus','error');
                }
            }
        })
    });
    $(document).on('click','#btnHapusMenu',function () {
        var kode_menu = $(this).attr('data-id');
        var value = {
            kode_menu:kode_menu
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/delete_menu',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    swal('Berhasil','Data dihapus dimasukan','success');
                    var table = $('#table_menu').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dihapus','error');
                }
            }
        })
    });
    $(document).on('click','#btnHapusParentMenu',function () {
        var kode_parent_menu = $(this).attr('data-id');
        var value = {
            kode_parent_menu:kode_parent_menu
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/delete_parent_menu',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    swal('Berhasil','Data dihapus dimasukan','success');
                    var table = $('#table_parent_menu').DataTable();
                    table.ajax.reload(null,false);
                }
                else{
                    swal('Gagal','Data gagal dihapus','error');
                }
            }
        })
    });
    $(document).on('click','#btnEditLevel',function () {
        var kode_level = $(this).attr('data-id');
        var value = {
            kode_level:kode_level
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/get_detail_level',
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                var kode_level = json[0].kode_level;
                var nama_level = json[0].nama_level;
                $('#kode_level').val(kode_level);
                $('#nama_level').val(nama_level);
                $('#btnSimpanLevel').attr('status','ubah'); 
            }
        })
    });
    $(document).on('click','#btnEditKategori',function () {
        var kode = $(this).attr('data-id');
        var value = {
            kode:kode
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>kategori/get_detail_kategori',
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                var kode_kategori = json[0].kode_kategori;
                var nama_kategori = json[0].nama_kategori;
                $('#kode_kategori').val(kode_kategori);
                $('#nama_kategori').val(nama_kategori);
                $('#btnSimpanKategori').attr('status','ubah'); 
            }
        })
    });
    $(document).on('click','#btnEditSubKategori',function () {
        var kode_sub_kategori = $(this).attr('data-id');
        var value = {
            kode_sub_kategori:kode_sub_kategori
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>sub_kategori/get_detail_sub_kategori',
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                var kode_kategori = json[0].kode_kategori;
                var kode_sub_kategori = json[0].kode_sub_kategori;
                var nama_sub_kategori = json[0].nama_sub_kategori;
                $('#kode_kategori').val(kode_kategori);
                $('#kode_sub_kategori').val(kode_sub_kategori);
                $('#nama_sub_kategori').val(nama_sub_kategori);
                $('#btnSimpanSubKategori').attr('status','ubah'); 
            }
        })
    });
    $(document).on('click','#btnEditMenu',function () {
        var kode_menu = $(this).attr('data-id');
        var value = {
            kode_menu:kode_menu
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/get_detail_menu',
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                var kode_menu = json[0].kode_menu;
                var kode_parent_menu = json[0].kode_parent_menu;
                var nama_menu = json[0].nama_menu;
                var url = json[0].url;
                $('#kode_menu').val(kode_menu);
                $('#kode_parent_menu').val(kode_parent_menu);
                $('#nama_menu').val(nama_menu);
                $('#url_menu').val(url);
                $('#btnSimpanMenu').attr('status','ubah'); 
            }
        })
    });
    $(document).on('click','#btnEditParentMenu',function () {
        var kode_parent_menu = $(this).attr('data-id');
        var value = {
            kode_parent_menu:kode_parent_menu
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/get_detail_parent_menu',
            type:'POST',
            success:function(data){
                var json = jQuery.parseJSON(data);
                var kode_parent_menu = json[0].kode_parent_menu;
                var nama_parent_menu = json[0].nama_parent_menu;
                var icon = json[0].icon_parent_menu;
                $('#kode_parent_menu').val(kode_parent_menu);
                $('#nama_parent_menu').val(nama_parent_menu);
                $('#icon').val(icon);
                $('#btnSimpanParentMenu').attr('status','ubah'); 
            }
        })
    });
    $('#barcode').keypress(function(e) {
        var barcode = $('#barcode').val();
        if(e.which == 13) {
            
            if (barcode == '') {
                swal({
                  title: "Generate barcode ?",
                  text: "Apakah barcode pabrik tidak tersedia ?",
                  icon: "warning",
                  buttons: true,
                  errorMode: true,
                })
                .then((generateBarcode) => {
                  if (generateBarcode) {
                    $.ajax({
                        url: '<?php echo base_url(); ?>Produk/generate_barcode',
                        success:function(data){
                            $('#barcode').val(data);
                            $('#view_barcode').attr('src',"<?php echo base_url(); ?>/Produk/barcode/"+data);
                            $('#nama_barang_panjang').focus();
                        }
                    });
                  } else {
                    $('#barcode').focus();
                    $('#view_barcode').attr('src',"<?php echo base_url(); ?>/Produk/barcode/"+barcode);
                  }
                });
            }else{
                $('#nama_barang_panjang').focus();
                $('#view_barcode').attr('src',"<?php echo base_url(); ?>/Produk/barcode/"+barcode);
            }
        }
    });
    
    function reload_akses(kode_level){
        var kode_level = kode_level;
        var value = {
            kode_level:kode_level
        };
        $.ajax({
            url:'<?php echo base_url() ?>Setting/get_yang_diakses',
            type:'POST',
            data:value,
            success:function(data){
                $('#table_yang_diakses').html(data);
            }
        });
    }
    $(document).change('#level',function(){
        reload_akses($('#level').val());

    });
    $(document).on('click','#btnSimpanHakAkses',function(){
        var kode_akses = $('#kode_akses').val();
        var kode_level = $('#level').val();
        var kode_menu = $(this).attr('data-id');
        var value = {
            kode_akses:kode_akses,
            kode_level:kode_level,
            kode_menu:kode_menu,
        };
        if (kode_level == '') {
            swal('Peringatan!','Level tidak boleh kosong');
        }else if (kode_menu == '') {
            swal('Peringatan!','Menu harus dipilih');
        }else{
            $.ajax({
                data:value,
                url:'<?php echo base_url(); ?>setting/simpan_akses',
                type:'POST',
                success:function(data){
                    if (data == 0) {
                        reload_akses(kode_level);
                        getKode();
                    }else if (data == 3) {
                        swal('Peringatan','Data sudah tersedia','warning');
                        var table = $('#table_level').DataTable();
                        table.ajax.reload(null,false);
                    }
                    else{
                        swal('Gagal','Data gagal dimasukan','error');
                    }
                }
            });
        }
        
    });
    $(document).on('click','#btnHapusHakAkses',function () {
        var kode_akses = $(this).attr('data-id');
        var kode_level = $('#level').val();
        var value = {
            kode_akses:kode_akses
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>setting/hapus_akses',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    reload_akses(kode_level);
                }
                else{
                    swal('Gagal','Data gagal dihapus','error');
                }
            }
        })
    });
    $(document).on('click','#btnHapusKategori',function () {
        var kode_kategori = $(this).attr('data-id');
        var value = {
            kode_kategori:kode_kategori
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>kategori/hapus_kategori',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    swal('Berhasil','Data berhasil duhapus','success');
                    var table = $('#table_kategori').DataTable();
                    table.ajax.reload();
                }
                else{
                    swal('Gagal','Data gagal dihapus','error');
                }
            }
        })
    });
    $(document).on('click','#btnHapusSubKategori',function () {
        var kode_sub_kategori = $(this).attr('data-id');
        var value = {
            kode_sub_kategori:kode_sub_kategori
        };
        $.ajax({
            data:value,
            url:'<?php echo base_url(); ?>sub_kategori/hapus_sub_kategori',
            type:'POST',
            success:function(data){
                if (data == 0) {
                    swal('Berhasil','Data berhasil duhapus','success');
                    var table = $('#table_sub_kategori').DataTable();
                    table.ajax.reload();
                }
                else{
                    swal('Gagal','Data gagal dihapus','error');
                }
            }
        })
    });
</script>
</body>
</html>

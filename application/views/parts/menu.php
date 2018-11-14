<ul class="sidebar-menu">
            <li class="header"><strong>MASTER DATA</strong></li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span>
            </a>
                <ul class="treeview-menu">
                    <li><?php echo anchor('','<i class="icon icon-folder5"></i>Dashboard') ?>
                    
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Produk</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><?php echo anchor('produk/paket','<i class="icon icon-circle-o"></i>Paket'); ?></li>
                    <li><?php echo anchor('produk/produk','<i class="icon icon-circle-o"></i>Produk'); ?></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>User<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><?php echo anchor('kasir','<i class="icon icon-circle-o"></i>Kasir'); ?></li>
                    <li><?php echo anchor('kasir','<i class="icon icon-circle-o"></i>Supplier ( Belum )'); ?></li>
                    <li><?php echo anchor('kasir','<i class="icon icon-circle-o"></i>Customer ( Belum )'); ?></li>
                </ul>
            </li>
            <li class="treeview no-b"><a href="#">
                <i class="icon icon-dropbox light-green-text s-18"></i>
                <span>Atribut Produk</span>
                <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><?php echo anchor('brand','<i class="icon icon-circle-o"></i>Brand'); ?></li>
                    <li><?php echo anchor('satuan','<i class="icon icon-circle-o"></i>Satuan'); ?></li>
                    <li><?php echo anchor('kategori','<i class="icon icon-circle-o"></i>Kategori'); ?></li>
                    <li><?php echo anchor('sub_kategori','<i class="icon icon-circle-o"></i>Sub Kategori'); ?></li>
                    <!-- <li><?php echo anchor('Produk/Menu','<i class="icon icon-circle-o"></i>List Menu'); ?></li> -->
                </ul>
            </li>
            <li class="header light mt-3"><strong>Transaksi</strong></li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-investment-3 light-blue-text  s-18"></i> <span>Pembelian</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo anchor('purchase_order','<i class="icon icon-circle-o"></i>Purchase Order'); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-chat light-blue-text  s-18"></i> <span>Persediaan</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo anchor('terima_barang','<i class="icon icon-circle-o"></i>Penerimaan Barang'); ?></li>
                    <li><?php echo anchor('stock_adjusment','<i class="icon icon-circle-o"></i>Stock Adjusment'); ?></li>
                    <li><?php echo anchor('stock_opname','<i class="icon icon-circle-o"></i>Stock Opname'); ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-printer text-blue s-18"></i> <span>Laporan ( Belum )</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="icon icon-payment"></i>Penjualan<i
                            class="icon icon-angle-left s-18 pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="panel-page-blank.html"><i class="icon icon-presentation-12"></i>Total Penjualan</a>
                            </li>
                            <li><a href="panel-page-blank-tabs.html"><i class="icon icon-details"></i>Detail Penjualan <i
                                    class="icon icon-angle-left s-18 pull-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-fingerprint text-green"></i>Pembelian<i
                            class="icon icon-angle-left s-18 pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="login.html"><i class="icon icon-document"></i>Pembelian</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-box text-red"></i>Persediaan<i
                            class="icon icon-angle-left s-18 pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="panel-page-404.html"><i class="icon icon-document"></i>Penerimaan Barang</a>
                            </li>
                            <li><a href="panel-page-500.html"><i class="icon icon-document"></i>Retur Barang<i
                                    class="icon icon-angle-left s-18 pull-right"></i></a>
                            </li>
                            <li><a href="panel-page-error.html"><i class="icon icon-document"></i>Stock Barang<i
                                    class="icon icon-angle-left s-18 pull-right"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
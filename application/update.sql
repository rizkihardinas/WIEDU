CREATE VIEW V_AKSES AS SELECT tb_menu.*,tb_level.nama_level,tb_akses.kode_akses,tb_akses.kode_level FROM tb_level INNER JOIn tb_akses ON tb_level.kode_level = tb_akses.kode_level INNER JOIN tb_menu ON tb_akses.kode_menu = tb_menu.kode_menu;
CREATE VIEW V_MENU AS select tb_menu.nama_menu,tb_menu.kode_menu,tb_parent_menu.kode_parent_menu,tb_parent_menu.nama_parent_menu FROM tb_menu INNER JOIN tb_parent_menu ON tb_menu.kode_parent_menu = tb_parent_menu.kode_parent_menu;
CREATE TABLE tb_version (
    kode_version int(11) NOT NULL,
    version varchar(30),
    keterangan text,
   	tgl_version varchar(30),
    PRIMARY KEY (kode_version)
);
CREATE TABLE tb_update (
    kode_version int(11) NOT NULL,
    version varchar(30),
    keterangan text,
   	tgl_version varchar(30),
    PRIMARY KEY (kode_version)
);
INSERT INTO `tb_update` VALUES ('', '1.0.0', 'Dasar', '2018-11-24');
INSERT INTO `tb_version` VALUES ('', '1.0.0', 'Dasar', '2018-11-24');
INSERT INTO `tb_menu` (`kode_menu`, `kode_parent_menu`, `nama_menu`, `link`) VALUES ('22', '8', 'Version', 'version');\
ALTER TABLE `tb_sub_kategori` CHANGE `tgl_input_kategori` `tgl_input_sub_kategori` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
CREATE VIEW v_kategori AS SELECT tb_sub_kategori.*, tb_kategori.nama_kategori FROM tb_sub_kategori INNER JOIN tb_kategori ON tb_sub_kategori.kode_kategori = tb_kategori.kode_kategori;

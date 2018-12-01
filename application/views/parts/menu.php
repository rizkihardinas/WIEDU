        <ul class="sidebar-menu">
            <?php foreach ($parent_menu as $data): ?>
                <li class="treeview"><a href="#">
                    <i class="icon icon-<?php echo $data['icon_parent_menu'] ?> purple-text s-18"></i> <span><?php echo $data['nama_parent_menu'] ?></span>
                </a>
                    <ul class="treeview-menu">
                        <li>
                            <?php 
                            $kode_parent_menu =$data['kode_parent_menu'];
                            $query = $this->db->query("SELECT * FROM tb_menu WHERE kode_parent_menu='".$kode_parent_menu."'");
                            foreach ($query->result_array() as $menu) {
                                echo anchor($menu['url'],'<i class="icon icon-circle-o"></i>'.$menu['nama_menu']);
                            }
                             ?>
                            
                        
                        </li>
                    </ul>
                </li>
            <?php endforeach ?>
        </ul>

    </section>
</aside>
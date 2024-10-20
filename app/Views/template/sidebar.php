
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <!-- Brand Logo -->
            <a href="<?=base_url('dashboard')?>" class="brand-link text-center">
                SIARKO
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link <?= (!empty($side_dash) ? $side_dash : '') ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('surat') ?>" class="nav-link <?= (!empty($side_surat) ? $side_surat : '') ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Semua Surat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('surat/masuk') ?>" class="nav-link <?= (!empty($side_masuk) ? $side_masuk : '') ?>">
                                <i class="material-icons">archive</i>
                                <p>&nbsp; Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('surat/keluar') ?>" class="nav-link <?= (!empty($side_keluar) ? $side_keluar : '') ?>">
                                <i class="material-icons">unarchive</i>
                                <p>&nbsp; Surat Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('kategori') ?>" class="nav-link <?= (!empty($side_kat) ? $side_kat : '') ?>">
                                <i class="fas fa-tags"></i>
                                <p>&nbsp; Kategori</p>
                            </a>
                        </li>
                        <?php if (session()->get('level')=='Admin') { ?>
                        <li class="nav-item ">
                            <a href="<?= base_url('user') ?>" class="nav-link <?= (!empty($side_user) ? $side_user : '') ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


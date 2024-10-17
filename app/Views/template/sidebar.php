
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SIS</span>
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
                            <a href="<?= base_url('surat/masuk') ?>" class="nav-link <?= (!empty($side_sm) ? $side_sm : '') ?>">
                                <i class="material-icons">archive</i>
                                <p>&nbsp; Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('surat/keluar') ?>" class="nav-link <?= (!empty($side_sk) ? $side_sk : '') ?>">
                                <i class="material-icons">unarchive</i>
                                <p>&nbsp; Surat Keluar</p>
                            </a>
                        </li>
                        <?php if (session()->get('level')=='Admin') { ?>
                        <li class="nav-item <?= (!empty($side_user) ? $side_user : '') ?>">
                            <a href="<?= base_url('user') ?>" class="nav-link">
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


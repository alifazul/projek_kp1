<?php 
        if($nav == 'nav_home'){ ?>
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav ml-5">
                    <li class="nav-item  <?= (!empty($nav_home) ? $nav_home : ' ') ?>">
                        <a href="<?= base_url('home') ?>" class="nav-link">Home</a>
                    </li>
                </ul>
                
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto mr-5">
                    <!-- Messages Dropdown Menu -->
                    <?php if(session()->get('log') != true){ ?> 
                    <li class="nav-item <?= (!empty($nav_login) ? $nav_login : ' ') ?>">
                        <a href="<?= base_url('home/login') ?>" class="nav-link ">Login</a>
                    </li>
                    <?php }elseif(session()->get('log') == true){ 
                        $foto = session()->get('foto');?> 
                    <li class="nav-item dropdown <?= (!empty($nav_p) ? $nav_p : ' ') ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="<?= base_url('images/').$foto?>">
                            <span class="mr-2 d-none d-lg-inline small"><?= session()->get('nama') ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <a class="dropdown-item  <?= (!empty($nav_pro) ? $nav_pro : ' ') ?>" href="<?=base_url('profil')?>">
                                <i class="fas fa-user"></i> Profile
                            </a>
                            <a class="dropdown-item  <?= (!empty($nav_d) ? $nav_d : ' ') ?>" href="<?=base_url('dashboard')?>">
                                <i class="fas fa-cogs"></i> Dashboard
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item logout" href="<?= base_url('auth/logout') ?>">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>  
            </nav>
    <?php  
        }elseif($nav == 'nav_dash') { ?>
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('home')?>">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>

                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="<?= base_url('images/'.session()->get('foto'))?>">
                            <span class="mr-2 d-none d-lg-inline small"><?= session()->get('nama') ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('profil') ?>">
                                <i class="fas fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('home')?>" >
                                <i class="fas fa-sign-out-alt"></i> Kembali ke Home
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
    <?php  } ?>
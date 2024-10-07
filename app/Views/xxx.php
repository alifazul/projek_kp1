<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$title?></title>

    <!-- JQuery DataTable Css -->
    <link href="<?=base_url('dashboard/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url('dashboard/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('dashboard/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url('dashboard/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=base_url('dashboard/plugins/morrisjs/morris.css')?>" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?=base_url('dashboard/plugins/bootstrap-select/css/bootstrap-select.css')?>" rel="stylesheet" />

    <!-- Bootstrap Tagsinput Css -->
    <link href="<?=base_url('dashboard/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?=base_url('dashboard/css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('dashboard/css/themes/all-themes.css')?>" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="<?=base_url('dashboard/plugins/waitme/waitMe.css')?>" rel="stylesheet" />

</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <!-- Nav Item - User Information -->
            <div class="nav-item dropdown nav-prof">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle" src="img/team-1.jpg">
                    <span class="d-none d-lg-inline">  Lev-Prof</span>
                </a>
                <!--Dropdown - User Information-->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cog mr-2 text-gray-400"></i> Dashboard
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; @tahun ini
                    <a href="javascript:void(0);">Dinkominfo</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">archive</i>
                        </div>
                        <div class="content">
                            <div class="text">SURAT MASUK</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">unarchive</i>
                        </div>
                        <div class="content">
                            <div class="text">SURAT KELUAR</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <!-- FORM SURAT -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>FORM SURAT</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="email_address">Surat Dari</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="email_address">Tanggal Surat</label>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="surname" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="email_address">Nomor Surat</label>
                                            <div class="form-line">
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="email_address">Diterima Tanggal</label>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="surname" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="email_address">No. Agenda</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="surname" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <label for="email_address">Sifat</label>
                                            <div class="form-group">
                                                <input type="radio" name="sifat" id="x" class="with-gap">
                                                <label for="male">Sangat Segera</label>
                                                <input type="radio" name="sifat" id="y" class="with-gap">
                                                <label for="female" class="m-l-20">Segera</label>
                                                <input type="radio" name="sifat" id="rahasia" class="with-gap">
                                                <label for="rahasia" class="m-l-20">Rahasia</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="xxx">Kategori</label>
                                            <select class="form-control show-tick" data-live-search="true">
                                                <option>xx</option>
                                                <option>xx</option>
                                                <option>xx</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="xxx">Kategori</label>
                                            <select class="form-control show-tick" data-live-search="true">
                                                <option>xx</option>
                                                <option>xx</option>
                                                <option>xx</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Perihal</label>
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="xxx">Diteruskan kepada</label>
                                            <div class="form-check">
                                                <input type="checkbox" id="basic_checkbox_1" class="filled-in" />
                                                <label for="basic_checkbox_1">....</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="basic_checkbox_2" class="filled-in" />
                                                <label for="basic_checkbox_2">....</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="basic_checkbox_3" class="filled-in" />
                                                <label for="basic_checkbox_3">....</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="basic_checkbox">Dengan hormat harap</label>
                                            <div class="form-check">
                                                <input type="checkbox" id="basic_1" class="filled-in" />
                                                <label for="basic_1">Tanggapan dan saran</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="basic_2" class="filled-in" />
                                                <label for="basic_2">Proses lebih lanjut</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="basic_3" class="filled-in" />
                                                <label for="basic_3">Koordinasi/Konfirmasi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Catatan</label>
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label>File</label>
                                    <input type="file" class="form-control-file mb-3" id="foto" name="foto" autocomplete="off" required>
                                    <div id="imagePreview"><img class="foto-preview" src="images/default.png" /></div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <a class="btn bg-grey waves-effect" href="#">CANCEL</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# FORM SURAT -->

            <!-- FORM USER -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>FORM USER</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="">Nama</label>
                                            <div class=" form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="">Bidang</label>
                                            <div class=" form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="">NIP</label>
                                            <div class=" form-line">
                                                <input type="" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="">Jabatan</label>
                                            <div class=" form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="">Tempat Lahir</label>
                                            <div class=" form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for="email_address">Tanggal Lahir</label>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="surname" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="email_address">Email</label>
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="email_address">Jenis Kelamin</label>
                                    <div class="form-group">
                                        <input type="radio" name="gender" id="male" class="with-gap">
                                        <label for="male">Laki-Laki</label>
                                        <input type="radio" name="gender" id="female" class="with-gap">
                                        <label for="female" class="m-l-20">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Alamat</label>
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label>Foto</label>
                                    <input type="file" class="form-control-file mb-3" id="foto" name="foto" autocomplete="off" required>
                                    <div id="imagePreview"><img class="foto-preview" src="images/default.png" /></div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <a class="btn bg-grey waves-effect" href="#">CANCEL</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# FORM USER -->

            <div class="card">
                <div class="body bg-white">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="xxx">Kategori</label>
                                <select class="form-control show-tick" data-live-search="true">
                                <option>xx</option>
                                <option>xx</option>
                                <option>xx</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="xxx">Kategori</label>
                                <select class="form-control show-tick" data-live-search="true">
                                <option>xx</option>
                                <option>xx</option>
                                <option>xx</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="xxx">Bulan</label>
                                <select class="form-control show-tick" data-live-search="true">
                                <option>xx</option>
                                <option>xx</option>
                                <option>xx</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="xxx">Tahun</label>
                                <select class="form-control show-tick" data-live-search="true">
                                <option>xx</option>
                                <option>xx</option>
                                <option>xx</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabel Surat Masuk -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Surat Masuk
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Surat Dari</th>
                                            <th>Tanggal Surat</th>
                                            <th>No Surat</th>
                                            <th>Tanggal Diterima</th>
                                            <th>No Agenda</th>
                                            <th>Sifat</th>
                                            <th>Perihal</th>
                                            <th>Disposisi</th>
                                            <th>Tindakan</th>
                                            <th>Keterangan</th>
                                            <th>Pengunggah</th>
                                            <th>Tanggal Catat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Surat Dari</th>
                                            <th>Tanggal Surat</th>
                                            <th>No Surat</th>
                                            <th>Tanggal Diterima</th>
                                            <th>No Agenda</th>
                                            <th>Sifat</th>
                                            <th>Perihal</th>
                                            <th>Disposisi</th>
                                            <th>Tindakan</th>
                                            <th>Keterangan</th>
                                            <th>Pengunggah</th>
                                            <th>Tanggal Catat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Xie</td>
                                            <td>29-09-2024</td>
                                            <td>110</td>
                                            <td>29-09-2024</td>
                                            <td>112</td>
                                            <td>Sangat Segera</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Xie</td>
                                            <td>30-09-24</td>
                                            <td><button type="button" class="btn btn-warning waves-effect">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn bg-red waves-effect">
                                                <i class="material-icons">delete</i>
                                                </button>
                                                <button type="button" class="btn btn-default waves-effect">
                                                <i class="material-icons">remove_red_eye</i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabel Surat Masuk -->

            <!-- Tabel User -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar User
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Login Terakhir</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Login Terakhir</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><button type="button" class="btn btn-warning waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn btn-success waves-effect">
                                                    <i class="material-icons">autorenew</i>
                                                </button>
                                                <button type="button" class="btn bg-black waves-effect waves-light">
                                                    <i class="material-icons">lock</i> <i class="material-icons">lock_open</i>
                                                </button>
                                                <button type="button" class="btn bg-red waves-effect">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <button type="button" class="btn btn-default waves-effect">
                                                <i class="material-icons">remove_red_eye</i>
                                                </button>
                                            </td>
                                            <td>xxx</td>
                                            <td>Xie</td>
                                            <td>Admin</td>
                                            <td>29 Januari 2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabel User -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?=base_url('dashboard/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('dashboard/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <script src="<?=base_url('dashboard/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    
    <script src="<?=base_url('dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

   
    <script src="<?=base_url('dashboard/plugins/node-waves/waves.js')?>"></script>

   
    <script src="<?=base_url('dashboard/plugins/jquery-countto/jquery.countTo.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('dashboard/js/admin.js')?>"></script>
    <script src="<?=base_url('dashboard/js/pages/index.js')?>"></script>

    <!-- Jquery DataTable -->
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
    <script src="<?=base_url('dashboard/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>

    <!-- Moment -->
    <script src="<?=base_url('dashboard/plugins/momentjs/moment.js')?>"></script>
    <script src="<?=base_url('dashboard/js/pages/forms/advanced-form-elements.js')?>"></script>

    <!-- Bootstrap Tags Input -->
    <script src="<?=base_url('dashboard/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')?>"></script>
    <!-- Demo Js -->
    <script src="<?=base_url('dashboard/js/demo.js')?>"></script>

</body>

</html>

</html>
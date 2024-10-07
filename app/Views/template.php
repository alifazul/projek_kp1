<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href = "<?=base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href = "<?=base_url('plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href = "<?=base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href = "<?=base_url('plugins/toastr/toastr.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href = "<?=base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href = "<?=base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href = "<?=base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?=('dist/img/AdminLTELogo.png')?>" alt="AdminLTELogo" height="60" width="60">
        </div>

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
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                      <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="<?= base_url('dist/img/user1-128x128.jpg')?>">
                        <span class="mr-2 d-none d-lg-inline small">Douglas McGee</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user"></i> Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?=('dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Documentation</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>Total Dokumen</p>
                                </div>
                                <div class="icon">
                                    <i class="material-icons">archive</i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>Total Dokumen</p>
                                </div>
                                <div class="icon">
                                    <i class="material-icons">unarchive</i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>
                                    <p>Total User</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i> Sales
                                    </h3>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->

                    </div>

                    <!-- Form Surat-->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">FORM SURAT</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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
                                                <label class="form-check-label" for="male"> Sangat Segera </label>
                                                <input type="radio" name="sifat" id="y" class="with-gap">
                                                <label for="female" class="m-l-20 form-check-label"> Segera</label>
                                                <input type="radio" name="sifat" id="rahasia" class="with-gap">
                                                <label for="rahasia" class="m-l-20 form-check-label">Rahasia</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="xxx">Kategori</label>
                                            <select class="form-control select2" style="width: 100%;">
                                              <option selected="selected">Alabama</option>
                                              <option>Alaska</option>
                                              <option>California</option>
                                              <option>Delaware</option>
                                              <option>Tennessee</option>
                                              <option>Texas</option>
                                              <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="xxx">Kategori</label>
                                            <select class="form-control select2" style="width: 100%;">
                                              <option selected="selected">Alabama</option>
                                              <option>Alaska</option>
                                              <option>California</option>
                                              <option>Delaware</option>
                                              <option>Tennessee</option>
                                              <option>Texas</option>
                                              <option>Washington</option>
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
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">Checkbox</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">Checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="basic_checkbox">Dengan hormat harap</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">Checkbox</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">Checkbox</label>
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
                                    <input type="file" class="form-control-file mb-3" id="file" name="file" autocomplete="off" required>
                                </div>
                                <button class="btn btn-info" type="submit">SUBMIT</button>
                                <a class="btn bg-grey" href="#">CANCEL</a>
                            </form>
                        </div>
                    </div>
                    <!--END Form Surat-->

                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-header">DETAIL SURAT</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Surat Dari</th>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Diterima Tanggal</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Surat</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No Agenda</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor Surat</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sifat</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kategori 1</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kategori 2</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Perihal</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Diteruskan kepada</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dengan hormat harap</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Catatan</th>
                                        <td>Jacob</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br> <a class="btn btn-secondary" href="#">BACK</a>
                        </div>
                    </div>

                    <!-- Form Surat-->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Preview Surat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="ExternalFiles">
                                <iframe src="file/sample.pdf" width="100%" height="500"></iframe>
                            </div>
                        </div>
                    </div>
                    <!--END Form Surat-->

                    <div class="card card-default">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Result Type:</label>
                                        <select class="select2" multiple="multiple" data-placeholder="Any" style="width: 100%;">
                                        <option>Text only</option>
                                        <option>Images</option>
                                        <option>Video</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Result Type:</label>
                                        <select class="select2" multiple="multiple" data-placeholder="Any" style="width: 100%;">
                                        <option>Text only</option>
                                        <option>Images</option>
                                        <option>Video</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Sort Order:</label>
                                        <select class="select2" style="width: 100%;">
                                            <option selected>ASC</option>
                                            <option>DESC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Order By:</label>
                                        <select class="select2" style="width: 100%;">
                                            <option selected>Title</option>
                                            <option>Date</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tabel Surat-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
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
                                        <td>
                                            <a class="btn btn-default ">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a class="btn btn-warning ">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a class="btn bg-red ">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--END Tabel Surat-->

                    <!-- Form User-->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Form User</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for=">Nama</label>
                                            <div class=" form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for=">Bidang</label>
                                            <div class=" form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for=">NIP</label>
                                            <div class=" form-line">
                                                <input type=" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for=">Jabatan</label>
                                            <div class=" form-line">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <label for=">Tempat Lahir</label>
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
                                    <div id="imagePreview"><img class="foto-preview" src="images/default.png')?>" /></div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <a class="btn bg-grey waves-effect" href="#">CANCEL</a>
                            </form>
                        </div>
                    </div>
                    <!--END Form User-->

                    <!-- Tabel User-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
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
                                        <td>
                                            <a class="btn btn-warning ">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a class="btn btn-success ">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                            <a class="btn bg-black  waves-light">
                                                <i class="fas fa-lock"></i> <i class="fas fa-lock-open"></i>
                                            </a>
                                            <a class="btn bg-red ">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <a class="btn btn-default ">
                                                <i class="far fa-eye"></i>
                                            </a>
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

                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i> Toastr Examples
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-success toastrDefaultSuccess">
                            Launch Success Toast
                          </button>
                            <button type="button" class="btn btn-info toastrDefaultInfo">
                            Launch Info Toast
                          </button>
                            <button type="button" class="btn btn-danger toastrDefaultError">
                            Launch Error Toast
                          </button>
                            <button type="button" class="btn btn-warning toastrDefaultWarning">
                            Launch Warning Toast
                          </button>
                            <div class="text-muted mt-3">
                                For more examples look at <a href="https://codeseven.github.io/toastr/">https://codeseven.github.io/toastr/</a>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>


        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src = "<?= base_url('plugins/jquery/jquery.min.jr')?>"></script>
    <!-- Bootstrap 4 -->
    <script src = "<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.jr')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?=('dist/js/adminlte.jr')?>"></script>
    <script src = "<?= base_url('plugins/select2/js/select2.full.min.jr')?>"></script>
    <!-- DataTables  & Plugins -->
    <script src = "<?= base_url('plugins/datatables/jquery.dataTables.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/jszip/jszip.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.print.min.jr')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.jr')?>"></script>

    <!-- Toastr -->
    <script src = "<?= base_url('plugins/toastr/toastr.min.jr')?>"></script>


    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
        })
    </script>
</body>

</html>
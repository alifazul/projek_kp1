<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (!empty($title) ? $title : 'No Title') ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href = "<?=base_url('plugins/fontawesome-free/css/all.min.css')?>">
      <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.css') ?>">

     <!-- Sweetalert2 -->
     <link rel="stylesheet" href = "<?=base_url('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
    
</head>

<body class="hold-transition layout-top-nav">

    <div class="content-wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="dist/img/user1-128x128.jpg">
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

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="card mt-3 align-item-center mr-auto ml-auto">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto"> 
                                    <img class="rounded" src="<?= base_url('')?>dist/img/dokumen.jpg" alt="User Image" width="100" height="120">
                                </div>
                                <div class="col">
                                    <h4>Surat Dari</h4>
                                    <p class="text-muted"><i class="fas fa-tag"></i>&nbsp; xxx,xxx &nbsp; &nbsp; <i class="fas fa-calendar-day"></i> &nbsp; xxx</p>
                                    <div class="xx clearfix">
                                        <a class="btn btn-info float-right mr-2"><i class="fas fa-eye"></i>&nbsp; Lihat</a> 
                                        <a class="btn btn-success float-right mr-2"><i class="fas fa-download"></i>&nbsp; Unduh</a>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                        
                </div>
            </section>
        
    </div>

    
    <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>dist/js/adminlte.min.js"></script>

    <!-- Sweetalert2 -->
    <script src = "<?= base_url('plugins/sweetalert2/sweetalert2.min.js')?>"></script>

    <script>
        const swal = $('.swal').data('swal');
            if(swal){
                Swal.fire({
                    title: "Gagal!",
                    text: swal,
                    icon: "error",
                    timer: 2000
                });
            }
    </script>
</body>
</html>
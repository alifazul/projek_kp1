<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href = "<?=base_url('plugins/fontawesome-free/css/all.min.css')?>">
    <!-- Select2 -->
    <link rel="stylesheet" href = "<?=base_url('plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href = "<?=base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.css') ?>">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href = "<?=base_url('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href = "<?=base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href = "<?=base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href = "<?=base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    

    <div class="wrapper">

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
                    <a class="nav-link" href="<?=base_url('search_surat')?>">
                        <i class="fas fa-search"></i>
                    </a>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="<?= base_url('dist/img/user1-128x128.jpg')?>">
                        <span class="mr-2 d-none d-lg-inline small">Douglas McGee</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url('profile') ?>">
                            <i class="fas fa-user"></i> Profile
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
                            <a href="<?= base_url('dash_tem') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Surat') ?>" class="nav-link">
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
                            <h1 class="m-0">Title</h1>
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

                    <div class="swal" data-swal="<?= session('success')?>"></div>

                    <?= $this->renderSection('content')?>

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
    <script src = "<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap 4 -->
    <script src = "<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?=('dist/js/adminlte.js')?>"></script>
    <script src = "<?= base_url('plugins/select2/js/select2.full.min.js')?>"></script>
    <!-- DataTables  & Plugins -->
    <script src = "<?= base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
    <script src = "<?= base_url('plugins/jszip/jszip.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
    <!-- Sweetalert2 -->
    <script src = "<?= base_url('plugins/sweetalert2/sweetalert2.min.js')?>"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "print", "colvis"],
                    initComplete: function () {
                        var counter = 0;
                        this.api().columns( [5,6] ).every( function () {
                            var column = this;
                            counter++;
                            var select = $('<select class="select2" style="width: 100%;"><option value="">All</option></select>')
                                .appendTo( $('#search' + counter) )
                                .on( 'change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );
        
                                    column
                                        .search( val ? '^'+val+'$' : '', true, false )
                                        .draw();
                                } );
                                column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' );
                            } );
                        } );
                        this.api().columns( [5,6] ).every( function () {
                            var column = this;
                            counter++;
                            var select = $('<select class="select2" style="width: 100%;"><option value="">All</option></select>')
                                .appendTo( $('#search' + counter) )
                                .on( 'change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );
        
                                    column
                                        .search( val ? '^'+val+'$' : '', true, false )
                                        .draw();
                                } );
                                column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' );
                            } );
                        } );
                    }
            }).buttons().container().appendTo('#example1_wrapper');
            
        })
        $('.hapus_notif').on('click', function(){
            var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
        });
        const swal = $('.swal').data('swal');
        if(swal){
            Swal.fire({
                title: "Good job!",
                text: swal,
                icon: "success",
                timer: 2000
            });
        }
/*
        function sel(){
            $("#s_s").DataTable({
                "ajax":{
                    "url" : "<?php echo base_url('Surat/search'); ?>",
                    "type" : "post",
                    "data" : {
                        kat1:$('#sel_kat1').val(),
                        kat2:$('#sel_kat2').val()
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper');
        }
        sel();

        $('#sel_kat1').change(function(){
            sel();
        })

        $('#sel_kat2').change(function(){
            sel();
        })
        
        function hapus($id_surat){
            Swal.fire({
            title: "Hapus?",
            text: "You won't be able to revert this!",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Batal"
            }).then((result) => {
                $.ajax({
                    type: 'POST',
                    url: '',
                    data: {
                        id_surat:id_surat
                    },
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.success,
                                icon: "success",
                                timer: 2000
                            }).then((result)=>{
                                if(resul.value){
                                    window.location.href = "<?= base_url('Surat') ?>"
                                }
                            })
                        }
                    }
                })
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });
                }

            });
        }
        */

    </script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (!empty($title) ? $title : 'No Title') ?></title>

    <?= $this->include('template/css') ?>
</head>
<body class="hold-transition <?= (!empty($body) ? $body : 'sidebar-mini layout-navbar-fixed') ?>">

    <div class="wrapper">
        <?= $this->include('template/navbar') ?>
        <?php if($side == 'sidebar'){ ?>
            <?= $this->include('template/sidebar') ?>
       <?php } ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mt-5">
                            <div class="col">
                                <h1 class="text-center"><?= (!empty($header) ? $header : '') ?></h1>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- Main content -->
                <section class="content">
                    <div class="<?= (!empty($ctn) ? $ctn : '') ?>">
                        <div class="swal-error" data-swal="<?= session('error')?>"></div>
                        <div class="swal-success" data-swal="<?= session('success')?>"></div>
                        <div class="swal-warning" data-swal="<?= session('warning')?>"></div>
                            <?= $this->renderSection('content') ?>
                    </div>
                </section>
            </div>
    </div>
    <?= $this->include('template/footer') ?>
    <?= $this->include('template/js') ?>
    <script>
        const swal = $('.swal-error').data('swal');
            if(swal){
                Swal.fire({
                    title: "Gagal!",
                    text: swal,
                    icon: "error",
                    timer: 1000
                });
            }
        
        const swals = $('.swal-success').data('swal');
            if(swals){
                Swal.fire({
                    title: "Berhasil!",
                    text: swals,
                    icon: "success",
                    timer: 1000
                });
        }
        const swalw = $('.swal-warning').data('swal');
            if(swalw){
                Swal.fire({
                    title: "Peringatan!",
                    text: swalw,
                    icon: "warning",
                    timer: 2000
                });
        }
        const logout =   $('.logout').on('click', function(){
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin Logout?",            
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"
            }).then(result => {
                //jika klik ya maka arahkan ke home
                if(result.isConfirmed){
                    window.location.href = getLink
                }
            })
            return false;
        });
        $('.hapus').on('click', function(){
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin Hapus Data?",            
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"
            }).then(result => {
                //jika klik ya maka arahkan ke home
                if(result.isConfirmed){
                    window.location.href = getLink
                }
            })
            return false;
        });
        

        $(function() {
            bsCustomFileInput.init()
            $('#surat-validation').validate({
                rules: {
                    surat: {
                        required: true,
                    },
                    tgl_surat: {
                        required: true,
                    },
                    no_surat: {
                        required: true,
                    },
                    tgl_terima: {
                        required: true,
                    },
                    no_agenda: {
                        required: true,
                    },
                    sifat: {
                        required: true,
                    },
                    kat1: {
                        required: true,
                    },
                    terusan: {
                        required: true,
                    },
                    tindakan: {
                        required: true,
                    },
                    file: {
                        required: true,
                        accept: "pdf"
                    },
                },
                messages: {
                    surat_dari: "Surat Dari harus diisi",
                    tgl_surat: "Tanggal Surat harus diisi",
                    no_surat: "Nomor Surat harus diisi",
                    tgl_terima: "Diterima tanggal harus diisi",
                    no_agenda: "No Agenda Dari harus diisi",
                    sifat: "Sifat surat harus diisi",
                    kat1: "Sifat surat harus diisi",
                    terusan: "Diteruskan kepada harus diisi",
                    tindakan: "Dengan hormat harap harus diisi",
                    file: {
                        required: "File surat harus diupload",
                        accept: "PDF Only!!!"
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
            //datatable
            $("#tbl").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "orderCellsTop": true,
                "buttons": ["excel", "print", "colvis"],
                dom:
                "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>"+
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu:[
                    [5,10,25,50,100,-1],
                    [5,10,25,50,100,"All"],
                ]
            }).buttons().container().appendTo('#tbl.col-md-6:eq(0)');
        })

        function readImg(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    
    <?= $this->renderSection('js_custom')?>
</body>
</html>
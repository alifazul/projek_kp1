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

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav ml-5">
                <li class="nav-item active">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto mr-5">

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
        <div class="content-wrapper">
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
                    <h3 class="text-center">Cari Surat</h3>
                    <div id="main-surat">
                        <?= view('surat/item');  ?>
                    </div>
                </div>
            </section>
        </div>
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

        let base_url = "<?php base_url(); ?>"
        
        function suratPlaceholder(){

            let placeholder = '';

            for (var i = 1; i <= 10 ; i++) {
                placeholder += `
                <div class="col">
                    <div class="card w-100" aria-hidden="true">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="150px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#83b5ff"></rect></svg>
                        <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                                <span class="placeholder col-12 bg-primary"></span>
                            </h5>
                            <p class="card-text placeholder-glow d-flex justify-content-between">
                                <span class="placeholder col-4 bg-primary"></span>
                                <span class="placeholder col-4 bg-primary"></span>
                            </p>
                        </div>
                    </div>
                </div>`;
            }

            $("#row-surat").html(placeholder);
        }
        
        function PaginationAjax() {

let click_status = false;
$('#pagination').on('click','a',function(e){

    // reverse link action
    e.preventDefault(); 

    // get href data
    var href = $(this).attr('href');

    // disable click
    if (click_status) {return false;}
    click_status = true;

    // disable pagination
    $('#pagination li.page-item').addClass('disabled');

    // go to top
    $('html, body').animate({ scrollTop: 0 }, 0);            

    // placeholder
    suratPlaceholder();

    $.ajax({
        url: href,
        type: 'POST',
        dataType: 'JSON',
        success: function(data) {

            // change title
            document.title = data.title;

            // change url history
            history.pushState({}, data.title, href);

            // refresh data
            $('#main-surat').html(data.content);

            // re-init because its refresh DOM 
            sortSurat();
            kat1Surat();
            PaginationAjax();

            // enable click
            click_status = false;
        },error: function(xhr, statusText, errorThrown) {
            alert(statusText);

            // enable pagination
            $('#pagination li.page-item').removeClass('disabled');

            // enable click
            click_status = false;                        
        }
    });

});
}

// init for first DOM
PaginationAjax(); 

// for search
function searchSurat(){
$("#search-surat").on("submit", function(e){
    e.preventDefault();

    const form = $(this),
    search  = $("#search-surat input[name=q]").val();        
    search_url = (search.length > 0) ? base_url + '?q=' + search : base_url;

    $.ajax({
        url: search_url,
        type: 'POST',
        dataType: 'JSON',
        success: function(data) {

            // change title
            document.title = data.title;

            // change url history
            history.pushState({}, data.title, search_url);

            // refresh data
            $('#main-surat').html(data.content);

            // re-init because its refresh DOM 
            sortSurat();
            kat1Surat();
            PaginationAjax();                

        },error: function(xhr, statusText, errorThrown) {
            alert(statusText);
        }
    });

}); 

// nav search key up
function debounce(callback, wait) {
    let timeout;
    return (...args) => {
        clearTimeout(timeout);
        timeout = setTimeout(function () { callback.apply(this, args); }, wait);
    };
}

$("#search-surat input[name=q]").on("keyup search", debounce(() => {
    $('#search-surat').submit();  
},2000));        
}

// init nav search
searchSurat();   

function sortSurat(){
$('#sort-surat').on('change', function() {
    const sort = this.value;
    const kat1  = $('#kat1-surat').val();            
    const search  = $("#search-surat input[name=q]").val();        

    // build url
    let build_url;
    if (search.length > 0) {
        build_url = base_url + '?q=' + search +'&sort=' + sort;
    }else if (kat1.length > 0) {
        build_url = base_url + '?kat1=' + kat1 +'&sort=' + sort;
    }else{
        build_url = base_url + '?sort=' + sort;
    }

    // placeholder
    suratPlaceholder();
    
    $.ajax({
        url: build_url,
        type: 'POST',
        dataType: 'JSON',
        success: function(data) {

            // change title
            document.title = data.title;

            // change url history
            history.pushState({}, data.title, build_url);

            // refresh data
            $('#main-surat').html(data.content);

            // re-init because its refresh DOM 
            sortSurat();
            kat1Surat();
            PaginationAjax();

        },error: function(xhr, statusText, errorThrown) {
            alert(statusText);
        }
    });
});        
}

// init sortSurat
sortSurat();

function kat1Surat(){
$('#kat1-surat').on('change', function() {
    const kat1 = this.value;
    const sort  = $('#sort-surat').val();
    const build_url = (kat1.length > 0) ? base_url + '?kat1=' + kat1 +'&sort=' + sort : base_url + '?sort=' + sort;

    // placeholder
    suratPlaceholder();
    
    $.ajax({
        url: build_url,
        type: 'POST',
        dataType: 'JSON',
        success: function(data) {

            // change title
            document.title = data.title;

            // change url history
            history.pushState({}, data.title, build_url);

            // refresh data
            $('#main-surat').html(data.content);

            // re-init because its refresh DOM 
            sortSurat();
            kat1Surat();
            PaginationAjax();

        },error: function(xhr, statusText, errorThrown) {
            alert(statusText);
        }
    });
});        
}

// init kat1Surat
kat1Surat();  
   
 
    </script>
</body>
</html>
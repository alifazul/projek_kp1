<?= $this->extend('_template')?>

<?= $this->section('content')?>

<div class="card card-default">
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label>Kategori 1</label>
                    <!--<div id="search1"></div>-->
                    <select class="form-select form-control" id="filterkat1">
                        <option value="">Semua</option>
                        <?php foreach($kat1 as $key => $value) { ?>
                                <option value="<?=$value['kat1'] ?>">
                                    <?=$value['kat1'] ?>
                                </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Kategori 2</label>
                    <!--<div id="search2"></div>-->
                    <select class="form-select form-control" id="filterkat2">
                        <option value="">Semua</option>
                        <?php foreach($kat2 as $key => $value) { ?>
                                <option value="<?=$value['kat2'] ?>">
                                    <?=$value['kat2'] ?>
                                </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
           
            <div class="col-3">
                <div class="form-group">
                    <label>Bulan</label>
                    <select id="filterbulan" class="form-control" style="width: 100%;">
                    <option value="">Semua</option>
                    <?php foreach ($bulan as $filter): ?>
                            <option value="<?php 
                                if($filter<10){
                                    echo '-0'.$filter.'-';
                                }else{
                                    echo '-'.$filter.'-';
                                }?>">
                                <?= $filter ?>
                            </option>
                    <?php endforeach ?>
                    </select>
                    
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Tahun</label>
                    <select id="filtertahun" class="form-control select" style="width: 100%;">
                    <option value="">Semua</option>
                    <?php foreach ($tahun as $filter): ?>
                            <option value="<?= $filter ?>"><?= $filter ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Tabel Surat-->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel surat <?= (!empty($ket)? $ket : '') ?></h3>
        <?php if($ket!=''){?>
            <div class="card-tools">
                <a class="btn btn-primary" href="<?=base_url('surat/add/'.$ket)?>">
                    Tambah
                </a>
            </div>
        <?php } ?>
    </div>
    <div class="card-body">
        <table id="tbl_search" class="table table-bordered table-striped">
            <thead>
                <tr>
                   
                    <th>No</th>
                    <th>Surat <?=$ket?></th>
                    <th>Tanggal Surat</th>
                    <th>No Surat</th>
                    <th>Tanggal Diterima</th>
                    <th>Kategori 1</th>
                    <th>Kategori 2</th>
                    <th>No Agenda</th>
                    <th>Sifat</th>
                    <th>Perihal</th>
                    <th>Terusan</th>
                    <th>Tindakan</th>
                    <th>Catatan</th>
                    <th>File</th>
                <?php if($ket==''){?>
                    <th>Ket</th>
                <?php } 
                if (session()->get('level')=='Admin') { ?>
                    <th>Nama</th>
                <?php } ?>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($surats as $row) { ?>
                <tr>
                    
                    <td><?= $no ?></td>
                    <td><?= $row['surat'] ?></td>
                    <td><?= $row['tgl_surat'] ?></td>
                    <td><?= $row['no_surat'] ?></td>
                    <td><?= $row['tgl_terima'] ?></td>
                    <td><?= $row['kat1'] ?></td>
                    <td><?= $row['kat2'] ?></td>
                    <td><?= $row['no_agenda'] ?></td>
                    <td><?= $row['sifat'] ?></td>
                    <td><?= $row['perihal'] ?></td>
                    <td><?= $row['terusan'] ?></td>
                    <td><?= $row['tindakan'] ?></td>
                    <td><?= $row['catatan'] ?></td>
                    <td><?= $row['file'] ?></td>
                <?php if($ket==''){?>
                    <td><?= $row['ket'] ?></td>
                <?php } 
                if (session()->get('level')=='Admin') { ?>
                    <td><?= $row['nama'] ?></td>
                <?php } ?>
                    <td>
                    <?php if($ket!=''){?>
                        <a class="btn btn-default btn-sm" href="<?= base_url('home/detail/'.$row['id_surat']) ?>" target="_blank">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-warning btn-sm" href="<?= base_url('surat/edit/'.$row['id_surat']) ?>">
                            <i class="far fa-edit"></i>  
                        </a>
                        <a id="hapus" class="btn btn-danger btn-sm" href="<?= base_url('surat/delete/'.$row['id_surat']) ?>">
                            <i class="far fa-trash-alt"></i>  
                        </a>
                    <?php } ?>
                        <a class="btn btn-success btn-sm" href="<?= base_url('uploads/').$row['file'].'.pdf'?>">
                            <i class="fas fa-download"></i>
                        </a>
                    </td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
</div>
<!--END Tabel Surat-->
<?= $this->endSection()?>

<?= $this->section('js_custom')?>
    <script>
        $(document).ready( function () {
            var table = $("#tbl_search").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "orderCellsTop": true,
                "buttons": [ "excel", "print", "colvis"],
                dom:
                "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>"+
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu:[
                    [10,25,50,100,-1],
                    [10,25,50,100,"All"],
                ]
            });
            table.buttons().container().appendTo('#tbl.col-md-6:eq(0)');
            // Office Column search Select
            $('#filterkat1').on('change', function() {
                table.column(5).search( this.value).draw();
            });

            // Office Column search Select
            $('#filterkat2').on('change', function() {
                table.column(6).search( this.value).draw();
            });

            // Office Column search Select
            $('#filterbulan').on('change', function() {
                table.column(2).search( this.value).draw();
            });

            // Office Column search Select
            $('#filtertahun').on('change', function() {
                table.column(2).search( this.value).draw();
            });
            $('#hapus').on('click', function(){
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
        });
        
    </script>
<?= $this->endSection()?>
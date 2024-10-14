<?= $this->extend('tem_x')?>

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
                    <?php  foreach($kat1 as $key => $value) { ?>
                                <option value="<?= $value['kat1'] ?>">
                                    <?= $value['kat1'] ?>
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
                    <?php  foreach($kat2 as $key => $value) { ?>
                                <option value="<?= $value['kat2'] ?>">
                                    <?= $value['kat2'] ?>
                                </option>
                    <?php } ?>
                    </select>
                    <button type="button" id="btnfilterkat2" class="btn btn-outline-secondary btn-sm" style="min-width: 40px;"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
           
            <div class="col-3">
                <div class="form-group">
                    <label>Bulan</label>
                    <select id="filterbulan" class="form-control" style="width: 100%;">
                    <option value="">Semua</option>
                    <?php foreach($bulan as $value) { ?>
                            <option ><?php $x = $value['bulan'];
                                    if($x<10){
                                        echo '0'.$x.'<br>';
                                    }else{
                                        echo $x.'<br>';
                                    } ?>
                            </option>
                        <?php } ?>
                    </select>
                    <button type="button" id="btnfilterbulan" class="btn btn-outline-secondary btn-sm" style="min-width: 40px;"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Tahun</label>
                    <select id="filtertahun" class="form-control select" style="width: 100%;">
                    <option value="">Semua</option>
                        <?php foreach($tahun as $value) { ?>
                            <option ><?= $value['tahun'] ?></option>
                        <?php } ?>
                    </select>
                    <button type="button" id="btnfiltahun" class="btn btn-outline-secondary btn-sm" style="min-width: 40px;"><i class="fa-solid fa-xmark"></i></button>
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
        <table id="tbl_search" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Surat Dari</th>
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
                    <th>Id User</th>
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
                    <th>Kategori 1</th>
                    <th>Kategori 2</th>
                    <th>No Agenda</th>
                    <th>Sifat</th>
                    <th>Perihal</th>
                    <th>Terusan</th>
                    <th>Tindakan</th>
                    <th>Catatan</th>
                    <th>File</th>
                    <th>Id User</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $no=1; foreach($surat as $row) { 
                    $id_surat = $row['id_surat'];
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['surat_dari'] ?></td>
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
                    <td><?= $row['id_user'] ?></td>
                    <td>
                        <a class="btn btn-default btn-sm" href="<?= base_url('Surat/detail/'.$row['id_surat']) ?>">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-warning btn-sm" href="<?= base_url('Surat/edit/'.$row['id_surat']) ?>">
                            <i class="far fa-edit"></i>  
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fas fa-download"></i>
                        </a>
                        <a class="btn btn-danger btn-sm hapus_notif" href="<?= base_url('Surat/delete/'.$row['id_surat']) ?>">
                            <i class="far fa-trash-alt"></i>  
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
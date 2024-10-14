<?= $this->extend('tem_x')?>

<?= $this->section('content')?>

<div class="card card-default">
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label>Kategori 1</label>
                    <!--<div id="search1"></div>-->
                    <select id="filter-kat1" class="select filter" style="width: 100%;">
                    <?php  foreach($kat1 as $key => $value) { ?>
                                <option value="<?= $value['id_kat1'] ?>">
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
                    
                    <select id="filter-kat2" class="select filter" style="width: 100%;">
                    <?php  foreach($kat2 as $key => $value) { ?>
                                <option value="<?= $value['id_kat2'] ?>">
                                    <?= $value['kat2'] ?>
                                </option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Tahun</label>
                    <select class="select" style="width: 100%;">
                        <option>ASC</option>
                        <option>DESC</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Bulan</label>
                    <select class="select" style="width: 100%;">
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
                    <th>Kat 1</th>
                    <th>Kat 2</th>
                    <th>File</th>
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
                    <th>Tindakan</th>
                    <th>Keterangan</th>
                    <th>File</th>
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
                    <td><?= $row['tgl_surat'] ?></td>
                    <td><?= $row['kat1'] ?></td>
                    <td><?= $row['kat2'] ?></td>
                    <td><?= $row['file'] ?></td>
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
<?= $this->extend('tem_x')?>

<?= $this->section('content')?>
    <?php if(session()->getFlashdata('status')) {
        echo "<h6>".session()->getFlashdata('status')."</h6>";
    }?>
<!--Tabel Surat-->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
        <div class="card-tools">
            <a class="btn btn-primary" href="<?=base_url('Surat/add')?>">
                Tambah
            </a>
        </div>
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
                    <th>Keterangan</th>
                    <th>Pengunggah</th>
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
                    <td><?= $row['tgl_terima'] ?></td>
                    <td><?= $row['tindakan'] ?></td>
                    <td><?= $row['catatan'] ?></td>
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
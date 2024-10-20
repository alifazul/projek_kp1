<?= $this->extend('_template')?>

<?= $this->section('content')?>

<!-- Tabel User-->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel User</h3>
        <div class="card-tools">
            <a class="btn btn-primary" href="<?=base_url('user/add')?>">
                Tambah
            </a>
        </div>
    </div>
    <div class="card-body">
        <table id="tbl" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Status</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $no=1; foreach($user as $row) { 
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="<?= base_url('user/edit/'.$row['id_user']) ?>">
                            <i class="far fa-edit"></i>  
                        </a>
                        <a class="btn btn-success btn-sm " href="<?= base_url('user/reset_password/'.$row['id_user']) ?>">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                        <a class="btn bg-black btn-sm" href="<?= base_url('user/edit_status/'.$row['id_user']) ?>">
                            <?php if($row['status']=='aktif') { ?><i class="fas fa-lock"></i>
                            <?php }elseif($row['status']=='nonaktif') {?><i class="fas fa-lock-open"></i>
                            <?php } ?>
                        </a>
                        <a id="" class="btn btn-danger btn-sm hapus" href="<?= base_url('user/delete/'.$row['id_user']) ?>">
                            <i class="far fa-trash-alt"></i>  
                        </a>
                    </td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['level'] ?></td>
                    <td><?php if($row['status']=='aktif') { ?><span class="badge bg-success"><?=$row['status']?></span>
                        <?php }elseif($row['status']=='nonaktif') {?> <span class="badge bg-red"><?=$row['status']?></span>
                        <?php } ?>
                    </td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>

    </div>
</div>

<?= $this->endSection()?>

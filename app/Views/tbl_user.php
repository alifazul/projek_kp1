<?= $this->extend('tem_x')?>

<?= $this->section('content')?>

<!-- Tabel User-->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
        <div class="card-tools">
            <a class="btn btn-primary" href="<?=base_url('User/add')?>">
                Tambah
            </a>
        </div>
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
                <?php $no=1; foreach($user as $row) { 
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="<?= base_url('User/edit/'.$row['id_user']) ?>">
                            <i class="far fa-edit"></i>  
                        </a>
                        <a class="btn btn-success btn-sm " href="<?= base_url('User/edit/'.$row['id_user']) ?>">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                        <a class="btn bg-black btn-sm" href="<?= base_url('User/edit/'.$row['id_user']) ?>">
                            <i class="fas fa-lock"></i> <i class="fas fa-lock-open"></i>
                        </a>
                        <a class="btn btn-danger btn-sm hapus_notif" href="<?= base_url('User/delete/'.$row['id_user']) ?>">
                            <i class="far fa-trash-alt"></i>  
                        </a>
                    </td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['level'] ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>

    </div>
</div>

<?= $this->endSection()?>
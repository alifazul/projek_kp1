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
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level</th>
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
                        <a class="btn btn-success btn-sm " href="<?= base_url('user/edit/'.$row['id_user']) ?>">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                        <a class="btn bg-black btn-sm" href="<?= base_url('user/edit/'.$row['id_user']) ?>">
                            <i class="fas fa-lock"></i> <i class="fas fa-lock-open"></i>
                        </a>
                        <a id="hapus_data" class="btn btn-danger btn-sm" href="<?= base_url('user/delete/'.$row['id_user']) ?>">
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

<?= $this->section('js_custom')?>
    <script>
        $('#hapus_data').on('click', function(){
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
    </script>
<?= $this->endSection()?>
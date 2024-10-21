<?= $this->extend('_template')?>

    <?= $this->section('content')?>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Kategori 1</h3>
                    </div>
                    <div class="card-header">
                        <form class="" method="post" action="<?=base_url('kategori/add/kat1')?>">
                            <div class="form-row">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="kat" placeholder="Tambah Kategori 2">
                                </div>
                                <div class="col">
                                    <button class="btn btn-info" type="submit">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tb_kat1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($kat1 as $k) {?>
                                    <tr>
                                        <td><?=$no?></td>
                                        <td><?=$k['kat1']?></td>
                                        <td>
                                            <a class="btn bg-red hapus" href="<?=base_url('kategori/delete/kat1/'.$k['kat1'])?>">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php $no++;} ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Kategori 2</h3>
                    </div>
                    <div class="card-header">
                        <form class="" method="post" action="<?=base_url('kategori/add/kat2')?>">
                            <div class="form-row">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="kat" placeholder="Tambah Kategori 2">
                                </div>
                                <div class="col">
                                    <button class="btn btn-info" type="submit">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tb_kat2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($kat2 as $k) {?>
                                    <tr>
                                        <td><?=$no?></td>
                                        <td><?=$k['kat2']?></td>
                                        <td>
                                            <a class="btn bg-red hapus" href="<?=base_url('kategori/delete/kat2/'.$k['kat2'])?>">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php $no++;} ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

    <?= $this->endSection()?>

    <?= $this->section('js_custom')?>
        <script>

            $(document).ready(function() {
                $("#tb_kat1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                })
                $("#tb_kat2").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                })             
            });
        </script>
    <?= $this->endSection()?>
    

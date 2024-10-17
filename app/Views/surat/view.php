<?= $this->extend('_template')?>

<?= $this->section('content')?>

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Surat</h3>
                    <div class="card-tools">
                        <a class="btn btn-sm btn-secondary" href="<?=base_url('home')?>">
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">Surat <?php echo $surat->ket ?></th>
                                <td><?php echo $surat->surat ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Diterima Tanggal</th>
                                <td><?php echo $surat->tgl_terima ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Surat</th>
                                <td><?php echo $surat->tgl_surat ?></td>
                            </tr>
                            <tr>
                                <th scope="row">No Agenda</th>
                                <td><?php echo $surat->no_agenda ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nomor Surat</th>
                                <td><?php echo $surat->no_surat ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Sifat</th>
                                <td><?php echo $surat->sifat ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kategori 1</th>
                                <td><?= $surat->kat1 ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kategori 2</th>
                                <td><?= $surat->kat2 ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Perihal</th>
                                <td><?php echo $surat->perihal ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Diteruskan kepada</th>
                                <td><?php echo $surat->terusan ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Dengan hormat harap</th>
                                <td><?php echo $surat->tindakan ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Catatan</th>
                                <td><?= $surat->catatan ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title"><?=$surat->file?></h3>
                    <div class="card-tools">
                        <a class="btn btn-sm btn-success" href="<?=base_url('uploads/'.$surat->file.'.pdf')?>" target="_blank">
                            Download
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="ExternalFiles">
                        <iframe src="<?php echo base_url('uploads/'.$surat->file.'.pdf') ?>" width="100%" height="582"></iframe>
                    </div>
                </div>
            </div>
            <!--END Form Surat-->
        </div>
    </div>




<?= $this->endSection()?>
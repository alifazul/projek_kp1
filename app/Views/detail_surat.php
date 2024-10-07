<?= $this->extend('tem_x')?>

<?= $this->section('content')?>

<div class="card">
    <div class="card-header">
        <h2 class="card-header">DETAIL SURAT</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Surat Dari</th>
                    <td><?php echo $surat->surat_dari ?></td>
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
                    <td><?php echo $surat->kat1 ?></td>
                </tr>
                <tr>
                    <th scope="row">Kategori 2</th>
                    <td><?php echo $surat->kat2 ?></td>
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
                    <td><?php echo $surat->catatan ?></td>
                </tr>
            </tbody>
        </table>
        <br> <a class="btn btn-secondary" href="<?= base_url('Surat') ?>">BACK</a>
    </div>
</div>

<!-- Form Surat-->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Preview Surat</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="ExternalFiles">
            <iframe src="<?php echo base_url('uploads/'.$surat->file) ?>" width="100%" height="500"></iframe>
        </div>
    </div>
</div>
<!--END Form Surat-->

<?= $this->endSection()?>
<?= $this->extend('tem_x')?>

<?= $this->section('content')?>

<!-- Form Surat-->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">FORM SURAT</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="<?= base_url('Surat/simpan') ?>" id="form_validation" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="email_address">Surat Dari</label>
                        <div class="form-line">
                            <input type="text" class="form-control" name="surat_dari" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label for="email_address">Tanggal Surat</label>
                        <div class="form-line">
                            <input type="date" class="form-control" name="tgl_surat" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label for="email_address">Nomor Surat</label>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_surat" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="email_address">Diterima Tanggal</label>
                        <div class="form-line">
                            <input type="date" class="form-control" name="tgl_terima" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label for="email_address">No. Agenda</label>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_agenda" required>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="terusan" required>
                    <input type="text" class="form-control" name="tindakan" required>
                    <div class="form-group form-float">
                        <label for="email_address">Sifat</label>
                        <div class="form-group">
                            <input type="radio" name="sifat" id="x" class="with-gap" value="Sangat Segera" <?php //if(set_value('sifat')=='Sangat Segera') { echo 'checked'; } ?>>
                            <label class="form-check-label" for="male"> Sangat Segera </label>
                            <input type="radio" name="sifat" id="y" class="with-gap" value="Segera"  <?php //if(set_value('sifat')=='Segera') { echo 'checked'; } ?>>
                            <label for="female" class="m-l-20 form-check-label"> Segera</label>
                            <input type="radio" name="sifat" id="rahasia" class="with-gap" value="Rahasia"  <?php //if(set_value('sifat')=='Rahasia') { echo 'checked'; } ?>>
                            <label for="rahasia" class="m-l-20 form-check-label">Rahasia</label>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="xxx">Kategori</label>
                        <select class="form-control" style="width: 100%;" name="kat1">
                            <?php foreach($kat1 as $key => $value) { ?>
                                <option value="<?php echo $value['id_kat1'] ?>">
                                    <?php echo $value['kat1'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="xxx">Kategori 2</label>
                        <select class="form-control" style="width: 100%;" name="kat2">
                        <?php foreach($kat2 as $key => $value) { ?>
                                <option value="<?= $value['id_kat2'] ?>">
                                    <?= $value['kat2'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <!--
            <input type="text" class="form-control" name="kat1" required>
            <input type="text" class="form-control" name="kat2" required>
            -->
            <div class="form-group form-float">
                <label class="form-label">Perihal</label>
                <div class="form-line">
                    <textarea name="perihal" cols="30" rows="5" class="form-control no-resize" required></textarea>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="xxx">Diteruskan kepada</label>
                       
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terusan[]" value="1">
                            <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terusan[]" value="2">
                            <label class="form-check-label">Checkbox</label>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="basic_checkbox">Dengan hormat harap</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="tindakan[]" value="1">
                            <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tindakan[]"  value="2">
                            <label class="form-check-label">Checkbox</label>
                        </div>
                        
                    </div>
                </div>
            </div> -->
            <div class="form-group form-float">
                <label class="form-label">Catatan</label>
                <div class="form-line">
                    <textarea name="catatan" cols="30" rows="5" class="form-control no-resize" required></textarea>
                </div>
            </div>
            <div class="form-group form-float">
                <label>File</label>
                <input type="file" class="form-control-file mb-3" id="file" name="file" autocomplete="off" required>
            </div>
            <button class="btn btn-info" type="submit">SUBMIT</button>
            <a class="btn btn-secondary" href="<?= base_url('Surat') ?>">CANCEL</a>
        </form>
    </div>
</div>
<!--END Form Surat-->

<?= $this->endSection()?>
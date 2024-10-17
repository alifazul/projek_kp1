<?= $this->extend('_template')?>

<?= $this->section('content')?>

<!-- Form Surat-->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Tambah Surat <?=$ket?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form  id="surat-validation" action="<?= base_url('surat/simpan') ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="email_address">Surat <?=$ket?></label>
                        <div class="form-line">
                            <input type="text" class="form-control" name="surat" required>
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
                        <label for="xxx">Kategori 1</label>
                        <select class="form-control" style="width: 100%;" name="kat1">
                            <?php foreach($kat1 as $key => $value) { ?>
                                <option value="<?php echo $value['kat1'] ?>">
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
                                <option value="<?= $value['kat2'] ?>">
                                    <?= $value['kat2'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group form-float">
                <label class="form-label">Perihal</label>
                <div class="form-line">
                    <textarea name="perihal" cols="30" rows="5" class="form-control no-resize"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="xxx">Diteruskan kepada</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" name="checkter[0]" value='0'>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="terusan[0]">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" name="checkter[1]" value='1'>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="terusan[1]">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" name="checkter[2]" value='2'>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="terusan[2]">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="basic_checkbox">Dengan hormat harap</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" name="checktin[0]" value='0'>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="tindakan[0]">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" name="checktin[1]" value='1'>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="tindakan[1]">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" name="checktin[2]" value='2'>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="tindakan[2]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-float">
                <label class="form-label">Catatan</label>
                <div class="form-line">
                    <textarea name="catatan" cols="30" rows="5" class="form-control no-resize"></textarea>
                </div>
            </div>
            <div class="form-group form-float">
                <label>File</label>
                <div class="form-group input-group mb-3">
                    <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file" >
                        <label class="custom-file-label" for="inputGroupFile01" name="file">Choose file</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="ket" value="<?=$ket?>">
            <button class="btn btn-info" type="submit">SUBMIT</button>
            <a class="btn btn-secondary" href="<?= base_url('surat/'.$ket) ?>">CANCEL</a>
        </form>
    </div>
</div>
<!--END Form Surat-->

<?= $this->endSection()?>
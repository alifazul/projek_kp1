<?= $this->extend('_template')?>

<?= $this->section('content')?>

    <!-- Form Surat-->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Edit Surat <?=$surat->ket?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="<?= base_url('surat/update/'.$surat->id_surat)?>" id="surat-validation" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <label for="email_address">Surat <?=$surat->ket?></label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="surat" value="<?= $surat->surat?>" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="email_address">Tanggal Surat</label>
                            <div class="form-line">
                                <input type="date" class="form-control" name="tgl_surat" value="<?php echo $surat->tgl_surat?>" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="email_address">Nomor Surat</label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="no_surat" value="<?php echo $surat->no_surat?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <label for="email_address">Diterima Tanggal</label>
                            <div class="form-line">
                                <input type="date" class="form-control" name="tgl_terima" value="<?php echo $surat->tgl_terima?>" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="email_address">No. Agenda</label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="no_agenda" value="<?php echo $surat->no_agenda?>" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="email_address">Sifat</label>
                            <div class="form-group">
                                <input type="radio" name="sifat" id="x" class="with-gap" value="Sangat Segera" <?php if($surat->sifat=='Sangat Segera') { ?> checked <?php }?>>
                                <label class="form-check-label" for="male"> Sangat Segera </label>
                                <input type="radio" name="sifat" id="y" class="with-gap" value="Segera"  <?php if( $surat->sifat=='Segera') { ?> checked <?php }?> >
                                <label for="female" class="m-l-20 form-check-label"> Segera</label>
                                <input type="radio" name="sifat" id="rahasia" class="with-gap" value="Rahasia"  <?php if( $surat->sifat=='Rahasia') { ?> checked <?php }?>>
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
                                    <option value="<?php echo $value['kat1'] ?>" <?php if($surat->kat1==$value['kat1']) { echo 'selected';} ?>>
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
                                    <option value="<?= $value['kat2'] ?>" <?php if($surat->kat2==$value['kat2']){?> selected <?php } ?> >
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
                        <textarea name="perihal" cols="30" rows="5" class="form-control no-resize" required><?php echo $surat->perihal?></textarea>
                    </div>
                </div>
                <?php 
                    $te = explode(';',$surat->terusan);
                    if(count($te)<3){
                        for($i=count($te);$i<3;$i++){
                            array_push($te,' ');
                        }
                    }
                ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <label for="xxx">Diteruskan kepada</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" name="checkter[0]" value='0' <?php if($te[0] != ' '){?> checked <?php } ?> >
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="terusan[0]" value="<?= $te[0] ?>">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" name="checkter[1]" value='1' <?php if($te[1] != ' '){?> checked <?php } ?>>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="terusan[1]" value="<?= $te[1] ?>">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" name="checkter[2]" value='2' <?php if($te[2] != ' '){?> checked <?php } ?>>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="terusan[2]" value="<?= $te[2] ?>">
                            </div>
                        </div>
                    </div>
                    <?php 
                        $ti = explode(';',$surat->tindakan);
                        if(count($ti)<5){
                            for($i=count($ti);$i<5;$i++){
                                array_push($ti,' ');
                            }
                        }
                    ?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="basic_checkbox">Dengan hormat harap</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" name="checktin[0]" value='0' <?php if($ti[0] != ' '){?> checked <?php } ?>>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="tindakan[0]" value="<?= $ti[0] ?>">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" name="checktin[1]" value='1' <?php if($ti[1] != ' '){?> checked <?php } ?>>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="tindakan[1]" value="<?= $ti[1] ?>">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" name="checktin[2]" value='2' <?php if($ti[2] != ' '){?> checked <?php } ?>>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="tindakan[2]" value="<?= $ti[2] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group form-float">
                    <label class="form-label">Catatan</label>
                    <div class="form-line">
                        <textarea name="catatan" cols="30" rows="5" class="form-control no-resize" required><?php echo $surat->catatan?></textarea>
                    </div>
                </div>
                <input type="hidden" name="ket" value="<?=$surat->ket?>">
                <input type="hidden" name="file" value="<?=$surat->file?>">
                <button class="btn btn-info" type="submit">SUBMIT</button>
                <a class="btn btn-secondary" href="<?= base_url('surat/'.$surat->ket)?>">CANCEL</a>
        </form>
        </div>
    </div>
    <!--END Form Surat-->

    <!-- View PDF File-->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title"><?= $surat->file ?></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?=$surat->id_surat?>">
                    Ubah File
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="ExternalFiles">
                <iframe src="<?=base_url('uploads/'.$surat->file.'.pdf') ?>" width="100%" height="500"></iframe>
            </div>
        </div>
    </div>
    <!--END View PDF File-->

    <div class="modal fade" id="modal-default<?=$surat->id_surat?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah File</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('surat/update/'.$surat->id_surat)?>" method="post" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <label>File</label>
                        <div class="form-group input-group mb-3">
                            <div class="custom-file">
                                <input type="file" id="fileUbah" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file">
                                <label class="custom-file-label" for="inputGroupFile01" name="file">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <iframe id="filePreview" width="100%"></iframe>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<?= $this->endSection()?>
<?= $this->section('js_custom')?>
    <script>
        document.getElementById('fileUbah').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file.type === "application/pdf") {
            const fileURL = URL.createObjectURL(file);
            document.getElementById('filePreview').src = fileURL;
        } else {
            alert("Please upload a valid PDF file.");
        }
        });
    </script>
<?= $this->endSection()?>
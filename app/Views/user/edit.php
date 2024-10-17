<?= $this->extend('_template')?>

<?= $this->section('content')?>


<!-- Form User-->
<div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form id="form_validation" method="POST" action="<?=base_url('user/update/'.$user->id_user)?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Username</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="username" value="<?= $user->username ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Password</label>
                                    <div class=" form-line">
                                        <input type="password" class="form-control" name="password" value="" disabled>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Bidang</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="bidang" value="<?= $user->bidang?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Jabatan</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="jabatan" value="<?= $user->jabatan?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">NIP</label>
                                    <div class=" form-line">
                                        <input type="" class="form-control" name="nip" value="<?= $user->nip?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Nama</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="nama" value="<?= $user->nama?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Tempat Lahir</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="tempat_lahir" value="<?= $user->tempat_lahir?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="email_address">Tanggal Lahir</label>
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="tgl_lahir" value="<?= $user->tgl_lahir?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label class="form-label">Alamat</label>
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize"><?= $user->alamat?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="email_address">Jenis Kelamin</label>
                                    <div class="form-group">
                                        <input type="radio" name="jenis_kelamin" id="x" class="with-gap" value="Laki-Laki" <?php if($user->jenis_kelamin=='Laki-Laki') { ?> checked <?php }?>>
                                        <label class="form-check-label" for="male"> Laki-Laki </label>
                                        <input type="radio" name="jenis_kelamin" id="x" class="with-gap" value="Perempuan" <?php if($user->jenis_kelamin=='Perempuan') { ?> checked <?php }?>>
                                        <label class="form-check-label" for="male"> Perempuan </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <label for="">Level</label>
                            <select class="form-control" style="width: 100%;" name="level">
                                <option value="Admin"  <?php if($user->level=='Admin') { echo 'selected';} ?>>Admin</option>
                                <option value="User"  <?php if($user->level=='User') { echo 'selected';} ?>>User</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <label>Foto</label>
                            <input type="file" class="form-control-file mb-3" id="foto" name="foto" onchange="readImg(this);">
                            <div class="image-area mt-2"><img id="imageResult" src="<?=base_url('images/'.$user->foto)?>" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                <a class="btn bg-grey waves-effect" href="#">CANCEL</a>
            </form>
        </div>
    </div>
    <!--END Form User-->

<?= $this->endSection()?>
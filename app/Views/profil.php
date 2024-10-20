<?= $this->extend('_template')?>

<?= $this->section('content')?>


<!-- Form User-->
<div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Profil</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form id="form_validation" method="POST" action="<?=base_url('profil/update/'.$user->id_user)?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Username</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="username" value="<?= $user->username ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Password</label>
                                    <div class=" form-line">
                                        <input type="password" class="form-control" name="password" value="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="email_address">Email</label>
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" value="<?=$user->email?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Nama</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="nama" value="<?= $user->nama?>">
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
                                    <label for="">Level</label>
                                    <div class="form-line">
                                            <input type="text" class="form-control" name="level" value="<?= $user->level?>" readonly>
                                    </div>
                                </div>
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
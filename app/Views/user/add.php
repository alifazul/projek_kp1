<?= $this->extend('_template')?>

<?= $this->section('content')?>

    <!-- Form User-->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form id="form_validation" method="POST" action="<?=base_url('user/simpan')?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Username</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Password</label>
                                    <div class=" form-line">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="email_address">Email</label>
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Nama</label>
                                    <div class=" form-line">
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label class="form-label">Alamat</label>
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <label for="">Level</label>
                                    <select class="form-control" style="width: 100%;" name="level">
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <label for="email_address">Jenis Kelamin</label>
                                    <div class="form-group">
                                        <input type="radio" name="jenis_kelamin" id="x" class="with-gap" value="Laki-Laki">
                                        <label class="form-check-label" for="male"> Laki-Laki </label>
                                        <input type="radio" name="jenis_kelamin" id="x" class="with-gap" value="Perempuan">
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
                            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                <a class="btn btn-secondary" href="<?= base_url('user') ?>">CANCEL</a>
            </form>
        </div>
    </div>
    <!--END Form User-->

<?= $this->endSection()?>
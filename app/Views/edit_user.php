<?= $this->extend('tem_x')?>

<?= $this->section('content')?>


<!-- Form User-->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Form User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="<?=base_url('User/update')?>" id="form_validation" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label>Foto</label>
                        <div class="row">
                            <div class="col-4">
                                <div id="imagePreview">
                                    <img class="foto-preview" width="150" height="150" src="<?= base_url()?>" />
                                </div>
                            </div>
                            <div class="col-6">
                                <input type="file" class="form-control-file mb-3" id="foto" name="foto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="">Username</label>
                        <div class=" form-line">
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
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
                        <label for="">Nama</label>
                        <div class=" form-line">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="">NIP</label>
                        <div class=" form-line">
                            <input type="" class="form-control" name="nip">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="">Bidang</label>
                        <div class=" form-line">
                            <input type="text" class="form-control" name="bidang">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="">Jabatan</label>
                        <div class=" form-line">
                            <input type="text" class="form-control" name="jabatan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="">Tempat Lahir</label>
                        <div class=" form-line">
                            <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="email_address">Tanggal Lahir</label>
                        <div class="form-line">
                            <input type="date" class="form-control" name="tgl_lahir">
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
                        <label for="">Level</label>
                        <div class=" form-line">
                        <select class="form-control" style="width: 100%;" name="level">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="email_address">Jenis Kelamin</label>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki">
                                <label class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label class="form-label">Alamat</label>
                        <div class="form-line">
                            <textarea name="alamat" cols="30" rows="3" class="form-control no-resize"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">SUBMIT</button>
            <a class="btn bg-grey " href="#">CANCEL</a>
        </form>
    </div>
</div>
<!--END Form User-->

<?= $this->endSection()?>
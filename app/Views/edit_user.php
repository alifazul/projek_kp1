<?= $this->extend('tem_x')?>

<?= $this->section('content')?>


<!-- Form User-->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Form User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form id="form_validation" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="">Nama</label>
                        <div class=" form-line ">
                            <input type="text " class="form-control " name="name " required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-group form-float ">
                        <label for="">Bidang</label>
                        <div class=" form-line">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <label for="">NIP</label>
                        <div class=" form-line ">
                            <input type=" class="form-control" name="name" required>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <label for="">Jabatan</label>
                        <div class="form-line">
                            <input type="text " class="form-control " name="name " required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-6 ">
                    <div class="form-group form-float ">
                        <label for="">Tempat Lahir</label>
                    <div class=" form-line">
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <label for="">Tanggal Lahir</label>
                    <div class="form-line">
                        <input type="date" class="form-control" name="surname" required>
                    </div>
                </div>
            </div>
    </div>
    <div class="form-group form-float">
        <label for="email_address">Email</label>
        <div class="form-line">
            <input type="email" class="form-control" name="email" required>
        </div>
    </div>
    <div class="form-group form-float">
        <label for="email_address">Jenis Kelamin</label>
        <div class="form-group">
            <input type="radio" name="gender" id="male" class="with-gap">
            <label for="male">Laki-Laki</label>
            <input type="radio" name="gender" id="female" class="with-gap">
            <label for="female" class="m-l-20">Perempuan</label>
        </div>
    </div>
    <div class="form-group form-float">
        <label class="form-label">Alamat</label>
        <div class="form-line">
            <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
        </div>
    </div>
    <div class="form-group form-float">
        <label>Foto</label>
        <input type="file" class="form-control-file mb-3" id="foto" name="foto" autocomplete="off" required>
        <div id="imagePreview"><img class="foto-preview" src="images/default.png')?>" /></div>
    </div>
    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
    <a class="btn bg-grey waves-effect" href="<?= base_url('user') ?>">CANCEL</a>
    </form>
</div>
</div>
<!--END Form User-->

<?= $this->endSection()?>
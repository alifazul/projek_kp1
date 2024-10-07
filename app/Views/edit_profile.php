<?= $this->extend('tem_x')?>

<?= $this->section('content')?>


        <!-- /.col -->
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ubah Password</a></li>
                </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
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
                                                <label>Foto</label>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div id="imagePreview">
                                                            <img class="foto-preview" width="150" height="150" src=" images/default.png" />
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
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="">Nama</label>
                                                <div class=" form-line">
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="">NIP</label>
                                                <div class=" form-line">
                                                    <input type="" class="form-control" name="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="">Bidang</label>
                                                <div class=" form-line">
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="">Jabatan</label>
                                                <div class=" form-line">
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="">Tempat Lahir</label>
                                                <div class=" form-line">
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="email_address">Tanggal Lahir</label>
                                                <div class="form-line">
                                                    <input type="date" class="form-control" name="surname">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="email_address">Email</label>
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="surname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label for="">Level</label>
                                                <div class=" form-line">
                                                    <input type="text" class="form-control" name="level">
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
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin">
                                                        <label class="form-check-label">Laki-Laki</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin">
                                                        <label class="form-check-label">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <label class="form-label">Alamat</label>
                                                <div class="form-line">
                                                    <textarea name="description" cols="30" rows="5" class="form-control no-resize"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                    <a class="btn bg-grey waves-effect" href="#">CANCEL</a>
                                </form>
                            </div>
                        </div>
                        <!--END Form User-->
                    </div>
                    <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Input Password Baru</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="inputName" placeholder="Password">
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

<?= $this->endSection()?>

<?= $this->extend('tem_x')?>

<?= $this->section('content')?>

<!-- FORM SURAT -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>FORM SURAT</h2>
            </div>
            <div class="body">
                <form action="<?= base_url('surat_simpan') ?>" id="form_validation" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <label for="surat_dari">Surat Dari</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="surat_dari" required>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <label for="tgl_surat">Tanggal Surat</label>
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
                            <input type="text" class="form-control" name="sifat" value="x" required>
                            <input type="text" class="form-control" name="kat_1" value="y" required>
                            <input type="text" class="form-control" name="kat_2" value="z" required>
                            <input type="text" class="form-control" name="terusan" value="a" required>
                            <input type="text" class="form-control" name="tindakan" value="b" required>
                            <!--
                            <div class="form-group form-float">
                                <label for="email_address">Sifat</label>
                                <div class="form-group">
                                    <input type="radio" name="sifat" id="x" class="with-gap">
                                    <label for="male">Sangat Segera</label>
                                    <input type="radio" name="sifat" id="y" class="with-gap">
                                    <label for="female" class="m-l-20">Segera</label>
                                    <input type="radio" name="sifat" id="rahasia" class="with-gap">
                                    <label for="rahasia" class="m-l-20">Rahasia</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="xxx">Kategori</label>
                                <select class="form-control show-tick" data-live-search="true">
                                    <option>xx</option>
                                    <option>xx</option>
                                    <option>xx</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="xxx">Kategori</label>
                                <select class="form-control show-tick" data-live-search="true">
                                    <option>xx</option>
                                    <option>xx</option>
                                    <option>xx</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group form-float">
                        <label class="form-label">Perihal</label>
                        <div class="form-line">
                            <textarea name="perihal" cols="30" rows="5" class="form-control no-resize"></textarea>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="xxx">Diteruskan kepada</label>
                                <div class="form-check">
                                    <input type="checkbox" id="basic_checkbox_1" class="filled-in" />
                                    <label for="basic_checkbox_1">....</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="basic_checkbox_2" class="filled-in" />
                                    <label for="basic_checkbox_2">....</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="basic_checkbox_3" class="filled-in" />
                                    <label for="basic_checkbox_3">....</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="basic_checkbox">Dengan hormat harap</label>
                                <div class="form-check">
                                    <input type="checkbox" id="basic_1" class="filled-in" />
                                    <label for="basic_1">Tanggapan dan saran</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="basic_2" class="filled-in" />
                                    <label for="basic_2">Proses lebih lanjut</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="basic_3" class="filled-in" />
                                    <label for="basic_3">Koordinasi/Konfirmasi</label>
                                </div>
                            </div>
                        </div>
                    </div>
-->
                    <div class="form-group form-float">
                        <label class="form-label">Catatan</label>
                        <div class="form-line">
                            <textarea name="catatan" cols="30" rows="5" class="form-control no-resize" required></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label>File</label>
                        <input type="file" class="form-control-file mb-3" name="file" autocomplete="off" required>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    <a class="btn bg-grey waves-effect" href="#">CANCEL</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# FORM SURAT -->

<?= $this->endSection()?>

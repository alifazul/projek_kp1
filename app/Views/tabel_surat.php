<?= $this->extend('frontend');?>

<?= $this->section('content')?>
            <?php if(session()->getFlashdata('status')) {
                echo "<h6>".session()->getFlashdata('status')."</h6>";
            }?>

            <!-- Tabel Surat Masuk -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Surat Masuk
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Surat Dari</th>
                                            <th>Tanggal Surat</th>
                                            <th>No Surat</th>
                                            <th>Tanggal Diterima</th>
                                            <th>No Agenda</th>
                                            <th>Sifat</th>
                                            <th>Perihal</th>
                                            <th>Disposisi</th>
                                            <th>Tindakan</th>
                                            <th>Keterangan</th>
                                            <th>Pengunggah</th>
                                            <th>Tanggal Catat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Surat Dari</th>
                                            <th>Tanggal Surat</th>
                                            <th>No Surat</th>
                                            <th>Tanggal Diterima</th>
                                            <th>No Agenda</th>
                                            <th>Sifat</th>
                                            <th>Kat 1</th>
                                            <th>Kat 2</th>
                                            <th>Perihal</th>
                                            <th>Disposisi</th>
                                            <th>Tindakan</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal Catat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($surat as $row) {?>
                                        <tr>
                                            <td><?= $row ['id_surat'] ?></td>
                                            <td><?= $row ['surat_dari'] ?></td>
                                            <td><?= $row ['tgl_surat'] ?></td>
                                            <td><?= $row ['no_surat'] ?></td>
                                            <td><?= $row ['tgl_surat'] ?></td>
                                            <td><?= $row ['no_agenda'] ?></td>
                                            <td><?= $row ['sifat'] ?></td>
                                            <td><?= $row ['kat_1'] ?></td>
                                            <td><?= $row ['kat_2'] ?></td>
                                            <td><?= $row ['perihal'] ?></td>
                                            <td><?= $row ['terusan'] ?></td>
                                            <td><?= $row ['tindakan'] ?></td>
                                            <td><?= $row ['catatan'] ?></td>
                                            <td><?= $row ['tgl_catat'] ?></td>
                                            <td><button type="button" class="btn btn-warning waves-effect">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn bg-red waves-effect">
                                                <i class="material-icons">delete</i>
                                                </button>
                                                <button type="button" class="btn btn-default waves-effect">
                                                <i class="material-icons">remove_red_eye</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabel Surat Masuk -->
<?= $this->endSection()?>
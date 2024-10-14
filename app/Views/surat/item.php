 
        <div class="row mt-5 mb-3">
            <div class="col-8">
                <form id="search-surat">
                    <div class="input-group">
                        <input name="q" type="search" class="form-control" placeholder="Type your keywords here">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="xxx">Sort</label>
                    <div class="form-group">
                        <select id="sort-surat" name="sort" class="form-select">
                            <option value="latest" <?= $sort == 'latest' ? 'selected' : '' ?>>
                                Latest
                            </option>
                            <option value="oldest" <?= $sort == 'oldest' ? 'selected' : '' ?>>
                                Oldest
                            </option>  
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="xxx">Kategori</label>
                    <div class="form-group">
                        <select id="kat1-surat" name="kat1" class="form-control select2" style="width: 100%;">
                            <option value="" selected="">
                                Semua
                            </option>
                        <?php foreach ($kats1 as $filter): ?>
                            <option value="<?= $filter  ?>" <?= $kat2 == $filter ? 'selected' : '' ?>>
                                <?= $filter  ?>
                            </option>
                        <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="xxx">Kategori</label>
                    <div class="form-line">
                        <select  id="kat2-surat"  name="kat2" class="form-control select2" style="width: 100%;">
                            <option value="" selected="">
                                Semua
                            </option>
                        <?php foreach ($kats2 as $filter): ?>
                            <option value="<?= $filter  ?>" <?= $kat2 == $filter ? 'selected' : '' ?>>
                                <?= $filter  ?>
                            </option>
                        <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="xxx">Bulan</label>
                    <div class="form-group">
                        <select  id="sort-bulan"  name="bulan" class="form-control select2" style="width: 100%;">
                            <option value="" selected="">
                                Semua
                            </option>
                            
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="xxx">Tahun</label>
                    <div class="form-line">
                        <select  id="sort-tahun"  name="tahun" class="form-control select2" style="width: 100%;">
                            <option value="" selected="">
                                Semua
                            </option>
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
    <div id="row-surat">
        <?php foreach ($surats as $surat): ?>
            <div class="card mt-3 align-item-center mr-auto ml-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto"> 
                            <img class="rounded" src="<?= base_url('')?>dist/img/dokumen.jpg" alt="User Image" width="100" height="120">
                        </div>
                        <div class="col">
                            <h4><?= $surat['surat_dari']?></h4>
                            <p class="text-muted"><i class="fas fa-tag"></i>&nbsp; <?= $surat['kat1']?>,<?= $surat['kat2']?> &nbsp; &nbsp; <i class="fas fa-calendar-day"></i> &nbsp; <?= $surat['tgl_surat']?></p>
                            <div class="xx clearfix">
                                <a class="btn btn-info float-right mr-2" href="#"><i class="fas fa-eye"></i>&nbsp; Lihat</a> 
                                <a class="btn btn-success float-right mr-2"><i class="fas fa-download"></i>&nbsp; Unduh</a>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        <?php endforeach ?>
    </div>

<div class="row">
    <div class="col-12 text-center">
        <?php if ($surats): ?>        
            <?= $pager->links('surat', 'bootstrap') ?>
        <?php endif ?>
    </div>
</div>
                                
<?= $this->extend('_template')?>

<?= $this->section('content')?>
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col text-center">
                            <a id="pdf" class="btn btn-secondary" href="<?=base_url('home/ekspor_pdf')?>" >PDF</a>
                            <a id="pdf" class="btn btn-secondary" href="<?=base_url('home/ekspor_excel')?>" >XLSX</a>
                        </div>
                    </div>
                    <div id="main-mail">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="xxx">Cari</label>
                                    <div class="form-group">
                                        <input id="cari" name="cari" type="text" class="form-control" placeholder="Type your keywords here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="xxx">Sort</label>
                                    <div class="form-group">
                                        <select id="sort-mail" name="sort" class="form-control filter" style="width: 100%;">
                                            <option value="latest">
                                                Latest
                                            </option>
                                            <option value="oldest">
                                                Oldest
                                            </option>  
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="xxx">Keterangan</label>
                                    <div class="form-group">
                                        <select id="sort-ket" name="sort-ket" class="form-control filter" style="width: 100%;">
                                            <option value="" selected>
                                                Semua
                                            </option>
                                            <option value="masuk">
                                                Masuk
                                            </option>
                                            <option value="keluar">
                                                Keluar
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
                                        <select id="kat1-mail" name="kat1" class="form-control filter" style="width: 100%;">
                                            <option value="">Semua</option>
                                            <?php foreach($kat1 as $key => $value) { ?>
                                                    <option value="<?=$value['kat1'] ?>">
                                                        <?=$value['kat1'] ?>
                                                    </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="xxx">Kategori</label>
                                    <div class="form-line">
                                        <select  id="kat2-mail"  name="kat2" class="form-control filter" style="width: 100%;">
                                            <option value="">Semua</option>
                                            <?php foreach($kat2 as $key => $value) { ?>
                                                    <option value="<?=$value['kat2'] ?>">
                                                        <?=$value['kat2'] ?>
                                                    </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="xxx">Bulan</label>
                                    <div class="form-group">
                                        <select  id="bulan-sort"  name="bulan" class="form-control filter" style="width: 100%;">
                                            <option value="" selected>
                                                Semua
                                            </option>
                                            <?php 
                                            foreach ($bulan as $filter): ?>
                                            <option value="<?php
                                                if($filter<10) { echo '-0'.$filter.'-'; }
                                                else { echo $filter;} ?>">
                                                <?= $filter  ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="xxx">Tahun</label>
                                    <div class="form-line">
                                        <select  id="tahun-sort"  name="tahun" class="form-control filter" style="width: 100%;">
                                            <option value="" selected>
                                                Semua
                                            </option>
                                            <?php 
                                            sort($tahun);
                                            foreach ($tahun as $filter): ?>
                                            <option value="<?= $filter ?>">
                                                <?= $filter  ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-mail">

                    </div>
                    
                </div>
            </section>
<?= $this->endSection()?>

<?= $this->section('js_custom')?>
<script>
let ket = $('#sort-ket').val();
let kat1 = $('#kat1-mail').val();
let kat2 = $('#kat2-mail').val()
let bulan = $('#bulan-sort').val()
let tahun = $('#tahun-sort').val()
let sort = $('#sort-mail').val()
let cari = $('#cari').val()

filter_data()

function filter_data(){
    $('.row-mail').html('<div id="loading" style="" ></div>');
        let ket = $('#sort-ket').val();
        let kat1 = $('#kat1-mail').val();
        let kat2 = $('#kat2-mail').val();
        let bulan = $('#bulan-sort').val();
        let tahun = $('#tahun-sort').val();
        let sort = $('#sort-mail').val();
        let cari = $('#cari').val();
        $.ajax({
            url:"<?php echo base_url(); ?>home/filter",
            type:"post",
            data:
            {
                ket : ket,
                kat1 : kat1,
                kat2 : kat2,
                cari : cari,
                bulan : bulan,
                tahun : tahun,
                sort : sort,
            },
            success:function(data){
                $('.row-mail').html(data)
            },
            error:function(xhr, ajaxOptions, thrownError){
                alert(xhr.status+ "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
}

/*
function pdf(){
    let ket = $('#sort-ket').val();
    let kat1 = $('#kat1-mail').val()
    let kat2 = $('#kat2-mail').val()
    let bulan = $('#bulan-sort').val()
    let tahun = $('#tahun-sort').val()
    let sort = $('#sort-mail').val()
    $.ajax({
            url:"<?php echo base_url(); ?>home/pdf_view",
            type:"post",
            data:
            {
                ket : ket,
                kat1 : kat1,
                kat2 : kat2,
                cari : cari,
                bulan : bulan,
                tahun : tahun,
                sort : sort,
            },
            error:function(xhr, ajaxOptions, thrownError){
                alert(xhr.status+ "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
//console.log([ket,kat1,kat2,bulan,tahun,sort,cari])
}*/
    $(".filter").on('change',function(){
        let ket = $('#sort-ket').val();
        let kat1 = $('#kat1-mail').val()
        let kat2 = $('#kat2-mail').val()
        let bulan = $('#bulan-sort').val()
        let tahun = $('#tahun-sort').val()
        let sort = $('#sort-mail').val()
        
        filter_data()
    });

    $('#cari').keyup(function(){
        let cari = $('#cari').val();
        
        filter_data()
    });
    


</script>

<?= $this->endSection()?>
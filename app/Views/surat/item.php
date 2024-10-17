
	<?php if(count($surats) > 0){
			foreach($surats as $row){ ?>	
                
				<div class="card mt-3 align-item-center mr-auto ml-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto"> 
                            <img class="rounded" src="<?=base_url()?>dist/img/dokumen.jpg" alt="User Image" width="100" height="120">
                        </div>
                        <div class="col">
                            <h4><?= $row['surat']?></h4>
                            <p class="text-muted"><i class="fas fa-tag"></i>&nbsp; <?=$row['kat1']?>&nbsp;,&nbsp;<?=$row['kat2']?> &nbsp; &nbsp;</p>
                            <p class="text-muted"><i class="fas fa-calendar-day"></i> &nbsp;<?=$row['tgl_surat']?></p>
                            <p class="text-muted"><?=$row['ket']?></p>
                            <div class="xx clearfix">
                                <a class="btn btn-info float-right mr-2" href="<?= base_url('home/detail/'.$row['id_surat']) ?>"><i class="fas fa-eye"></i>&nbsp; Lihat</a> 
                                <a class="btn btn-success float-right mr-2" href="<?= base_url('uploads/').$row['file'].'.pdf'?>" target="_blank"><i class="fas fa-download"></i>&nbsp; Unduh</a>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
		<?php } //echo $pager_links;
		}else{ ?>
			<h5 class="mx-auto">Data Tidak Ditemukan</h5>
		<?php  } ?>
<?php 
foreach($bulan as $value) { 
    $x = $value['bulan'];
    if($x<10){
        echo '0'.$x.'<br>';
    }else{
        echo $x.'<br>';
    }
    } ?>
                    
<?php 

$sm = [];
foreach($g_masuk as $k){
    array_push($sm, $k['total']);
} 

$sk = [];
foreach($g_keluar as $k){
    array_push($sk, $k['total']);
}

$sm = array_map('intval', $sm);
$sk = array_map('intval', $sk);

$arr = [1,2,3,4,5,6,7];
print_r($sk);
var_dump($arr);
var_dump($sk);
var_dump($sm);
 ?>
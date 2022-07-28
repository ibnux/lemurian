<?php

$json = json_decode(file_get_contents("lemurian.json"),true);
$hasil = "";
foreach($json as $k=>$v){
    $hasil .= '<span class="tag is-link is-medium m-1" class="js-modal-trigger" data-target="modal-js-lemurian" title="'.$v.'" onclick="showPopUp(\''.$k.'\',\''.$v.'\')">'.$k.'</span>';
}
file_put_contents("hasil.txt",$hasil);
<?php

$arry = ['taro', 'hanako', 'jiro'];
$arry[1] = 'sachiko';
$arry[] = 'saburo';
// print_r($arry);
// echo $arry[1];
// var_dump($arry);
for($i = 0; $i < count($arry); $i++){
  echo '<div>',$arry[$i], '</div>';
}
foreach($arry as $i => $v){
  echo '<div>', $i, $v, '</div>';
}

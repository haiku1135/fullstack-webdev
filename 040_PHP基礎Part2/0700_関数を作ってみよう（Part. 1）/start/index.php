<?php

$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];




function sum($numbers){
  $sum = 0;
  foreach($numbers as $num){
    $sum = $sum + $num;
  }
  
  return $sum;
}

$result = sum($numbers2);
echo "合計:{$result}";
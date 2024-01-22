<?php

$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($nums){
  $sum = 0;
  foreach($nums as $num){
    $sum += $num;
  }
  return $sum;
}

$result = sum($numbers);
echo $result;
sum($numbers);
sum($numbers2);
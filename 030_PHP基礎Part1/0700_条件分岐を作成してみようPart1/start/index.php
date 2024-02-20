<?php
$score = 50;
$kesseki = 4;

if($score >= 70 && $kesseki < 5){
  echo '秀';
} elseif($score >= 50 && $kesseki < 5) {
  echo '合格';
} else {
  echo '不合格';
}
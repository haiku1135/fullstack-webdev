<?php
$score = 60;
$kesseki = 6;
if($score < 50 || $kesseki >= 5){
  echo '不合格';
} 
elseif (50 <= $score && $score < 70) {
  echo '合格';
}
else {
  echo '秀';
}
<?php
$a = 1;
function fn1(){
  global $a;
  $b = 1;
  echo $a;
}
fn1();
<?php
require 'lib.php';
use function lib\with_tax;
use const lib\sub\TAX_RATE;
$price = with_tax(1000, 0.08);

// echo TAX_RATE;
echo $price;

function my_echo(){

}

my_echo();

class GlobalCls {

}
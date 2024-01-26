<?php

class Human
{
  public $name = '';
  protected $weight = 0;

  public function __construct($name, $weight)
  {
    $this->name = $name;
    $this->weight = $weight;
  }

  public function eat(){
    $this->weight += 1;
  }

  public function run(){
    $this->weight -= 1;
  }
}


// print $tanaka->name. 'さんの体重は' . $tanaka->weight . 'kgです。' . PHP_EOL;

// class Product
// {
//   public $product_name = '';
//   public $price = 0;
//   public static $tax = 0.08;

//   public function __construct($product_name, $price){
//     $this->product_name = $product_name;
//     $this->price = $price;
//   }

//   public function show(){
//     $price = $this->price + $this->price * self::$tax;
//     print $this->product_name . 'は税込' . $price . '円です。';
//   }

//   public static function show_tax(){
//     print '消費税は' . self::$tax * 100 . '％です';
//   }
// }

// $pencil = new Product('鉛筆', 80);
// $apple = new Product('りんご', 100);

// $pencil->show();
// $apple->show();


// Product::show_tax();
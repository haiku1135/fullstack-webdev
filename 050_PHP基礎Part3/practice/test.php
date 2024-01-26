<?php

class Car
{
  public $model;
  public $speed;
  public $distance = 0;

  public function __construct($model, $speed)
  {
    $this->model = $model;
    $this->speed = $speed;
  }

 public function run($hour)
 {
    $this->distance = $hour * $this->speed;
 } 
}

$models = ["ベンツ", "ポルシェ", "レクサス", "プリウス"];

$model = $models[rand(0, 3)];
$speed = rand(70, 120);
$hour = rand(1, 5);

$car = new Car($model, $speed);

$car->run($hour);

echo $car->model . 'は時速' . $car->speed . 'km/hで' . $hour . '時間走行し' . $car->distance . 'km移動しました。';
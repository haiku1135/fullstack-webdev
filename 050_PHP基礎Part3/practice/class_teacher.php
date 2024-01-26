<?php

require_once 'index.php';

class Teacher extends Human
{
  private $money;

  public function __construct($name, $weight, $money)
  {
    parent::__construct($name, $weight);
    $this->money = $money;
  }

  public function work(){
    $this->weight -= 1;
    $this->money += 1;
  }

  public function eat(){
    $this->weight += 1;
    $this-> money -= 1;
  }

  public function get_weight(){
    return $this->weight;
  }
}


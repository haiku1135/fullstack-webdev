<?php

require_once 'index.php';

class Student extends Human
{
  private $score;

  public function __construct($name, $weight, $score)
  {
    parent::__construct($name, $weight);
    $this->score = $score;
  }

  public function study(){
    $this->score += 1;
    $this->weight -= 1;
  }

  public function examine(){
    return $this->score;
  }
}

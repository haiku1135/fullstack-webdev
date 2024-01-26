<?php
// class Person{
//   private $name;
//   private $age;

//   function __construct($name, $age)
//   {
//     $this->name = $name;
//     $this->age = $age;
//   }
  
//   function displayInfo(){
//     echo '名前:'. $this->name .'年齢:' . $this->age;
//   }
// }

// $john = new Person('John', 25);
// $john->displayInfo();
// class Car{
//   private $brand;
//   private $model;
//   private $price;

//   function __construct($brand, $model, $price)
//   {
//     $this->brand = $brand;
//     $this->model = $model;
//     $this->price = $price;
//   }

//   function displayInfo(){
//     echo 'ブランド:' . $this->brand . '車種:'. $this->model . '価格:' . $this->price . '円';
//   }
// }

// $car1 = new Car('Toyota', 'Camry', 25000);
// $car1->displayInfo();

// $car2 = new Car('Honda', 'Cavic', 20000);
// $car2->displayInfo();

class User{
  public $name;
  public $hp;
  public $attack;
  public $defense;
  public $role;

  // function __construct($name, $hp, $attack, $defense, $role)
  // {
  //   $this->name = $name;
  //   $this->hp = $hp;
  //   $this->attack = $attack;
  //   $this->defense = $defense;
  //   $this->role = $role;
  // }

  function displayStatus(){
    echo '名前:'. $this->name. '<br>' . '体力:' . $this->hp . '<br>' . '攻撃力:' . $this->attack . '<br>' . '防御力:' . $this->defense . '<br>' .'役職:' . $this->role . '<br>';
  }
}

class Hero extends User{
  public $equipment;

  // function __construct($equipment)
  // {
  //   $this->equipment = $equipment;
  // }

  function displayEquipment(){
    echo $this->name . 'の装備は' . $this->equipment . 'です。<br>';
  }

  function attack(){
    echo $this->name . 'の攻撃<br>';
  }
}


class Enemy extends User{
  public $magic;

  // function __construct($magic)
  // {
  //   $this->magic = $magic;
  // }

  function displayMagicType(){
    echo $this->name . 'は' .$this->magic . '魔法使いです。';
  }
}

$hero = new Hero();
$hero->name = 'ヒーロー';
$hero->hp = 100;
$hero->attack = 30;
$hero->equipment =  '勇者の剣';
$hero->displayStatus();
$hero->displayEquipment();
$hero->attack();

$enemy = new Enemy();
$enemy->name = "魔術師";
$enemy->hp = 100;
$enemy->attack = 30;
$enemy->magic = "炎";
$enemy->displayStatus();
$enemy->displayMagicType();
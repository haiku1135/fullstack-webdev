<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;

    // static public $whereTolive = 'Earth';
    public const whereTolive = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        echo static::whereTolive;
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

$bob = new Person('Bob', 18);
// $bob->hello()->bye();
$bob->hello();
// Person::bye();
// echo Person::$whereTolive;
// $tim = new Person('Tim', 32);
// $tim->hello();
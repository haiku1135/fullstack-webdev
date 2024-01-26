<?php

// require_once 'class_teacher.php';

// $teacher = new Teacher('yamada', 76, 100);

// echo '先生の体重は' . $teacher->get_weight() . 'kgです。' . PHP_EOL;

require_once 'class_student.php';

$tanaka = new Student('tanaka', 60, 100);
$tanaka->study();
$tanaka->study();
$tanaka->study();
$tanaka->study();
$tanaka->study();

echo $tanaka->name . 'さんの成績は' . $tanaka->examine() . '点です。' . PHP_EOL;

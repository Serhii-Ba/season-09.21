<?php

//include 'burmistrov/lesson19/user.php'; //windows: burmistrov\lesson19\user.php
//include 'burmistrov/lesson19/man.php';
//include 'burmistrov/lesson19/woman.php';

spl_autoload_register(function($v){

    echo 'try to load class name — ' . $v . "\n";
    $v = str_replace('\\', '/', $v);

    include 'libs/' . $v . '.php';
});

use Burmistrov\Lesson19\Man;
use Burmistrov\Lesson19\Woman;

$alex = new Man('Alex', 19);
$olga = new Woman('Olga', 19);

echo 'Alex: ' . $alex->name . "\n";
echo 'Olga: ' . $olga->name . "\n";

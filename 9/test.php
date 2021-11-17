<?php

echo 'Hello from, test.php';

echo "<pre>";
var_dump($_GET);

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

echo 'A=' . $a;
# http://localhost:8080/test.php?a=10&b=20&c=30&z=99&s=Alex

<?php

//$s = 'hello world, my name is alex, i am 10';
//echo base64_encode($s) . "\n";

//$encodedS = 'aGVsbG8gd29ybGQsIG15IG5hbWUgaXMgYWxleCwgaSBhbSAxMA==';
//echo base64_decode($encodedS) . "\n";

//$encodedS = '4pyTIMOgIGxhIG1vZGU=';
//echo base64_decode($encodedS) . "\n";

// JSON — Javascript object Notation
/**
 *
 * user = {
 *     name: 'Alex',
 *     age: 10
 * }
 *
 * $user = [
 *     'name' => 'Alex',
 *     'age' => 10
 * ]
 *
 */

$user = [
    'name' => 'Alex',
    'age' => 10
];

/**
 * {
 *    "name":"Alex",
 *    "age":10
 * }
 */
//echo json_encode($user) . "\n";

$s = '{"name":"Alex","age":10}';
var_dump(json_decode($s, true)) . "\n";

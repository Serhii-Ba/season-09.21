<?php

$users = [
    ['name' => 'Alex', 'age' => 10],
    ['name' => 'Ivan', 'age' => 11],
    ['name' => 'John', 'age' => 12],
    ['name' => 'Mike', 'age' => 13],
];
$users[] = ['name' => 'Angle', 'age' => 15];
$users[] = ['name' => 'Angle', 'age' => 15];
$users[] = ['name' => 'Angle', 'age' => 15];
$users[] = ['name' => 'Angle', 'age' => 15];
$users[] = ['name' => 'Angle', 'age' => 15];

$users[99] = ['name' => 'Nike', 'age' => 14];

$users[] = ['name' => 'Angle', 'age' => 15];
$users[] = ['name' => 'Angle', 'age' => 15];

$users[100] = 0;

foreach ($users[99] as $key => $value) {
    echo $key . ":" . $value ."\n";
}

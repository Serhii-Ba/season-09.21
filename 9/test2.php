<?php

$users = [
    ['name' => 'Alexander', 'age' => 10, 'sex' => 'm'],
    ['name' => 'Ivanov', 'age' => 11, 'sex' => 'f'],
    ['name' => 'John Doe', 'age' => 12],
    ['name' => 'Mike', 'age' => 13, 'sex' => 'm'],
];

if (array_key_exists('sex', $users[2])) {

    echo 'OK';

}

if (isset($users[2]['sex'])) {

    echo 'OK';

}

$a = '';
if (empty($a)) {
    echo 'a is empty';
}

if (strlen($a) == 0) {
    echo 'a is empty';
}

$a = [];
if (count($a) == 0) {
    echo 'a is empty';
}



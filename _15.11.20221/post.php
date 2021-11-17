<?php

function readFile($filename) {
    $s = file_get_contents($filename);

    $lines = explode($s, "\n");
    $users = [];
    foreach ($lines as $v) {
        $users[] = explode(';', $v);
    }

    return $users;
}

if (count($_POST) > 0) {

    $name = $_POST['name'];
    $age = $_POST['age'];

    $users[] = [$name, $age];

    $lines = [];
    foreach ($users as $user) {
        $lines[] = implode(';', $user);
    }

    $s = implode("\n", $lines);
    file_put_contents('users.txt', $s);
}


///

<?php

function getUsersFromFile()
{
    static $users = null;

    if (is_null($users)) {

        echo 'DEBUG!!!!! READ FROM FILE ' . "\n";

        $s = file_get_contents('users.txt');
        $users = explode("\n", $s);

        foreach ($users as $i => $user) {
            $users[$i] = explode(';', $user);
        }
    }

    return $users;
}

$list1 = getUsersFromFile();
$list2 = getUsersFromFile();
$list3 = getUsersFromFile();
$list3 = getUsersFromFile();
$list3 = getUsersFromFile();
$list3 = getUsersFromFile();
$list3 = getUsersFromFile();

echo 'Elements: ' . count($list1);

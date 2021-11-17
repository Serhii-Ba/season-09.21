<?php

$users = [
    ['name' => 'Alexander', 'age' => 10, 'sex' => 'm'],
    ['name' => 'Ivanov', 'age' => 16, 'sex' => 'f'],
    ['name' => 'John Doe', 'age' => 12],
    ['name' => 'Mike', 'age' => 18, 'sex' => 'm'],
    ['name' => 'Burmistrov Alexander', 'age' => 13, 'sex' => 'm'],
];

$maxLength = 0;
foreach ($users as $user) {
    if (strlen($user['name']) > $maxLength) {
        $maxLength = strlen($user['name']);
    }
}

echo 'Max Length: ' . $maxLength . "\n";

echo '---------------------------' . "\n";
echo '| Name           | Age    |' . "\n";


foreach ($users as $i => $user) {
    if ($i == 0) {
        echo '=========================' . "\n";
    }

    if ($user['age'] >= 18) {
        $adult = '+';
    } else {
        $adult = '-';
    }

    if ($user['age'] > 14) {
        echo sprintf("N: %d | %s | %d | %s \n", $i, $user['name'], $user['age'], $adult);
    }


}

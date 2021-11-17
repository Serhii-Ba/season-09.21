<?php

$user = 'Alex';
echo 'Hello from <strong>' . 'Web Basic course!'  . '</strong>';
echo '<br/>';
echo 'My name is ' . $user;

// cli - Command Line Interface
// web-server

$users = [1 ,2 , 3, 4,112312, 12312];

echo '<table border="1">';
foreach ($users as $v) {
    echo '<tr>';
    echo '<td>name ' . $v . '</td>';
    echo '<td>age ' . $v . '</td>';
    echo '<td>sex ' . $v . '</td>';
    echo '</tr>';
}
echo '</table>';

<?php

$content = file_get_contents('users.txt');
$users = explode("\n", $content);

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$users[] = $name . ';' . $age . ';' . $email;


file_put_contents('users.txt', implode("\n", $users));

echo 'OK!';

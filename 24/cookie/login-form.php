<?php

$login = $_POST['login'];
$passw = $_POST['passw'];

if ($login == 'root' && $passw == '123123') {
    //
    setcookie('logged', true);
    setcookie('user_id', $login);
} else {
    setcookie('logged', false);
}


<?php

session_start();

$a = 65;
$_SESSION['test_var'] = $a;

echo 'Hello from session. a = ' . $a;

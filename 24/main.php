<?php

$a = rand(1, 100);

setcookie("cookie_var_a", $a);

echo 'Hello world! a = ' . $a;

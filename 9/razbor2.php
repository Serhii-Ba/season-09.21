<?php

$a = 'Alexander';
echo $a . ' = ' . mb_strlen($a) . "\n";
echo $a . ' = ' . strlen($a) . "\n";

var_dump(str_pad($a, 20, ' '));

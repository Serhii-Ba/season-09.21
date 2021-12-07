<?php

$a = 'Hello';
$b = "Hello";

$cmd = 'ls';
//exec($cmd, $output);
//echo 'here is output: ' . implode("\n", $output);

//$result = shell_exec($cmd);
//echo 'here is result: ' . $result;

$s = `ls`;
echo 'here is s: ' . $s;

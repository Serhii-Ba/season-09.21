<?php

$files = glob('*.txt');
foreach ($files as $i => $file) {
    echo sprintf('<a href="read.php?file=%s">%s</a><br />', $file, $i);
}

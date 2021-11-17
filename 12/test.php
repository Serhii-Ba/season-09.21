<?php

$files = glob('*.txt');


/**
 * new comment
 */

foreach ($files as $v) {
    echo '<a href="">' . $v . '</a><br />';
}

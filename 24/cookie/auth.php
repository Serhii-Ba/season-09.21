<?php

if ($_COOKIE['logged'] == true) {
    return true;
}

echo 'pls, authorize';
exit();

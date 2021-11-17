<?php

//if (array_key_exists('filename', $_GET)
//    && array_key_exists('name', $_GET['filename'])
//    && array_key_exists('size', $_GET['filename']['name'])
//) {
//
//}
//
//if (isset($_GET['filename']['name']['size']['...'])) {

if (isset($_GET['filename'])) {


    $filename = $_GET['filename'];

    $s = file_get_contents($filename);

    $a = explode("\n", $s);

    $users = [];
    foreach ($a as $v) {
        if (strlen($v) > 0) {
            $user = explode(';', $v);
            $users[] = $user;
        }
    }

    echo '<table border="1">';
    foreach ($users as $v) {
        echo '<tr>';

        if (isset($v[0])) {
            echo '<td>' . $v[0] . '</td>';
        } else {
            echo '<td>n/a</td>';
        }

        if (isset($v[1])) {
            echo '<td>' . $v[1] . '</td>';
        } else {
            echo '<td>n/a</td>';
        }

        if (isset($v[2])) {
            echo '<td>' . $v[2] . '</td>';
        } else {
            echo '<td>n/a</td>';
        }

        echo '</tr>';
    }
    echo '</table>';
}

echo '<a href="/start.html">Back to start.html</a>';

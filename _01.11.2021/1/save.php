<?php

//http://localhost:9090/form.html
//проверка поста на наличие информации
if (count($_POST) > 0) {
    //наполняем текстовый файл, а не перезаписываем его
    $content = file_get_contents('test.txt');

    $users = explode("\n", $content);

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];

    $users[] = $name . ' ; ' . $age . ' ; ' . $email . ' ; ' . $sex;

    file_put_contents('test.txt', implode("\n", $users));

    //header('Location: show.php?filename=test.txt')
    include "redirect.html.php";
} else {
    include "save.html.php";
}



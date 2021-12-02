<?php

$dsn = 'mysql:host=localhost;dbname=season0921';
$user = 'root';
$pass = '123123';

$connection = new PDO($dsn, $user, $pass);

$sql = 'SELECT * FROM user';

$stm = $connection->prepare($sql);
$stm->execute();

$list = $stm->fetchAll(PDO::FETCH_ASSOC);


for ($i = 0; $i < count($list); $i++) {


    // получаем id текущего юзера
    $userId = $list[$i]['id'];

    // выполняем безопасный запрос на поиск паспорта для этого юзера
    $sql = "SELECT * FROM passport WHERE user_id = :id";
    $stm = $connection->prepare($sql);
    $stm->bindValue(':id', $userId);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);

    // добавляем юзеру информацию про паспорт
    $list[$i]['passport'] = $result;
}

// выводим всех юзеров
echo '<pre>';
var_dump($list);


echo 'OK';


<?php

$dsn = 'mysql:host=localhost;dbname=season0921';
$user = 'root';
$pass = '123123';

$connection = new PDO($dsn, $user, $pass);
//$connection->exec('DELETE FROM user WHERE id = 29');
//$connection->query('DELETE FROM user WHERE id = 28');
//$connection->errorInfo();

/* var PDOStatement */
//$stm = $connection->query('SELECT name, age FROM user');
//$stm->execute();
//$list = $stm->fetch(PDO::FETCH_ASSOC);
//

$sql = 'DELETE FROM user WHERE id = :value and age = :age';

$stm = $connection->prepare($sql);
$stm->bindValue(':value', $_GET['id']);
$stm->bindValue(':age', $_GET['age']);
$stm->execute();

$list = $stm->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($list);


echo 'OK';

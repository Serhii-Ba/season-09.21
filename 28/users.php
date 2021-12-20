<?php

$dsn = 'mysql:host=localhost;dbname=season0921';
$user = 'root';
$pass = '123123';

$connection = new PDO($dsn, $user, $pass);
$stm = $connection->prepare('SELECT * FROM user LIMIT :offset, :limit');
$stm->bindValue(':offset', $_GET['page'] * 3, PDO::PARAM_INT);
$stm->bindValue(':limit', 3, PDO::PARAM_INT);
$stm->execute();

$list = $stm->fetchAll(PDO::FETCH_ASSOC);

include 'users.html.php';



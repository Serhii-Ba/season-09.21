<?php

// 0-Day
// CSRF — Cross site request forgery
// DDOS — Denial-of-service attack

// XSS — Cross Site Scripting
// $s = htmlspecialchars('<b>Ой, какой милый котик.</b>');
// echo $s;

// SQL Injection
$dsn = 'mysql:host=localhost;dbname=season0921';
$user = 'root';
$pass = '123123';

// "%20OR%201=1--%20
// " OR 1=1 --
// "; DROP DATABASE season0921; --

//$sql = 'SELECT * FROM user WHERE name = "' . $_GET['name'] . '" LIMIT 1';
//$sql = 'SELECT * FROM user WHERE name = "" OR 1=1 --" LIMIT 1';
$sql = 'SELECT * FROM user WHERE name = :name LIMIT 1';
echo $sql . "<br />";

$connection = new PDO($dsn, $user, $pass);
$stm = $connection->prepare($sql);
$stm->bindValue(':name', $_GET['name']);
$stm->execute();
$list = $stm->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($list);


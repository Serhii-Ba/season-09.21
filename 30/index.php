<?php

//md5
$s = 'Hello world';
echo md5($s) . "\n";

echo sha1($s) . "\n";
//3e25960a79dbc69b674cd4ec67a72c62 -- DB
//3e25960a79dbc69b674cd4ec67a72c62 -- FORM PASSWORD
//5eb63bbbe01eeed093cb22bb8f5acdc3

//SELECT * FROM user
//WHERE md5('Hello world') = password;

//SELECT * FROM user WHERE login = 'admin'
if ($user->password == md5($_POST['password'])) {


}

<?php

class Product {
    public $title;
}

class User {

    public $name;

    public $product;
}

class Builder {

    public static function createUser($v)
    {
        $user = new User();
        $user->name = $v;
        $user->product = new Product();
        $user->product->title = 'New product';

        return $user;
    }
}

//$alex = Builder::createUser('Alex');
//
//echo 'Hi, ' . $alex->name;

echo 'Hi, 2: ' . Builder::createUser('Alex')->product->title;


<?php

abstract class User  {

    public $name;

    public function __construct($v)
    {
        $this->name = $v;
    }

    abstract public function getSex();
}

class Man extends User {

    public function getSex()
    {
        return 'male';
    }
}

class Woman extends User {

    public function getSex()
    {
        return 'female';
    }
}

$user1 = new Man('Alex');
$user2 = new Woman('Maria');


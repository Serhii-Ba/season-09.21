<?php

class User {

    public $name;

    public $age;

    protected $sex;

    private $example = 'dfvhkasdgfuyg34fe';

    // setter
    public function setName($v) {
        $this->name = $v;
    }

    // getter
    public function getName()
    {
        return $this->name;
    }

    public function setSex($v) {
        $this->sex = $v;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getExample()
    {
        return $this->example;
    }

}

class Man extends User {

    protected $sex = 'man';

}

class Woman extends User {

    protected $sex = 'woman';
}

//$user = new User();
//$user->name = 'user example name';
//$user->age = 99;
//$user->sex = '/male';
//
//echo 'name: ' . $user->name . ', age: ' . $user->age . ', sex: ' . $user->sex . "\n";

$alex = new Man();
$alex->name = 'Alex';
$alex->age = 10;

$alex->setSex('female');
echo 'alex->getSex(): ' . $alex->getSex() . ', example: ' . $alex->getExample() . "\n";

$ivan = new Man();
$ivan->name = 'Ivan';
$ivan->age = 20;
echo 'ivan->getSex(): ' . $ivan->getSex() . "\n";

$maria = new Woman();
$maria->name = 'Maria';
$maria->age = 11;
echo 'maria->getSex(): ' . $maria->getSex() . "\n";

//echo 'name: ' . $alex->name . ', age: ' . $alex->age . "\n";
//echo 'name: ' . $maria->name . ', age: ' . $maria->age . "\n";

//var_dump($alex, $maria);

<?php

class User {

    protected $name;

    protected $age;

    protected $sex;

    public function __construct($name, $age = 0, $sex = 'unknown')
    {
        echo '__construct' . "\n";
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __destruct()
    {
        echo '__destruct' . "\n";
    }

    public function __toString()
    {
        return '__toString: ' . $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSex()
    {
        return $this->sex;
    }
}



$user1 = new User('Alex', 10, 'Male');

echo 'Name1: ' . $user1->getName() . ', Age: ' . $user1->getAge() . ', Sex: ' . $user1->getSex() . "\n";

echo 'Name2: ' . $user1 . "\n";

echo 'DONE.';

<?php

trait Animal {

    public $type;

}

trait Nameble {

    public function __toString()
    {
        return $this->name;
    }
}

class User {


    public $name;

    public $age;

}


class Man extends User {

    use Animal;

    use Nameble;

    public $sex = 'male';
}

class Woman extends User {

    use Nameble;

    public $sex = 'female';
}

//$a = new Human();
//$a = new Animal();

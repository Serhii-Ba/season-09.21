<?php

class User {

    public $name;

}

class Builder {

    public static $counter = 0;

    public static function createUser($name, $age, $sex)
    {
        $a = new User();
        $a->name = $name;
        $a->age = $age;
        $a->sex = $sex;

        Builder::$counter++;

        return $a;
    }

}

$users = [];
$users[] = Builder::createUser('Alex', 10, 'male');
$users[] = Builder::createUser('Ivan', 10, 'male');
$users[] = Builder::createUser('Mike', 10, 'male');

//$user1 = new User();
//$user1->name = "Alex";
//$user1->age = "Alex";
//$user1->sex = "Alex";


//echo "<pre>";
//var_dump($user1, $user2, $user3);
echo 'Users: ' . Builder::$counter;

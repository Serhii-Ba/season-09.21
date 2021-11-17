<?php

class User {

    public $name;

    public $age;

    public function plus($a, $b)
    {
        static $c = 0;

        $c = $c + ($a + $b);

        return $c;
    }
}

class UserList {

    protected static $data = [];

    public static function addUserToData($user) {
        UserList::$data[] = $user;
    }

    public static function getData()
    {
        return UserList::$data;
    }
}

$alex = new User();
$alex->name = 'Alex';
$alex->age = 10;

$ivan = new User();
$ivan->name = 'Ivan';
$ivan->age = 10;

$maria = new User();
$maria->name = 'Maria';
$maria->age = 10;

$olga = new User();
$olga->name = 'Olga';
$olga->age = 10;
$olga->sex = 'female';


echo "<pre>";
//var_dump($alex, $ivan, $maria, $olga);





//
//
$men = new UserList();
$men::addUserToData($alex);
//$women = new UserList();
//$object3 = new UserList();
//

//UserList::$data[] = $alex;
//UserList::$data[] = $olga;

UserList::addUserToData($alex);
UserList::addUserToData($olga);
UserList::addUserToData($olga);
UserList::addUserToData($olga);
UserList::addUserToData($olga);
UserList::addUserToData($olga);
UserList::addUserToData($olga);
UserList::addUserToData($olga);

echo 'UserList count: ' . count(UserList::getData()) . "\n";

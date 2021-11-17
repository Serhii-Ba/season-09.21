<?php

class Users {

    public $list = [];
}

class User {

    public $name;

    public $age;

    public $sex;
}

//$array1 = ['name' => 'Alex', 'age' => 10, 'sex' => 'male'];

$user1 = new User();
$user1->name = 'Alex';

$user2 = new User();
$user2->name = 'Mike';
$user2->age = 11;
$user2->sex = 'male';

$user3 = new User();
$user3->name = 'Julia';
$user3->age = 12;
$user3->sex = 'female';

$users = new Users();
$users->list = [$user1, $user2, $user3];

//echo '1: name: ' .  $users->list[1]->name . ', age: ' . $users->list[1]->name . "<br />";
//echo '2: name: ' .  $users->list[2]->name . ', age: ' . $users->list[2]->name . "<br />";


foreach ($users->list as $i => $item) {
    echo $i . '. name: ' . $item->name . "\n<br />";
}





//echo 'name: ' . $user1->name . ', age: ' . $user1->age . ', sex: ' . $user1->sex . "\n";
//echo 'name: ' . $user2->name . ', age: ' . $user2->age . ', sex: ' . $user2->sex . "\n";
//echo 'name: ' . $user3->name . ', age: ' . $user3->age . ', sex: ' . $user3->sex . "\n";

//$users = [$user1, $user2, $user3];
//$sum = 0;
//foreach ($users as $item) {
//    echo 'name: ' . $item->name . ', age: ' . $item->age . ', sex: ' . $item->sex . "<br />\n";
//    $sum += $item->age;
//}
//
//echo 'Sum: ' . $sum;
//echo "<pre>";
//var_dump($user1, $users);

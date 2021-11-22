<?php

namespace Burmistrov\Lesson19;

abstract class User {

    public $name;

    public $age;

    public function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

}

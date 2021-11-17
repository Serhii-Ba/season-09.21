<?php


abstract class Figure {

    protected $size;

    abstract public function getSquare();

    public function setSize($v)
    {
        $this->size = $v;
    }
}

class Rect extends Figure {

    public function getSquare()
    {
        // math for getting square of rect
    }
}

class Cicle extends Figure {

    public function getSquare()
    {
        // math for getting square of cicle
    }
}

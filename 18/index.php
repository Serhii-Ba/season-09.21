<?php

interface Sizable {

    public function getSize();

    public function setSize($v);

}







interface FigureInterface {

    public function __construct();

    public function getSquare();

}

abstract class Figure implements FigureInterface, Sizable {

    protected $size;

    abstract public function getSquare();

    public function __construct()
    {
    }

    public function setSize($v)
    {
        $this->size = $v;
    }

    public function getSize()
    {
        return $this->size;
    }
}

class Rect extends Figure {


    public function getSquare()
    {

    }

}

class Cicle extends Figure {

    public function getSquare()
    {

    }
}


<?php

namespace Geometry;

class Point{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(){
        return "x : $this->x \ny : $this->y";
    }
}

class Vector{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function length(){
        return sqrt($this->x * $this->x +  $this->y * $this->y);
    }

    public function is_zero(){
        return $this->x == 0 && $this->y == 0;
    }

    public function is_perpendicular(Vector $vect){
        return ($vect->x * $this->x + $vect->y * $this->y) == 0;
    }
}


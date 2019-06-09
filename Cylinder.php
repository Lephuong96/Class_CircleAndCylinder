<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }

    public function __toString()
    {
        return "Radius is: " . $this->getRadius() . ", Color is: " . $this->getColor() . ", Volume is: " . $this->calculateVolume();
    }

}
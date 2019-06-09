<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }


    public function __toString()
    {
        return "Radius is: " . $this->getRadius() . ", Color is: " . $this->getColor() . ", Area is: " . $this->calculateArea() .", Perimeter is: " . $this->calculatePerimeter();
    }
}
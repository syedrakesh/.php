<?php
class Rectangle
{
    public function rectangleArea($height, $width)
    {
        return $area = $height * $width;
    }
}
class Circle
{
    public function circleArea($r)
    {
        return $area = 2 * pi() * $r;
    }
}
$rectangle = new Rectangle();
$circle = new Circle();
echo $rectangle->rectangleArea(6, 5);
echo $circle->circleArea(6);

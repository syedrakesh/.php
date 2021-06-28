<?php
interface Vehicle
{
    function mileage();
    function topSpeed();
}
interface TwoWheelers
{
    function hasTwoWheel();
}
interface FourWheelers
{
    function hasFourWheel();
}
class MotorCycle implements Vehicle, TwoWheelers
{
    function mileage()
    {
        echo 'MotorCycle Mileage: 42.';
    }
    function topSpeed()
    {
        echo 'MotorCycle Top Speed: 120.';
    }
    function hasTwoWheel()
    {
        echo 'MotorCycle has Two Wheel.';
    }
}
class Truck implements Vehicle, FourWheelers
{
    function mileage()
    {
        echo 'Truck Mileage: 42.';
    }
    function topSpeed()
    {
        echo 'Truck Top Speed: 120.';
    }
    function hasFourWheel()
    {
        echo 'Truck has Four Wheel.';
    }
}
$motorcycle = new MotorCycle();
$truck = new Truck();

$motorcycle->mileage();

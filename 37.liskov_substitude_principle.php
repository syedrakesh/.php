<?php
abstract class Bird
{
    abstract function eat();
    abstract function sleep();
}
abstract class FlyingBird extends Bird
{
    abstract function fly();
}
abstract class WalkingBird extends Bird
{
    abstract function walk();
}
class BirdManager
{
    function maintain(Bird $b)
    {
        $b->eat();
        $b->sleep();
    }
    function moveFlyingBird(FlyingBird $fb)
    {
        $fb->fly();
    }
    function moveWalkingBird(WalkingBird $wb)
    {
        $wb->walk();
    }
}
class Eagle extends FlyingBird
{
    function eat()
    {
        echo 'Eagle will eat.';
    }
    function sleep()
    {
        echo 'Eagle will sleep.';
    }
    function fly()
    {
        echo 'Eagle will fly.';
    }
}
class Penguine extends WalkingBird
{
    function eat()
    {
        echo 'Penguine will eat.';
    }
    function sleep()
    {
        echo 'Penguine will sleep.';
    }
    function walk()
    {
        echo 'Penguine will walk.';
    }
}
$birdManager = new BirdManager();
$eagle = new Eagle();
$penguine = new Penguine();

$birdManager->maintain($eagle);
$birdManager->moveFlyingBird($eagle);

$birdManager->maintain($penguine);
$birdManager->moveWalkingBird($penguine);

<?php

/* 
 * OOP development in PHP
 * http://www.phpro.org/tutorials/Object-Oriented-Programming-with-PHP.html#11.1
 * author: Tu Nguyen
 */
class vehicle{
    public $color;
    public $num_doors;
    public $price;
    public $shape;
    public $brand;
    
    /* the constructor */
    public function __construct(){
        echo 'constructor';
    }
    public function showPrice(){
        echo 'Price:'.$this->price.'<br />';
    }
    public function numDoors(){
        echo 'Number of doors:'.$this->num_doors.'<br/>';
    }
    public function drive(){
        echo 'Drive now!';
    }
    
}
//run object
$vehicle = new vehicle;
$vehicle->brand = 'Porsche';
$vehicle->shape = 'Circle';
$vehicle->color = 'Red';
$vehicle->num_doors = 2;
$vehicle->price = 10000;

//show the result
$vehicle->showPrice();
$vehicle->numDoors();
//Go
$vehicle->drive();





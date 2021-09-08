<?php

use App\Classes\Rectangle;
use App\Classes\Circle;

require_once __DIR__ . '/Classes/Rectangle.php';
require_once __DIR__ . '/Classes/Circle.php';

$rectangle = new \Rectangle( 20.0, 30.0);
$rectangle->setName('Rectangle');
echo "A area do {$rectangle->name} é {$rectangle->calculateArea()} \n" ;
echo "Detalhes do objecto \n";
print_r($rectangle->showProperties());

echo "\n \n ";

$circle = new \Circle(3.0);
$circle->setName('Circle');
echo "A area do {$circle->name} é {$circle->calculateArea()} \n" ;
echo "Detalhes do objecto \n";
print_r($circle->showProperties());

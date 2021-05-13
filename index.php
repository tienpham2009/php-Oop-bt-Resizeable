<?php
include "./vendor/autoload.php";
use Shape\Circles;
use Shape\Rectangles;
use Shape\Squares;


$circle = new Circles("Circle One",3);
echo $circle->calculatorArea();
echo "<br>";
echo $circle->resize(50);
echo "<br>";
$rectangle = new Rectangles(4,5,);
echo $rectangle->resize(50);
echo "<br>";
$square = new Squares(4);
echo $square->calculatorArea();
echo "<br>";
echo $square->resize(50);

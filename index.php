<?php
include "./vendor/autoload.php";
use Shape\Circles;
use Shape\Rectangles;
use Shape\Squares;


$circle = new Circles("CircleOne" , 5);
$rectangle = new Rectangles("Rectangle",4,4);
$square = new Squares("Square",6);
$randomPercent = rand(1,100);

$arrayShapeBefore = [];
array_push($arrayShapeBefore, $circle);
array_push($arrayShapeBefore, $rectangle);
array_push($arrayShapeBefore, $square);
foreach ($arrayShapeBefore as $key => $value){
    echo "dien tich hinh ". $value->getName()." ban dau : "."<br>";
    echo  $value->calculatorArea()."<br>";
}
echo "<br>";
foreach ($arrayShapeBefore as $key => $value){
    echo "dien tich hinh ". $value->getName()." sau khi thay doi : "."<br>";
    echo  $value->resize($randomPercent)."<br>";
}



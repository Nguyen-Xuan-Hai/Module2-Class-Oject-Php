<?php
include "Rectangle-class.php";

$width  = 10;
$height = 20;

$rectangle = new Rectangle($width, $height);

echo  "width=" .$rectangle->width."<br> ";// 0utput: 10
echo "height=" .$rectangle->height."<br>"; // 0utput: 20

$rectangle->height = 30;
$rectangle->width = 20;

echo "height=" .$rectangle->height."<br>"; // 0utput: 30
echo "width=" .$rectangle->width."<br>"; // 0utput: 20

echo "Perimeter=".$rectangle->getPerimeter()."<br>"; // 0utput: 100
echo "Acreage=".$rectangle->getArea()."<br>"; // Output: 600

echo ("Your Rectangle". $rectangle->display());
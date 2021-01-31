<?php
include_once "Fan.php";
$Fan1 = new Fan();
$Fan1->setSpeed($Fan1->Fast);
$Fan1->setRadius(10);
$Fan1->setColor('yellow');
$Fan1->setOn(true);
$Fan1->toString();
echo "<br>";
$Fan2 = new Fan();
$Fan2->setSpeed($Fan2->Medium);
$Fan2->setRadius(5);
$Fan2->toString();
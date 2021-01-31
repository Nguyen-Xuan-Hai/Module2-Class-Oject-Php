<?php
include_once "StopWatch.php";
$watch = new Stopwatch();
$watch->start();
echo "start time: ".$watch->getStartTime()."<br>";
for ($i=0;$i<100000;$i++){
    echo " ";
}
$watch->stop();
echo "stop time: " . $watch->getEndTime()."<br>";
echo "Thoi gian troi " . $watch->getElapsedTime()." ms <br>";

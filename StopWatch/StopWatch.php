<?php


class StopWatch
{
    private $startTime;
    private $endTime;
    function __construct()
    {
    }


    public function getStartTime()
    {
        return round($this->startTime * 1000); // lay time la miliseconds
    }

    public function getEndTime()
    {
        return round($this->endTime * 1000); // lay time la miliseconds
    }
    function start(){
        $this->startTime = microtime(true); // lay time start
    }
    function stop(){
        $this->endTime= microtime(true); // lay time stop
    }
    function getElapsedTime(){
        return $this->getEndTime() - $this->getStartTime();
    }
}
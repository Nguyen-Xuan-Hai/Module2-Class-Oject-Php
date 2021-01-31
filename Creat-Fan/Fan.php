<?php


class Fan
{
    public $Slow = 1;
    public $Medium = 2;
    public $Fast = 3;
    private $Speed;
    private $on;
    private $radius;
    private $color;

    public function __construct(){
        $this->Speed = $this->getSlow();
        $this->on = false;
        $this->radius = 5;
        $this->color = 'blue';
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getFast()
    {
        return $this->Fast;
    }

    /**
     * @return int
     */
    public function getMedium()
    {
        return $this->Medium;
    }

    /**
     * @return mixed
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return int
     */
    public function getSlow()
    {
        return $this->Slow;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->Speed;
    }

    /**
     * @param mixed $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param mixed $Speed
     */
    public function setSpeed($Speed)
    {
        $this->Speed = $Speed;
    }

    /**
     * @param int $Slow
     */
    public function setSlow($Slow)
    {
        $this->Slow = $Slow;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    function toString(){
        if ($this->on == true){
            echo "Speed max: ".$this->getSpeed().","."radius :".$this->getRadius().","."color: ".$this->getColor().","."fan is on";
        }else{
            echo "Speed max: ".$this->getSpeed().","."radius :".$this->getRadius().","."color: ".$this->getColor().","."fan is off";        }

    }

}
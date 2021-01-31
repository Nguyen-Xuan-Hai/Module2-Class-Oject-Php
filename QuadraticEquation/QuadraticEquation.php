<?php
class QuadraticEquation
{
    public $a;
    public $b;
    public $c;
    public $delta;
    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant(){
         return (($this->b ** 2) - 4 * ($this->a * $this->c));
    }
    public function getRoot1(){
        return ((-$this->b + pow($this->getDiscriminant(),0.5))/2*$this->a);
    }

    public function getRoot2(){
        return ((-$this->b - pow($this->getDiscriminant(),0.5))/(2*$this->a));
    }
    function getQuadratic(){
        $this->delta = $this->getDiscriminant();
        if ($this->delta >0){
            echo "The equation has two root :".$this->getRoot1()."<br>";
            echo "The equation has two root :".$this->getRoot2();
        }elseif ($this->delta ===0){
            echo "The equation has one root :".$this->getRoot1();
        }else{
            echo "The equation has no root";
        }
    }

 }
<?php
echo"Hello RGB";

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode)
    {
        $this->color = ltrim($colorCode,'#') ;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($colorCode){
        $this->color = ltrim($colorCode,'#') ;
       return $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
            
            list($this->red, $this->green, $this->blue)= sscanf($this->color, '%02x%02x%02x');
            echo $this->red;
            echo $this->green;
            echo $this->blue;
        }
    }

}
 $myColor = new RGB("#ffef27");
 
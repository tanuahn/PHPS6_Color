<?php
/**
 * Created by PhpStorm.
 * User: tran-hieu
 * Date: 28/01/2019
 * Time: 20:28
 */
include_once "Colorable.php";

class Square implements Colorable
{
    public $width;

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function calculateArea(){
        return $this->width * $this->width;
    }
    public function calculatePerimeter(){
        return $this->width * 4;
    }
    public function howToColor()
    {
        return " Color all four sides";
    }
}

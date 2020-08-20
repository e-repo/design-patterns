<?php

namespace Pattern\SingleFactory;

class WoodenDoors implements IDoors
{
    protected $width;
    protected $height;

    public function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return '<h3 style="text-align: center; color: red"> Ширина двери: ' . $this->width . '</h3>';
    }

    public function getHeight()
    {
        return '<h3 style="text-align: center; color: red"> Высота двери: ' . $this->height . '</h3>';
    }
}
<?php

namespace Pattern\AbstractFactory;

class Reqtangle implements IQuadrangleFigure
{
    private $height;
    private $width;

    public function __construct($height = 0, $width = 0)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getDimensions()
    {
        return [
            'height' => $this->height,
            'width' => $this->width
        ];
    }

    public function printShape()
    {
        return "<h2 style='text-align: center;'>Результат: <span style='color: red;'>прямоугольник шириной - {$this->width}, высотой - {$this->height}</span></h2>";
    }
}
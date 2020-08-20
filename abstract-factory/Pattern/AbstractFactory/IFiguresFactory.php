<?php

namespace Pattern\AbstractFactory;

interface IFiguresFactory
{
    public function createFiguresFirstType($height, $width);

    public function createFiguresSecondType($height, $width);

    public function createFiguresThirdType($height, $width);
}
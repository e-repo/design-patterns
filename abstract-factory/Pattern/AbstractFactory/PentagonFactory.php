<?php

namespace Pattern\AbstractFactory;

class PentagonFactory implements IFiguresFactory
{
    private $height;
    private $width;

    private function checkDimensions()
    {
        $isValid = true;

        try {

            if(!isset($this->height) || empty($this->height)) {
                throw new \Exception('Высота не задана!');
            }
            if(!isset($this->width) || empty($this->width)) {
                throw new \Exception('Ширина не задана!');
            }
            if (!is_int($this->height)) {
                throw new \Exception('Высота не является числом!');
            }
            if (!is_int($this->width)) {
                throw new \Exception('Ширина не является числом!');
            }

            return $isValid;

        } catch (\Exception $e) {
            echo 'Выброшено исключение: ' . $e->getMessage();
        }
    }

    private function creator(IPentagonFigure $pentagonFigure) {
        if($this->checkDimensions()) {
            return new $pentagonFigure($this->height, $this->width);
        }
    }

    /**
     * @param null $height
     * @param null $width
     * @return IPentagonFigure
     */
    public function createFiguresFirstType($height = null, $width = null)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new EquilateralPentagon($this->height, $this->width));
    }

    /**
     * @param null $height
     * @param null $width
     * @return IPentagonFigure
     */
    public function createFiguresSecondType($height = null, $width = null)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new NonEquilateralPentagon($this->height, $this->width));
    }

    public function createFiguresThirdType($height = null, $width = null)
    {
        die('Данной фигуры не существует!');
    }
}
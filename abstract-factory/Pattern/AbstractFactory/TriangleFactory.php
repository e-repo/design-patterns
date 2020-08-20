<?php

namespace Pattern\AbstractFactory;

class TriangleFactory implements IFiguresFactory
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

    private function creator(ITriangleFigures $triangleFigure) {
        if($this->checkDimensions()) {
            return new $triangleFigure($this->height, $this->width);
        }
    }

    /**
     * @param null $height
     * @param null $width
     * @return ITriangleFigures
     */
    public function createFiguresFirstType($height = null, $width = null)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new EquilateralTriangle($this->height, $this->width));
    }

    /**
     * @param null $height
     * @param null $width
     * @return ITriangleFigures
     */
    public function createFiguresSecondType($height = null, $width = null)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new RightTriangle($this->height, $this->width));
    }

    /**
     * @param null $height
     * @param null $width
     * @return ITriangleFigures
     */
    public function createFiguresThirdType($height = null, $width = null)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new IsoscelesTriangle($this->height, $this->width));
    }
}
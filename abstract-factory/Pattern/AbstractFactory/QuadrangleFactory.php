<?php

namespace Pattern\AbstractFactory;

class QuadrangleFactory implements IFiguresFactory
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

    private function creator(IQuadrangleFigure $quadrangleFigure) {
        if($this->checkDimensions()) {
            return new $quadrangleFigure($this->height, $this->width);
        }
    }

    /**
     * @param null $height
     * @param null $width
     * @return IQuadrangleFigure
     */
    public function createFiguresFirstType($height = null, $width = null)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new Square($this->height, $this->width));
    }

    /**
     * @param null $height
     * @param null $width
     * @return IQuadrangleFigure
     */
    public function createFiguresSecondType($height, $width)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new Reqtangle($this->height, $this->width));
    }

    /**
     * @param null $height
     * @param null $width
     * @return IQuadrangleFigure
     */
    public function createFiguresThirdType($height, $width)
    {
        $this->height = $height;
        $this->width = $width;

        return $this->creator(new Rhombus($this->height, $this->width));
    }
}
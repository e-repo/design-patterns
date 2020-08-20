<?php

namespace Pattern\FactoryMethod;

/**
 * Class CreateDesignInterviewer
 * @package Pattern\FactoryMethod
 *
 * Это создатель конкретного продукта, в данном случае интервьюера для дизайнера
 *
 */
class CreateDesignInterviewer extends Creator
{
    public function getInterviewer()
    {
        return new DesignInterviewer();
    }
}
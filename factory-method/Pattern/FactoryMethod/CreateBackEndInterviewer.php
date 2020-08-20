<?php

namespace Pattern\FactoryMethod;

use Pattern\FactoryMethod\Creator;

/**
 * Class CreateBackEndInterviewer
 * @package Pattern\FactoryMethod
 *
 * Это создатель конкретного продукта, в данном случае создатель интрвьюера для back-end разработчика
 *
 */
class CreateBackEndInterviewer extends Creator
{
    public function getInterviewer()
    {
        return new BackEndInterviewer();
    }
}
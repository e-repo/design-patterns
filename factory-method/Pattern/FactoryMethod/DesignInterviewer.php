<?php

namespace Pattern\FactoryMethod;

use Pattern\FactoryMethod\IProduct;


class DesignInterviewer implements IProduct
{
    public function takeInterview()
    {
        return 'Interview the designer';
    }
}
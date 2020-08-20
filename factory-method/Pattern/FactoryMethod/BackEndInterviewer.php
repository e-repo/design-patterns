<?php

namespace Pattern\FactoryMethod;

use Pattern\FactoryMethod\IProduct;

class BackEndInterviewer implements IProduct
{
    public function takeInterview()
    {
        echo 'Interview the back-end developer';
    }
}
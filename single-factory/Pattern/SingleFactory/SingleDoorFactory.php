<?php

namespace Pattern\SingleFactory;

class SingleDoorFactory
{
    private function __construct() {}

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function makeDoor($width, $height)
    {
        return new WoodenDoors($width, $height);
    }
}
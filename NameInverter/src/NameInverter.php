<?php 

namespace Inverter;

class NameInverter
{
    public function invert($name)
    {
        if (sizeof($name) <= 0 || $name === null) {
            return '';
        }

        return $name;
    }
}
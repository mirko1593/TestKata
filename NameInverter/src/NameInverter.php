<?php 

namespace Inverter;

class NameInverter
{
    public function invert($name)
    {
        if (sizeof($name) <= 0 || $name === null) {
            return '';
        } else {
            $names = explode(' ', $name);

            if (sizeof($names) === 1) {
                return $name;
            }

            return sprintf('%s, %s', $names[1], $names[0]);
        }
    }
}
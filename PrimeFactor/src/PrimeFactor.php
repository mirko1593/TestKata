<?php 

namespace Factor;

class PrimeFactor
{
    public function of($number)
    {
        if ($number < 2) {
            return [];
        }
        return [$number];
    }
}
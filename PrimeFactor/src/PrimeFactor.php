<?php 

namespace Factor;

class PrimeFactor
{
    public function of($number)
    {
        $factors = [];

        if ($number > 1) {
            $factors[] = $number;
        }

        return $factors;
    }
}
<?php 

namespace Factor;

class PrimeFactor
{
    public function of($number)
    {
        $factors = [];

        if ($number > 1) {
            while ($number % 2 === 0) {
                $factors[] = 2;
                $number /= 2;
            }
        }

        if ($number > 1) {
            $factors[] = $number;
        } 

        return $factors;
    }
}
<?php 

namespace Factor;

class PrimeFactor
{
    public function of($number)
    {
        $factors = [];
        $division = 2;

        while ($number > 1) {
            while ($number % $division == 0) {
                $factors[] = $division;
                $number /= $division;
            }

            $division++;
        }

        if ($number > 1) {
            $factors[] = $number;
        } 

        return $factors;
    }
}
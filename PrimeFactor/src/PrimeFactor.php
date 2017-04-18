<?php 

namespace Factor;

class PrimeFactor
{
    public function of($number)
    {
        $factors = [];

        for ($division = 2; $number > 1; $division++) {
            for (; $number % $division == 0; $number /= $division) {
                $factors[] = $division;
            }
        }

        return $factors;
    }
}
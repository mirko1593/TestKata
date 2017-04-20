<?php 

namespace Sort;

class QuickSort
{
    public function sort($elems)
    {
        $sortedElems = [];
        if (sizeof($elems) < 1) {
            return $sortedElems;
        } else {
            $middle = $elems[0];
            $high = null;
            $low = null;

            foreach ($elems as $e) {
                if ($e < $middle) {
                    $low = $e;
                }
                if ($e > $middle) {
                    $high = $e;
                }
            }

            if ($low) $sortedElems[] = $low;
            if ($middle) $sortedElems[] = $middle;
            if ($high) $sortedElems[] = $high;
        }

        return $sortedElems;
    }
}
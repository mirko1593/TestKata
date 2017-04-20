<?php 

namespace Sort;

class QuickSort
{
    public function sort($elems)
    {
        $sortedElems = [];
        if (sizeof($elems) <= 1) {
            return $elems ?? [];
        } 
        if ($elems[0] > $elems[1]) {
            $sortedElems[] = $elems[1];
            $sortedElems[] = $elems[0];
        } else {
            $sortedElems[] = $elems[0];
            $sortedElems[] = $elems[1];
        }

        return $sortedElems;
    }
}
<?php 

namespace Sort;

class QuickSort
{
    public function sort($elems)
    {
        $sortedElems = [];
        if (sizeof($elems) == 1) {
            $sortedElems[] = $elems[0];
        } else if (sizeof($elems) === 2) {
            if ($elems[0] > $elems[1]) {
                $sortedElems[] = $elems[1];
                $sortedElems[] = $elems[0];
            } else {
                $sortedElems[] = $elems[0];
                $sortedElems[] = $elems[1];
            } 
        } else if (sizeof($elems) === 3) {
            if ($elems[1] > $elems[2]) {
                $sortedElems[] = $elems[2];
                $sortedElems[] = $elems[0];
                $sortedElems[] = $elems[1];
            } else {
                $sortedElems[] = $elems[1];
                $sortedElems[] = $elems[0];
                $sortedElems[] = $elems[2];
            }
        }

        return $sortedElems;
    }
}
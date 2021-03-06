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
            $high = [];
            $low = [];

            array_shift($elems);
            foreach ($elems as $e) {
                if ($e < $middle) {
                    $low[] = $e;
                } else {
                    $high[] = $e;
                }
            }

            $sortedElems = array_merge($this->sort($low), $sortedElems);
            $sortedElems[] = $middle;
            $sortedElems = array_merge($sortedElems, $this->sort($high));
        }

        return $sortedElems;
    }
}
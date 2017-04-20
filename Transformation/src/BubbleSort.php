<?php 

namespace Sort;

class BubbleSort
{
    public function sort($elems)
    {
        for ($index = 0; sizeof($elems) > $index + 1; $index++) {
            if ($elems[$index] > $elems[$index + 1]) {
                $this->swapElems($elems, $index);
            }
        }

        return $elems ?? [];
    }

    protected function swapElems(&$elems, $index)
    {
        $temp = $elems[$index];
        $elems[$index] = $elems[$index + 1];
        $elems[$index + 1] = $temp;
    }
}
<?php 

namespace Sort;

class BubbleSort
{
    public function sort($elems)
    {
        if (sizeof($elems) <= 1) {
            return $elems ?? [];
        }

        $index = 0;
        while (sizeof($elems) > $index + 1) {
            if ($elems[$index] > $elems[$index + 1]) {
                $this->swapElems($elems, $index);
            }
            $index++;
        }

        return $elems;
    }

    protected function swapElems(&$elems, $index)
    {
        $temp = $elems[$index];
        $elems[$index] = $elems[$index + 1];
        $elems[$index + 1] = $temp;
    }
}
<?php 

namespace Sort;

class BubbleSort
{
    public function sort($elems)
    {
        if (sizeof($elems) <= 1) {
            return $elems ?? [];
        }

        if ($elems[0] > $elems[1]) {
            $this->swapElem($elems, 0);
        }

        return $elems;
    }

    protected function swapElem(&$elems, $index)
    {
        $temp = $elems[$index];
        $elems[$index] = $elems[$index + 1];
        $elems[$index + 1] = $temp;
    }
}
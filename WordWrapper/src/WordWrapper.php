<?php 

namespace Wrapper;

class WordWrapper
{
    public function wrap($words, $length)
    {
        if (strlen($words) <= $length) {
            return $words ?? "";
        } else {
            $breakPoint = strrpos($words, ' ', - (strlen($words) - $length));

            if ($breakPoint === false) {
                $breakPoint = $length;
            }
            return substr($words, 0, $breakPoint) . "\n" . $this->wrap(trim(substr($words, $breakPoint)), $length);
        }
    }
}
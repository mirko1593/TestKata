<?php 

namespace Wrapper;

class WordWrapper
{
    public function wrap($words, $length)
    {
        if (strlen($words) <= $length) {
            return $words ?? "";
        } else {
            return substr($words, 0, $length) . "\n" . $this->wrap(trim(substr($words, $length)), $length);
        }
    }
}
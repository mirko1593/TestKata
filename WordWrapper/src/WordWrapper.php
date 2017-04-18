<?php 

namespace Wrapper;

class WordWrapper
{
    public function wrap($words, $length)
    {
        if (strlen($words) <= $length) {
            return $words ?? "";
        } else {
            return substr($words, 0, $length) . "\n" . substr($words, $length);
        }
    }
}
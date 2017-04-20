<?php 

use Sort\QuickSort;

class QuickSortTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function nothing()
    {
        $sorter = new QuickSort;

        $this->assertSame([], $sorter->sort(null));
    }    
}
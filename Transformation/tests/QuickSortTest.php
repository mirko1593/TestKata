<?php 

use Sort\QuickSort;

class QuickSortTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->sorter = new QuickSort;
    }

    /** @test */
    public function nothing()
    {
        $this->assertSorted([], null);
        $this->assertSorted([], []);
    }

    /** @test */
    public function it_quick_sorts_elems()
    {
        $this->assertSorted([1], [1]);
    }  

    protected function assertSorted($expected, $input)
    {
        $this->assertSame($expected, $this->sorter->sort($input));
    }
}
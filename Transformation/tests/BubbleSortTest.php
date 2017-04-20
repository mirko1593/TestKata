<?php 

use Sort\BubbleSort;

class BubbleSortTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->sorter = new BubbleSort;
    }

    /** @test */
    public function nothing()
    {
        $this->assertSorted([], null);
        $this->assertSorted([], []);
    }    

    /** @test */
    public function it_sorts_elems()
    {
        $this->assertSorted([1], [1]);
        $this->assertSorted([1, 2], [2, 1]);
        $this->assertSorted([1, 2, 3], [1, 3, 2]);
        $this->assertSorted([1, 2, 3], [3, 2, 1]);
    }

    /** @test */
    public function integration_test_for_bubble_sort()
    {
        $elems = [];
        foreach (range(1, 1000) as $i) {
            $elems[] = random_int(1, 1000);
        }

        $sortedElems = $this->sorter->sort($elems);

        for ($i = 0; $i < 999; $i++) {
            $this->assertTrue($sortedElems[$i] <= $sortedElems[$i+1]);
        }
    }

    protected function assertSorted($expected, $input)
    {
        $this->assertSame($expected, $this->sorter->sort($input));
    }
}
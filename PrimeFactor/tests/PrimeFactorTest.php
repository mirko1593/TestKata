<?php 

use Factor\PrimeFactor;

class PrimeFactorTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->factor = new PrimeFactor;
    }

    /** @test */
    public function factor_of_1_is_empty_array()
    {
        $this->assertFactorOf([], 1);
    }   

    /** @test */
    public function factor_of_2_is_2()
    {
        $this->assertFactorOf([2], 2);
    }

    /** @test */
    public function factor_of_number_greater_than_2()
    {
        $this->assertFactorOf([3], 3);
        $this->assertFactorOf([2, 2], 4);
        $this->assertFactorOf([5], 5);
        $this->assertFactorOf([2, 3], 6);
        $this->assertFactorOf([7], 7);
        $this->assertFactorOf([2, 2, 2], 8);
        $this->assertFactorOf([3, 3], 9);
        $this->assertFactorOf([3, 3, 3], 27);
    }

    /** @test */
    public function integrate_test_for_a_random_number()
    {
        $this->assertFactorOf([2, 3, 5, 7, 11], 2310);   
    }

    protected function assertFactorOf($factors, $number)
    {
        $this->assertEquals($factors, $this->factor->of($number));
    } 
}
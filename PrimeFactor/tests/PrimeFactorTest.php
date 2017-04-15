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

    protected function assertFactorOf($factors, $number)
    {
        $this->assertEquals($factors, $this->factor->of($number));
    } 
}
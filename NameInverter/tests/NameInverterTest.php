<?php 

use Inverter\NameInverter;

class NameInverterTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->nameInverter = new NameInverter;
    }

    /** @test */
    public function given_null_returns_empty_string()
    {
        $this->assertInvertedName('', null);
    }   

    /** @test */
    public function given_an_empty_returns_an_empty_string()
    {
        $this->assertInvertedName('', '');
    }

    /** @test */
    public function given_simple_name_returns_simple_name()
    {
        $this->assertInvertedName('name', 'name');
    }

    /** @test */
    public function given_first_last_returns_last_comma_first()
    {
        $this->assertInvertedName('Last, First', 'First Last');
    }

    protected function assertInvertedName($inverted, $original)
    {
        $this->assertEquals($inverted, $this->nameInverter->invert($original));
    }
}
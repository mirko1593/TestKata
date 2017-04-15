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

    /** @test */
    public function given_simple_name_with_spaces_returns_simple_name_without_spaces()
    {
        $this->assertInvertedName('name', '   name   ');
    }

    /** @test */
    public function given_first_last_with_extra_spaces_returns_last_first()
    {
        $this->assertInvertedName('Last, First', 'First   Last');
    }

    /** @test */
    public function given_honorific_first_last_returns_last_first()
    {
        $this->assertInvertedName('Last, First', 'Mr. First Last');
        $this->assertInvertedName('Last, First', 'Mrs. First Last');
    }

    /** @test */
    public function given_first_last_post_nominals_returns_last_first_post_nominals()
    {
        $this->assertInvertedName('Last, First Dr.', 'First Last Dr.');
        $this->assertInvertedName('Last, First BS. Dr.', 'First Last BS. Dr.');
    }

    protected function assertInvertedName($inverted, $original)
    {
        $this->assertEquals($inverted, $this->nameInverter->invert($original));
    }
}
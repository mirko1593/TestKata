<?php 

use Game\Game;

class GameTest extends PHPUnit\Framework\TestCase
{
    protected $game;

    public function setUp()
    {
        parent::setUp();
        $this->game = new Game;
    }

    /** @test */
    public function it_creates_a_game_instance()
    {
        $this->assertTrue($this->game instanceof Game);
    }    

    /** @test */
    public function it_can_roll()
    {
        $this->game->roll(0);

        $this->assertTrue(true);
    }

    /** @test */
    public function it_plays_a_gutter_game()
    {
        $this->rollMany(20, 0);

        $this->assertSame(0, $this->game->score());
    }

    /** @test */
    public function it_rolls_all_1s()
    {
        $this->rollMany(20, 1);

        $this->assertSame(20, $this->game->score());
    }

    protected function rollMany($count, $pins)
    {
        foreach (range(0, $count - 1) as $i) {
            $this->game->roll($pins);
        }
    }
}
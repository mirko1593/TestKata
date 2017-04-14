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

    /** @test */
    public function it_rolls_one_spare_and_remains_is_a_gutter_game()
    {
        $this->rollSpare();
        $this->game->roll(3);
        $this->rollMany(17, 0);

        $this->assertSame(16, $this->game->score());
    }

    /** @test */
    public function it_rolls_one_strike_and_remains_is_a_gutter_game()
    {
        $this->game->roll(10);
        $this->game->roll(1);
        $this->game->roll(1);
        $this->rollMany(16, 0);

        $this->assertSame(14, $this->game->score());
    }

    protected function rollMany($count, $pins)
    {
        foreach (range(0, $count - 1) as $i) {
            $this->game->roll($pins);
        }
    }

    protected function rollSpare()
    {
        $this->game->roll(5);
        $this->game->roll(5);
    }
}
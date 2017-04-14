<?php 

namespace Game;

class Game
{   
    protected $score;

    public function roll($pins)
    {
        $this->score += $pins;
    }

    public function score()
    {
        return $this->score;
    }
}
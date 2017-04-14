<?php 

namespace Game;

class Game
{   
    protected $rolls = [];
    protected $current = 0;

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        for ($i = 0; $i < 20; $i++) {
            if ($i % 2 === 0 && $this->rolls[$i] + $this->rolls[$i+1] == 10) {
                $score += $this->rolls[$i + 2];
            }
            $score += $this->rolls[$i];
        }

        return $score;
    }
}
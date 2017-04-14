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
        $firstInFrame = 0;
        for ($frame = 0; $frame < 10; $frame++) {
            $score += $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame + 1];

            if ($this->isSpare($firstInFrame)) {
                $score += $this->rolls[$firstInFrame + 2];
            }
            $firstInFrame += 2;
        }

        return $score;
    }

    protected function isSpare($firstInFrame)
    {
        return $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame+1] == 10;
    }
}
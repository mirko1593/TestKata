<?php 

namespace Game;

class Game
{   
    protected $rolls;
    protected $current = 0;

    public function __construct()
    {
        $this->rolls = array_pad([], 21, 0);
    }

    public function roll($pins)
    {
        $this->rolls[$this->current++] = $pins;
    }

    public function score()
    {
        $score = 0;
        $firstInFrame = 0;
        for ($frame = 0; $frame < 10; $frame++) {
            if ($this->isStrike($firstInFrame)) {
                $score += 10 + $this->awardScoreForStrike($firstInFrame);
                $firstInFrame++;
            } else if ($this->isSpare($firstInFrame)) {
                $score += 10 + $this->awardScoreForSpare($firstInFrame);
                $firstInFrame += 2;
            } else {
                $score += $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame + 1];
                $firstInFrame += 2;                
            }
        }

        return $score;
    }

    protected function isSpare($firstInFrame)
    {
        return $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame+1] == 10;
    }

    protected function isStrike($firstInFrame)
    {
        return $this->rolls[$firstInFrame] == 10;
    }

    protected function awardScoreForStrike($firstInFrame)
    {
        return $this->rolls[$firstInFrame + 1] + $this->rolls[$firstInFrame + 2];
    }

    protected function awardScoreForSpare($firstInFrame)
    {
        return $this->rolls[$firstInFrame + 2];
    }
}
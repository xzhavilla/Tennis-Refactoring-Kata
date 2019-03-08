<?php

declare(strict_types=1);

class Forty extends AbstractScore
{
    public function next(): ScoreInterface
    {
        return new Set($this->getPlayer());
    }

    public function __toString(): string
    {
        return 'Forty';
    }
}

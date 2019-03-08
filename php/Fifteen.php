<?php

declare(strict_types=1);

class Fifteen extends AbstractScore
{
    public function next(): ScoreInterface
    {
        return new Thirty($this->getPlayer());
    }

    public function __toString(): string
    {
        return 'Fifteen';
    }
}

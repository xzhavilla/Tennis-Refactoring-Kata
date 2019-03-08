<?php

declare(strict_types=1);

class Love extends AbstractScore
{
    public function next(): ScoreInterface
    {
        return new Fifteen($this->getPlayer());
    }

    public function __toString(): string
    {
        return 'Love';
    }
}

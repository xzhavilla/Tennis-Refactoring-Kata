<?php

declare(strict_types=1);

class Thirty extends AbstractScore
{
    public function next(): ScoreInterface
    {
        return new Forty($this->getPlayer());
    }

    public function __toString(): string
    {
        return 'Thirty';
    }
}

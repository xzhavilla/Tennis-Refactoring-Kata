<?php

declare(strict_types=1);

class Set extends AbstractScore
{
    public function next(): ScoreInterface
    {
        throw new \LogicException();
    }

    public function __toString(): string
    {
        return 'Set';
    }
}

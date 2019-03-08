<?php

declare(strict_types=1);

class Tie extends Ladder
{
    public function __toString(): string
    {
        return sprintf(
            '%s-All',
            $this->scores->fst()
        );
    }
}

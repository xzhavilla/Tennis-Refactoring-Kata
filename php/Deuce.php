<?php

declare(strict_types=1);

class Deuce implements GameInterface
{
    public function next(PlayerInterface $player): GameInterface
    {
        return new Advantage($player);
    }

    public function __toString(): string
    {
        return 'Deuce';
    }
}

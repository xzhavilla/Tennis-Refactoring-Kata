<?php

declare(strict_types=1);

interface GameInterface
{
    public function next(PlayerInterface $player): GameInterface;

    public function __toString(): string;
}

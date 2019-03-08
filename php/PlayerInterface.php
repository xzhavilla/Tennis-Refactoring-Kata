<?php

declare(strict_types=1);

interface PlayerInterface
{
    public function getName(): string;

    public function equals(PlayerInterface $player): bool;

    public function __toString(): string;
}

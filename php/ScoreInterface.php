<?php

declare(strict_types=1);

interface ScoreInterface
{
    public function equals(ScoreInterface $score): bool;

    public function next(): ScoreInterface;

    public function getPlayer(): PlayerInterface;

    public function __toString(): string;
}

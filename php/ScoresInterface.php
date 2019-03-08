<?php

declare(strict_types=1);

interface ScoresInterface
{
    public function scoreByPlayer(PlayerInterface $player): ScoreInterface;

    public function next(PlayerInterface $player): ScoresInterface;

    public function areEqual(): bool;

    public function fst(): ScoreInterface;

    public function snd(): ScoreInterface;
}

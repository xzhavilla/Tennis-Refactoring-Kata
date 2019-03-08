<?php

class TennisGame4 implements TennisGame
{
    /**
     * @var GameInterface
     */
    private $game;

    public function __construct($p1N, $p2N)
    {
        $this->game = new Tie(
            new Scores(
                new Love(new Player($p1N)),
                new Love(new Player($p2N))
            )
        );
    }

    public function getScore(): string
    {
        return (string) $this->game;
    }

    public function wonPoint($playerName): void
    {
        $this->game = $this->game->next(new Player($playerName));
    }
}

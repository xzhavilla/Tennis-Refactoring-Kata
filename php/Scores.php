<?php

declare(strict_types=1);

class Scores implements ScoresInterface
{
    private $scores = [];

    public function __construct(ScoreInterface $score1, ScoreInterface $score2)
    {
        $this->scores = array_reduce(
            [$score1, $score2],
            function (array $scores, ScoreInterface $score): array {
                return $scores + [$score->getPlayer()->getName() => $score];
            },
            []
        );
    }

    public function next(PlayerInterface $player): ScoresInterface
    {
        /** @var ScoreInterface[] $scores */
        $scores = array_map(
            function (ScoreInterface $score) use ($player): ScoreInterface {
                return $score->getPlayer()->equals($player)
                    ? $score->next()
                    : $score;
            },
            $this->scores
        );

        return new static(...array_values($scores));
    }

    public function areEqual(): bool
    {
        return $this->fst()->equals($this->snd());
    }

    public function byPlayer(PlayerInterface $player): ScoreInterface
    {
        if (! array_key_exists($player->getName(), $this->scores)) {
            throw new \RuntimeException();
        }

        return $this->scores[$player->getName()];
    }

    public function fst(): ScoreInterface
    {
        return reset($this->scores);
    }

    public function snd(): ScoreInterface
    {
        return end($this->scores);
    }
}

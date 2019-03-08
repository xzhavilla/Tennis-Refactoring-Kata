<?php

declare(strict_types=1);

class Ladder implements GameInterface
{
    /**
     * @var ScoresInterface
     */
    protected $scores;

    /**
     * Class constructor.
     *
     * @param ScoresInterface $scores
     */
    public function __construct(ScoresInterface $scores)
    {
        $this->scores = $scores;
    }

    public function next(PlayerInterface $player): GameInterface
    {
        $scores = $this->scores->next($player);
        $next = $scores->byPlayer($player);

        switch (true) {
            case $next instanceof Set:
                return new Game($next->getPlayer());
            case $scores->areEqual() && $next instanceof Forty:
                return new Deuce();
            default:
                return $scores->areEqual()
                    ? new Tie($scores)
                    : new Ladder($scores);
        }
    }

    public function __toString(): string
    {
        return sprintf(
            '%s-%s',
            $this->scores->fst(),
            $this->scores->snd()
        );
    }
}

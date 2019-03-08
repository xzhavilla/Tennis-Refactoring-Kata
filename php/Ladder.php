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
        /**
         * @var ScoresInterface $scores
         */
        $scores = $this->scores->next($player);
        $tie = $scores->areEqual();
        $next = $scores->scoreByPlayer($player);

        switch (true) {
            case $tie && $next instanceof Forty:
                return new Deuce();
            case $tie:
                return new Tie($scores);
            case $next instanceof FortyFive:
                return new Game($next->getPlayer());
            default:
                return new Ladder($scores);
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

<?php

declare(strict_types=1);

abstract class AbstractScore implements ScoreInterface
{
    /**
     * @var PlayerInterface
     */
    private $player;

    /**
     * Class constructor.
     *
     * @param PlayerInterface $player
     */
    public function __construct(PlayerInterface $player)
    {
        $this->player = $player;
    }

    public function equals(ScoreInterface $score): bool
    {
        return get_class($this) === get_class($score);
    }

    public function getPlayer(): PlayerInterface
    {
        return $this->player;
    }
}

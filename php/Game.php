<?php

declare(strict_types=1);

class Game implements GameInterface
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

    /**
     * @return PlayerInterface
     */
    public function getPlayer(): PlayerInterface
    {
        return $this->player;
    }

    public function next(PlayerInterface $player): GameInterface
    {
        throw new \LogicException();
    }

    public function __toString(): string
    {
        return sprintf(
            'Win for %s',
            $this->getPlayer()
        );
    }
}

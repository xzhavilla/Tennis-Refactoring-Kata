<?php

declare(strict_types=1);

class Advantage implements GameInterface
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
        return $player->equals($this->getPlayer())
            ? new Game($player)
            : new Deuce();
    }

    public function __toString(): string
    {
        return sprintf(
            'Advantage %s',
            $this->getPlayer()
        );
    }
}

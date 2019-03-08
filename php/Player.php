<?php

declare(strict_types=1);

class Player implements PlayerInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * Class constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function equals(PlayerInterface $player): bool
    {
        return $this->getName() === $player->getName();
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}

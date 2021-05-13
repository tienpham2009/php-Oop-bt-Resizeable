<?php

namespace Shape;

use Interface\Resizeable;
use JetBrains\PhpStorm\Pure;

include "../vendor/autoload.php";

class Circles implements Resizeable
{
    protected int|float $radius;
    protected string $name;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function calculatorArea(): int|float
    {
        return (pi() * pow($this->radius, 2));
    }

    #[Pure] public function resize($percent): int|float
    {
        $resize = ($this->calculatorArea() * $percent) / self::PERCENT;
        return $this->calculatorArea() + $resize;

    }
}
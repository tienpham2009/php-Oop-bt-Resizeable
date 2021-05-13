<?php

namespace Shape;

use Interface\Resizeable;
use JetBrains\PhpStorm\Pure;

include "../vendor/autoload.php";

class Rectangles implements Resizeable
{
    protected int|float $edgeA;
    protected int|float $edgeB;

    public function __construct($edgeA, $edgeB)
    {
        $this->edgeA = $edgeA;
        $this->edgeB = $edgeB;
    }

    /**
     * @return float|int
     */
    public function getEdgeA(): float|int
    {
        return $this->edgeA;
    }

    /**
     * @return float|int
     */
    public function getEdgeB(): float|int
    {
        return $this->edgeB;
    }

    /**
     * @param float|int $edgeA
     */
    public function setEdgeA(float|int $edgeA): void
    {
        $this->edgeA = $edgeA;
    }

    /**
     * @param float|int $edgeB
     */
    public function setEdgeB(float|int $edgeB): void
    {
        $this->edgeB = $edgeB;
    }

    public function calculatorArea(): int|float
    {
        return $this->edgeA * $this->edgeB;
    }

    #[Pure] public function resize(float|int $percent): float|int
    {
        $resize = ($this->calculatorArea() * $percent) / 100;
        return $this->calculatorArea() + $resize;
    }

}
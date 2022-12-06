<?php


namespace App;

/**
 * Class Rectangle
 * @package App
 */
class Rectangle extends Figure
{
    /**
     * @var int
     */
    private int $a;

    /**
     * @var int
     */
    private int $b;

    /**
     * Rectangle constructor.
     * @param int $a
     * @param int $b
     */
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return int
     */
    public function getSquare(): int
    {
        return $this->a * $this->b;
    }

    /**
     * @return int
     */
    public function getPerimeter(): int
    {
        return 2 * ($this->a + $this->b);
    }

}
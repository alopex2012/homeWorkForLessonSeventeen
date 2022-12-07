<?php


namespace App;

/**
 * Class Rectangle
 * @package App
 */
class Rectangle extends Figure
{
    /**
     * $a property value
     * @var int
     */
    private int $a;

    /**
     * $b property value
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
     * Implementation of the abstract method for the area of the rectangle
     * @return int
     */
    public function getSquare(): int
    {
        return $this->a * $this->b;
    }

    /**
     * Implementation of the abstract method for the perimeter of the rectangle
     * @return int
     */
    public function getPerimeter(): int
    {
        return 2 * ($this->a + $this->b);
    }

}
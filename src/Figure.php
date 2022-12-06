<?php


namespace App;

/**
 * Class Figure
 * @package App
 */
abstract class Figure
{
    /**
     * @return int
     */
    abstract public function getSquare(): int;

    /**
     * @return int
     */
    abstract public function getPerimeter(): int;

    /**
     * @return float
     */
    public function getRatio(): float
    {
        return round( $this->getSquare() / $this->getPerimeter(), 2);
    }

    /**
     * @return int
     */
    public function getSquarePerimeterSum(): int
    {
        return $this->getSquare() + $this->getPerimeter();
    }


}
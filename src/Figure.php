<?php


namespace App;

/**
 * Class Figure
 * @package App
 */
abstract class Figure
{
    /**
     * Abstract method for implementation in descendant classes of figure area
     * @return int
     */
    abstract public function getSquare(): int;

    /**
     * Abstract method for implementation in descendant classes of figure perimeter
     * @return int
     */
    abstract public function getPerimeter(): int;

    /**
     * Method for getting the ratio of a figure's area to the figure's perimeter
     * @return float
     */
    public function getRatio(): float
    {
        return round($this->getSquare() / $this->getPerimeter(), 2);
    }

    /**
     * Method for getting the sum of the area of the figure and the perimeter of the figure
     * @return int
     */
    public function getSquarePerimeterSum(): int
    {
        return $this->getSquare() + $this->getPerimeter();
    }


}
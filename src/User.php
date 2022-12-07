<?php


namespace App;

/**
 * Class User
 * @package App
 */
abstract class User
{
    /**
     * $name property value
     * @var string
     */
    private string $name;

    /**
     * Getter for $name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Setter for $name
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Abstract method to implement in descendant classes of increasing revenue by $value
     * @param int $value
     * @return void
     */
    abstract public function increaseRevenue(int $value);

    /**
     * Abstract method for implementation in descendant classes of decreasing income by $value
     * @param int $value
     * @return void
     */
    abstract public function decreaseRevenue(int $value);
}
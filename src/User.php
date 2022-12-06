<?php


namespace App;

/**
 * Class User
 * @package App
 */
abstract class User
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param int $value
     * @return void
     */
    abstract public function increaseRevenue(int $value);

}
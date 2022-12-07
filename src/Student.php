<?php


namespace App;

/**
 * Class Student
 * @package App
 */
class Student extends User
{
    /**
     * $scholarship property value
     * @var int
     */
    private int $scholarship;

    /**
     * Getter for $scholarship
     * @return int
     */
    public function getScholarship(): int
    {
        return $this->scholarship;
    }

    /**
     * Setter for $scholarship
     * @param int $scholarship
     */
    public function setScholarship(int $scholarship)
    {
        $this->scholarship = $scholarship;
    }

    /**
     * Implementing an abstract method to increase $scholarship by $value
     * @param int $value
     */
    public function increaseRevenue(int $value)
    {
        $this->scholarship = $this->scholarship + $value;
    }

    /**
     * Implementing an abstract method to decrease $scholarship by $value
     * @param int $value
     */
    public function decreaseRevenue(int $value)
    {
        $this->scholarship = $this->scholarship - $value;
    }
}
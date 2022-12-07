<?php


namespace App;

/**
 * Class Student
 * @package App
 */
class Student extends User
{
    /**
     * @var int
     */
    private int $scholarship;

    /**
     * @return int
     */
    public function getScholarship(): int
    {
        return $this->scholarship;
    }

    /**
     * @param int $scholarship
     */
    public function setScholarship(int $scholarship)
    {
        $this->scholarship = $scholarship;
    }

    /**
     * @param int $value
     */
    public function increaseRevenue(int $value)
    {
        $this->scholarship = $this->scholarship + $value;
    }

    /**
     * @param int $value
     */
    public function decreaseRevenue(int $value)
    {
        $this->scholarship = $this->scholarship - $value;
    }
}
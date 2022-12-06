<?php


namespace App;

/**
 * Class Employee
 * @package App
 */
class Employee extends User
{
    /**
     * @var int
     */
    private int $salary;

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @param int $value
     */
    public function increaseRevenue(int $value)
    {
        $this->salary = $this->salary + $value;
    }

}
<?php


namespace App;

/**
 * Class Employee
 * @package App
 */
class Employee extends User
{
    /**
     * $salary property value
     * @var int
     */
    private int $salary;

    /**
     * Getter for $salary
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * Setter for $salary
     * @param int $salary
     */
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    /**
     * Implementing an abstract method to increase $salary by $value
     * @param int $value
     */
    public function increaseRevenue(int $value)
    {
        $this->salary = $this->salary + $value;
    }

    /**
     * Implementing an abstract method to decrease $salary by $value
     * @param int $value
     */
    public function decreaseRevenue(int $value)
    {
        $this->salary = $this->salary - $value;
    }
}
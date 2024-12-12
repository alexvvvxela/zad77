<?php

namespace Alexv\Zad777;

use Alexv\Lab777\Employee;

class PartTimeEmployee extends Employee
{
    private float $hourlyRate;
    private int $hoursWorked;

    public function __construct(string $name, string $position, float $hourlyRate, int $hoursWorked)
    {
        parent::__construct($name, $position);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary(): float
    {
        return $this->hourlyRate * $this->hoursWorked;
    }
}

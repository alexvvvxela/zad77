<?php

namespace Alexv\Zad777;

use Alexv\Lab777\Employee;

class FullTimeEmployee extends Employee
{
    private float $annualSalary;

    public function __construct(string $name, string $position, float $annualSalary)
    {
        parent::__construct($name, $position);
        $this->annualSalary = $annualSalary;
    }

    public function calculateSalary(): float
    {
        return $this->annualSalary;
    }
}

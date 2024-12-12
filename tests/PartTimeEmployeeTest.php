<?php

use PHPUnit\Framework\TestCase;
use Alexv\Zad777\PartTimeEmployee;

class PartTimeEmployeeTest extends TestCase
{
    private $employee;

    protected function setUp(): void
    {
        $this->employee = new PartTimeEmployee("Анна Петрова", "Кассир", 200, 120);
    }

    public function testCalculateSalary()
    {
        $this->assertEquals(24000, $this->employee->calculateSalary());
    }

    public function testGetDetails()
    {
        $this->assertEquals("Имя: Анна Петрова, Должность: Кассир", $this->employee->getDetails());
    }
}

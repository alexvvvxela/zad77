<?php

use PHPUnit\Framework\TestCase;
use Alexv\Zad777\FullTimeEmployee;

class FullTimeEmployeeTest extends TestCase
{
    private $employee;

    protected function setUp(): void
    {
        $this->employee = new FullTimeEmployee("Иван ", "Менеджер", 60000);
    }


    public function testGetDetails()
    {
        $this->assertEquals("Имя: Иван Иванов, Должность: Менеджер", $this->employee->getDetails());
    }

    public function testCalculateSum()
    {
        $this->assertEquals(60000, $this->employee->testCalculateSum());
    }
}

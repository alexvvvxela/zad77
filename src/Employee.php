<?php

namespace Alexv\Lab777;

class Employee
{
    protected string $name;
    protected string $position;

    public function __construct(string $name, string $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getDetails(): string
    {
        return "Имя: " . $this->name . ", Должность: " . $this->position;
    }
}

<?php

declare(strict_types=1);
class User
{
    private $name;
    private $id;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function  getId() {

    }


    public function displayId()
    {
        return $this->id;
    }
}
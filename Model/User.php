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


/*
declare(strict_types=1);


class User
{
    public $name;

    //public $groupid=[];

    public function __construct(string $name)
    {
        $this->name = $name;

    }

    public function getName(): string
    {
        return $this->name;
    }
}
/*
    public function getGrid() : array
    {
        //implode("", $this->groupid);
        return $this-> groupid;
    }
}
/*
class Products
{
    public $name;
    public $price;
    public $description;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function  getName() : string
    {
        return $this->name;
    }

    public function getPrice() : int
    {
        return $this->price;
    }

}*/


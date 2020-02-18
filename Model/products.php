<?php


class Products
{
    private $name;
    private $descrip;
    private $price;


    private $infoArray = [];

    public function displayInfo($jsonFile) {
        foreach ($jsonFile as $row) {
            $this->infoArray[] = $row['name']; $row['description']; $row['price'];
            echo "<p>".$row["name"]; $row['description']; $row['price']; ."</p>";
        }
    }

    public function getName() : string
    {
        return $this->name;
    }

}
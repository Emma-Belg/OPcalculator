<?php


class Products
{
    private $name;
    private $descrip;
    private $price;


    private $infoArray = [];

    public function getInfo($jsonFile) {
        foreach ($jsonFile as $row) {
            array_push($this->infoArray, $row['id'], $row['name'], $row['description'], $row['price']);

        }
        implode(" ", $this->infoArray);
        return $this->infoArray;
    }



}

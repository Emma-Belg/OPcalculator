<?php
declare(strict_types = 1);

class SelectButton
{
    private $name;

    private $infoArray = [];

    public function getInfo($jsonFile) {
        foreach ($jsonFile as $row) {
            $this->infoArray[] = $row['name'];
            echo "<option>".$row["name"]  ."</option>";
        }
    }

    public function getName() : string
    {
        return $this->name;
    }

}



<?php
declare(strict_types = 1);

class SelectButton
{
    private $selectedVal;

    private $infoArray = [];

    public function getInfo($jsonFile) {
        foreach ($jsonFile as $row) {
            $this->infoArray[] = $row['name'];
            echo "<option>". $row["name"] ."</option>";
        }
    }

    public function getValue($nameInputButton, $nameSelectButton)
    {
        if(isset($_GET[$nameInputButton])){
            $this->selectedVal = $_GET[$nameSelectButton];
            echo "<br>Selected: " . $this->selectedVal . "<br>";
        }

    }

}



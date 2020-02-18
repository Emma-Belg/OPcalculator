<?php
declare(strict_types = 1);

class SelectButton
{
    private $selectedCostumer;

    private $selectedProduct = "";

    private $infoArray = [];

    public function getInfo($jsonFile) {
        foreach ($jsonFile as $row) {
            $this->infoArray[] = $row['name'];
            echo "<option>". $row["name"] ."</option>";
        }
    }

    public function getValue()
    {
        if(isset($_GET['submit'])){
            $this->selectedCostumer = $_GET['customer'];
            $this->selectedProduct = $_GET['product'];
            echo "<br>Selected: " . $this->selectedCostumer . ' ' . $this->selectedProduct . "<br>";
        }

    }

}



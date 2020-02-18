<?php
declare(strict_types = 1);


class SelectButton
{
    private $selectedCostumer;
    private $selectedProduct = "";
    private $usedProdValues = [];


    public function getObject($selectedProd) {
        $prodOb = (json_decode(file_get_contents("products.json"), true));
        foreach ($prodOb as $row) {
            if($selectedProd == $row['name']){
                $this->usedProdValues[] = $row['name']; $row['price']; $row['description'];
                echo "<p><b>Product Name: </b>". $row["name"]. "<br><b>Price: </b> €".$row['price'] ."<br> <b>Description: </b>".  $row['description'] . "</p>";
            }
        }
    }

    public function getValue()
    {
        if(isset($_GET['submit'])){
            $this->selectedCostumer = $_GET['customer'];
            $this->selectedProduct = $_GET['product'];
            echo "<br>Selected: " . $this->selectedCostumer . ' ' . $this->selectedProduct . "<br>";
            self :: getObject($this->selectedProduct);
        }

    }

   /* public function testGetInfo($jsonFile) {
        foreach ($jsonFile as $row) {
            if($this->selectedProduct == $row['name']){
                $this->usedProdValues[] = $row['name']; $row['price']; $row['description'];
                echo "<p>". $row["name"]. $row['price'] . $row['description'] . "</p>";
            }

        }
        return $this->usedProdValues;
    }*/
    public function showProduct(){

        //should this actually be on the submit or the below??
        if(isset($_GET['product'])) {
            $this->selectedProduct = $_GET['product'];
            return $this->selectedProduct;
        }
    }

}



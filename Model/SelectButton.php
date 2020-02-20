<?php
declare(strict_types = 1);


class SelectButton
{
    private $selectedCostumer;
    private $selectedProduct = "";
    private $usedProdValues = [];
    private $infoArray =[];

    public function displayDropDownInfo($session) {
        foreach ($session as $key=>$row) {
            $this->infoArray[$key] = $row['name'];
            //var_dump( $this->infoArray[$key]);
            //echo "<option value='name'>".$row["name"]  ."</option>";
            echo "<option>".$row['name']  ."</option>";
        }
    }

    public function displaySelectedProd($selectedProd) {
        foreach ($_SESSION['productObj'] as $row) {
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
            echo "<br>Selected: " . $this->selectedCostumer . ', ' . $this->selectedProduct . "<br>";
            self :: displaySelectedProd($this->selectedProduct);
        }

    }

    public function showProduct(){

        //should this actually be on the submit or the below??
        if(isset($_GET['product'])) {
            $this->selectedProduct = $_GET['product'];
            return $this->selectedProduct;
        }
    }

}



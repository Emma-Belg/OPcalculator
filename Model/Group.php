<?php

declare(strict_types=1);

class Group
{
    private $idSelectedCust;

    private $selectedCust;

    private $variableDiscount = [];

    private $fixedDiscount = [];

    private $sumFixedValue = 0;

    private $maxVariableValue = 0;

    private $selectedProd;

    private $price;

    public function getIdSelectedCust($selectedCust)
    {
        $custOb = (json_decode(file_get_contents("customers.json"), true));
        $groupOb = (json_decode(file_get_contents("groups.json"), true));
        $productsOb = (json_decode(file_get_contents("products.json"), true));

        //Get price of selected product
        $price = 0;
        if (isset($_GET['submit'])) {
            $this->selectedProd = $_GET['product'];
            foreach ($productsOb as $row) {
                if ($this->selectedProd == $row['price']) {
                    $price = $row['price'];
                }
            }
        }

        //Get group id of selected person
        foreach ($custOb as $row) {
            if ($selectedCust == $row['name']) {
                $this->idSelectedCust = $row['group_id'];
            }
        }

        //Get the discounts
        foreach ($groupOb as $row) {
            if ($this->idSelectedCust == $row['id']) {
                echo 'name of group: ' . $row['name'] . '<br>';
                if (array_key_exists('variable_discount', $row)) {
                    array_push($this->variableDiscount, $row['variable_discount']);
                    echo 'variable discount: ' . $row['variable_discount'] . '<br>';
                } else {
                    array_push($this->fixedDiscount, $row['fixed_discount']);
                    echo 'fixed discount: ' . $row['fixed_discount'] . '<br>';
                }
                if(!empty($row['group_id'])) {
                    $this->idSelectedCust = $row['group_id'];
                }
            }
        }

        //Calculating price after discount
        if (!empty($this->fixedDiscount)) {
            $this->sumFixedValue = array_sum($this->fixedDiscount);
            if ($this->sumFixedValue < $price) {
                $this->sumFixedValue = $price - $this->sumFixedValue;
            }
        }
        if (!empty($this->variableDiscount)) {
            $this->maxVariableValue = max($this->variableDiscount);
            $this->maxVariableValue = $price - ($price * ($this->maxVariableValue / 100));
        }

        if ($this->sumFixedValue > $this->maxVariableValue) {
            echo 'The price after discount is: ' . $this->sumFixedValue;
        } else {
            echo 'The price after discount is: ' . $this->maxVariableValue;
        }

    }

    public function getSelectedCust()
    {
        if (isset($_GET['submit'])) {
            $this->selectedCust = $_GET['customer'];
            self:: getIdSelectedCust($this->selectedCust);
        }
    }


}




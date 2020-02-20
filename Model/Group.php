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
        $custOb = $_SESSION['customerObj'];
        $groupOb = (json_decode(file_get_contents("groups.json"), true));
        $productsOb = $_SESSION['productObj'];

        //Get price of selected product
        if (isset($_GET['submit'])) {
            $this->selectedProd = $_GET['product'];
            foreach ($productsOb as $row) {
                if ($this->selectedProd == $row['name']) {
                    $this->price = $row['price'];
                    echo 'price: ' . $this->price . '<br>';
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
                }
                if (array_key_exists('fixed_discount', $row)) {
                    array_push($this->fixedDiscount, $row['fixed_discount']);
                    echo 'fixed discount: ' . $row['fixed_discount'] . '<br>';
                }
                    $this->idSelectedCust = $row['group_id'];
                if(empty($row['group_id'])){
                    return;
                }
            }
        }

        //Calculating price after discount
        if (!empty($this->fixedDiscount)) {
            $this->sumFixedValue = array_sum($this->fixedDiscount);
            if ($this->sumFixedValue < $this->price) {
                echo 'price : ' . $this->price . '<br>';
                $this->sumFixedValue = $this->price - $this->sumFixedValue;
            }
        }

        if (!empty($this->variableDiscount)) {
            $this->maxVariableValue = max($this->variableDiscount);
            echo 'variable discount: ' . $this->maxVariableValue . '<br>';
            echo 'price: ' . $this->price . '<br>';
            $this->maxVariableValue = ($this->price - ($this->price * ($this->maxVariableValue / 100)));
            echo 'the variable discount is: ' . $this->maxVariableValue . '<br>';
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




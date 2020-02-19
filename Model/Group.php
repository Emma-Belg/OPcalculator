<?php

declare(strict_types=1);
class Group
{
    private $idSelectedCust;

    private $selectedCust;

    private $variableDiscount = [];

    private $fixedDiscount = [];

    private $maxFixedValue;

    private $maxVariableValue;

    public function getIdSelectedCust($selectedCust){
        $custOb = (json_decode(file_get_contents("customers.json"), true));
        $groupOb = (json_decode(file_get_contents("groups.json"), true));
        $productsOb = (json_decode(file_get_contents("products.json"), true));
        foreach ($custOb as $row) {
            if($selectedCust == $row['name']){
                $this->idSelectedCust = $row['group_id'];
            }
        }

        foreach ($groupOb as $row){
            if($this->idSelectedCust == $row['id']){
                echo 'name of group: ' . $row['name'] . '<br>';
                if(array_key_exists('variable_discount', $row)){
                    array_push($this->variableDiscount, $row['variable_discount']);
                    echo 'variable discount: ' . $row['variable_discount'] . '<br>';
                } else {
                    array_push($this->fixedDiscount, $row['fixed_discount']);
                    echo 'fixed discount: ' . $row['fixed_discount'] . '<br>';
                }
                $this->idSelectedCust = $row['group_id'];
            }
        }
        if(!empty($this->fixedDiscount)){
            $this->maxFixedValue = max($this->fixedDiscount);
        }
        if(!empty($this->variableDiscount)){
            $this->maxVariableValue = max($this->variableDiscount);
        }
        print_r($productsOb[0]['price']);
    }

    public function getSelectedCust()
    {
        if(isset($_GET['submit'])){
            $this->selectedCust = $_GET['customer'];
            self :: getIdSelectedCust($this->selectedCust);
        }
    }




}




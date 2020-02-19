<?php
declare(strict_types=1);


class HomepageController
{

    private $customerArray = [];
    private $productsArray = [];
    private $groupsArray = [];

    /* feel free to delete this, i was just experimenting a little, its still missing some shit anyway
    
    public function jsonsToArrays()
    {
        private $customerArray = [];
        private $productsArray = [];
        private $groupsArray = [];

        $customersJson = json_decode(file_get_contents('../customers.json'), true);
        $productsJson = json_decode(file_get_contents('../products.json'), true);
        $groupsJson = json_decode(file_get_contents('../groups.json'), true);

    }
    */




    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }

/*    public function __construct($json)
    {
        $obj = json_decode(file_get_contents($json), true);
        return $obj;
    }*/

    public function jsonToObject($json){
        $obj = json_decode(file_get_contents($json), true);
        return $obj;
    }


/*    public function getCustomers() {
        $this->customerObj = json_decode(file_get_contents("customers.json"), true);
/*        foreach ($this->customerObj as $key=>$row) {
            $this->customerArray[$key]= $row['id']; $row['name']; $row['group_id'];
        }*/
/*            array_push($this->customerArray, $this->customerObj);
    public function getCustomers()
    {
        $this->customerObj = json_decode(file_get_contents("customers.json"), true);
        foreach ($this->customerObj as $row) {
            $this->customerArray[] = $row['id'];
            $row['name'];
            $row['group_id'];
        }
        echo "testing";
        return $this->customerArray;
    }

    public function getProducts() {
        $productObj = json_decode(file_get_contents("products.json"), true);
        //array_push($this->productsArray, $productObj);
        //return $this->productsArray;
        return $productObj;
    }*/
}

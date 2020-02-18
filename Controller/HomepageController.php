<?php
declare(strict_types = 1);



class HomepageController
{

    private $customerArray = [];
    private $productsArray = [];
    private $groupsArray = [];
    private $customerObj;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }


    public function getCustomers() {
        $this->customerObj = json_decode(file_get_contents("customers.json"), true);
        foreach ($this->customerObj as $row) {
            $this->customerArray[] = $row['id']; $row['name']; $row['group_id'];
        }
        echo "testing";
        return $this->customerArray;
    }
}

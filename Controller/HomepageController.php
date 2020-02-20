<?php
declare(strict_types=1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        $productsObj = new HomepageController();
        $productsObj->jsonToObject("products.json");

        $customerObj = new HomepageController();
        $customerObj->jsonToObject("customers.json");

        $groupObj = new HomepageController();
        $groupObj->jsonToObject("groups.json");

        $_SESSION['customerObj'] = $customerObj->jsonToObject("customers.json");
        $_SESSION['productObj'] = $productsObj->jsonToObject("products.json");


        //load the view
        require 'View/homepage.php';
    }

    public function jsonToObject($json)
    {
        return json_decode(file_get_contents($json), true);
    }
}

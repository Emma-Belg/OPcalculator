<?php
declare(strict_types = 1);



class HomepageController
{

    private $infoArray = [];
    private $jsonToObject;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }



    public function getInfo($jsonFile) {
        //$this->jsonToObject = json_decode(file_get_contents($jsonFile), true);
        foreach ($jsonFile as $row) {
            $this->infoArray[] = $row['name'];
            echo "<option>". $row["name"]."</option>";
        }
    }
}

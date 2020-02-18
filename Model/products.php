<?php


class Products
{
    private $name;
    private $descrip;
    private $price;


    private $infoArray = [];

    public function getInfo($jsonFile) {
        foreach ($jsonFile as $row) {
            array_push($this->infoArray, $row['id'], $row['name'], $row['description'], $row['price']);

        }
        implode(" ", $this->infoArray);
        //echo $this->infoArray;
        return $this->infoArray;


    }

    public function displayInfo(){

      /*  if (!empty((new SelectButton)->showProduct())) {
            echo "The Product you selected: " . (new SelectButton)->showProduct();
        }*/


        if (in_array((new SelectButton)->showProduct(), $this->infoArray))
        {
            //echo "<p>".(new SelectButton)->showProduct()[0][1] ."<br>". "</p>";
        }
       /* for($i=0; $i < count($this->infoArray); $i++){
            if($this->infoArray[$i]['name'] == (new SelectButton)->showProduct()){
                echo "<p>".$this->infoArray[$i]['name'] ."<br>". $this->infoArray[$i]['description'] ."<br>". $this->infoArray[$i]['price'] ."</p>";
            }
        }*/

       /* if ((new SelectButton)->showProduct() == $this->infoArray[0]['id']){
            echo "<p>".$this->infoArray[0]["name"] ."<br>". $this->infoArray[0]['description'] ."<br>". $this->infoArray[0]['price'] ."</p>";
        }*/
    }

    public function getName() : string
    {
        return $this->name;
    }

}

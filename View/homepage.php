
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "style.css" type="text/css" rel="stylesheet"/>
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
<?php require 'includes/header.php';
require 'Model/SelectButton.php';
require 'Model/products.php';
?>




<section>
    <h1>Helloooooooooo</h1>
    <form action="#"  method="get">
        <label>
            <select name="select">
                <option></option>
                <?php
                $selectButton1 = new SelectButton();
                $selectButton1->getInfo(json_decode(file_get_contents("customers.json"), true));
                ?>
            </select>
        </label>
        <!--<input type="submit" name="submit1" value="Get Selected Values" />-->
        <div>
        <?php $selectButton1->getValue('submit', 'select');?>
        </div>
        <label>
            <select name="select">
                <option></option>
                <?php
                $selectButton1 = new SelectButton();
                $selectButton1->getInfo(json_decode(file_get_contents("products.json"), true));

                $displayProd = new Products();
                $displayProd ->displayInfo(json_decode(file_get_contents("products.json"),true));


                $selectButton2 = new SelectButton();
                $selectButton2->getInfo(json_decode(file_get_contents("products.json"), true));
                ?>
            </select >
        </label>
        <input type="submit" name="submit" value="Get Selected Values" />
        <div>
        <?php $selectButton2->getValue('submit', 'select');?>
        </div>
    </form>
</section>
<?php require 'includes/footer.php'?>
</body>
</html><?php


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
require 'Model/SelectButton.php' ?>

<section>
    <h1>Helloooooooooo</h1>
    <form method="get">
        <label>
            <select name="customer" class="drpbutton">
                <option></option>
                <?php
                $selectButton1 = new SelectButton();
                $selectButton1->getInfo(json_decode(file_get_contents("customers.json"), true));
                ?>
            </select>
        </label>
        <label>
            <select name="product" class="drpbutton">
                <option></option>
                <?php
                $selectButton2 = new SelectButton();
                $selectButton1->getInfo(json_decode(file_get_contents("products.json"), true));
                ?>
            </select>
        </label>
    </form>
</section>
<?php require 'includes/footer.php'?>
</body>
</html><?php

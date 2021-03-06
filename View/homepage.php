
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
require 'Model/Group.php';
?>

<section>
    <h1>Helloooooooooo</h1>
    <form action="#"  method="get">
        <label>
            <select name="customer">
                <option></option>
                <?php
                $selectButton1 = new SelectButton();
                $selectButton1->displayDropDownInfo($_SESSION['customerObj']);

                ?>
            </select>
        </label>
        <!--<input type="submit" name="submit1" value="Get Selected Values" />-->
        <label>
            <select name="product">
                <option></option>
                <?php
                $selectButton2 = new SelectButton();
                $selectButton2->displayDropDownInfo($_SESSION['productObj']);

                ?>
            </select >
        </label>
        <input type="submit" name="submit" value="Get Selected Values" />

        <p><?php
            $displayProd = new Products();
            $displayProd ->getInfo(json_decode(file_get_contents("products.json"),true));

            $selectButton2->showProduct();
         //   $displayProd->displayInfo();
            ?></p>
        <div>
        <?php
        $selectedValues = new SelectButton();
        $selectedValues->getValue();

        $id = new Group();
        $id->getSelectedCust();
        ?>
        </div>
    </form>
</section>
<?php require 'includes/footer.php'?>
</body>
</html><?php

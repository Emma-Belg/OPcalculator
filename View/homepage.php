
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
require 'Model/Customer.php';?>

<section>
<!--    <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
    <h1>Helloooooooooo</h1>
    <form method="get">
        <label>
            <select name="customer" class="drpbutton">

        <?php
        $customerData = json_decode(file_get_contents("customers.json"),true);

        $allCustomers = [];
        foreach ($customerData as $row) {
            $allCustomers[] = new Customer($row['name']);
            echo "<option value='customer-name'>".$row["name"]  ."</option>";
        }
        ?>
            </select>
            <select name="product" class="drpbutton">Products</select >
        </label>

    </form>
</section>
<?php require 'includes/footer.php'?>
</body>
</html><?php

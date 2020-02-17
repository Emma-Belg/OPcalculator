
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
<?php require 'includes/header.php'; ?>

<section>
<!--    <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
    <h1>Helloooooooooo</h1>
    <form method="get">
<<<<<<< HEAD
        <select
        <button name="customer" class="drpbutton" type="submit">Customer</button>
        <button name="product" class="drpbutton" type="submit">Products</button>
=======
        <label>
            <select name="customer" class="drpbutton">Customer</select>

        <?php
        echo "yo mf";
        $customerData = json_decode(file_get_contents("customers.json"));

        $list = [];
        foreach ($customerData as $row) {
            $list[] = new Customer($row['name']);
            //array_push($list, new Customer($row['name']));
            echo "<option value='customer-name'>".$list[$row]."</option>";
        }
        ?>
            <select name="product" class="drpbutton">Products</select >
        </label>
>>>>>>> 63ffc6a5f33d8dc1e5b2b7a1530f1576b17412c3
    </form>
</section>
<?php require 'includes/footer.php'?>
</body>
</html><?php

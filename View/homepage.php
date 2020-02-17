
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
<?php require 'includes/header.php'?>
<section>
    <h4>Hello <?php echo $user->getName()?>,</h4>
    <form method="get">
        <select
        <button name="customer" class="drpbutton" type="submit">Customer</button>
        <button name="product" class="drpbutton" type="submit">Products</button>
    </form>
</section>
<?php require 'includes/footer.php'?>
</body>
</html><?php

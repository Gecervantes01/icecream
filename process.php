<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice Cream Order Summary</title>
</head>
<body>
    <h1>Thank you for your order!</h1>

    <?php

        //Turn on error reporting
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        //Define constants
        define('PRICE_PER_SCOOP', 2.50);
        define('SALES_TAX_RATE', 0.11);

        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $scoops = $_POST['scoops'];
        $flavors = $_POST['flavor'];
        $cone = $_POST['cone'];
        $flavorString = implode(", ", $flavors);

        //Calculate total due
        $subtotal = PRICE_PER_SCOOP * $scoops;
        $tax = $subtotal * SALES_TAX_RATE;
        $total = $subtotal + $tax;

        //Print summary:
        echo "<div>
                 <p>$scoops scoops</p>
                 <p>Flavors: $flavorString</p>
                 <p>Cone: $cone</p>
                 <p>Subtotal: $subtotal</p>
                 <p>Tax: $tax</p>
                 <p>Total: $total</p>
              </div>"
        ?>

</body>
</html>
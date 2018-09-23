<?php
    require_once ('mercadopago.php');
    
    $mp = new MP ("7261628270430202", "l4QDNZqgIrBcKa4fg9ZYvLdsh9PYb9Bf");

    $preference_data = array(
      "items" => array(
            array(
                "title" => "Donaciones",
                "quantity" => 1,
                "currency_id" => "ARS", 
                "unit_price" => 10.00
            )
        )
    );
    $preference = $mp->create_preference($preference_data);
    
    print_r ($preference);
?>
<!DOCTYPE html>
<html>
<head>
<title>Pay</title>
</head>
<body>
<a href="<?php echo $preference['response']['init_point']; ?>">Pay</a>
</body>
</html>

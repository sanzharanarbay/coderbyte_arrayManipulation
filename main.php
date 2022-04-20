<?php
$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],


];

function my_function($elements)
{
    foreach ($elements as $element) {
        $arr = [];
        $arr["delivery_price"] = $element["price"] * 0.02;
        $arr["shipping_cost"] = 30000.00;
        array_push($element, $arr);
    }
}
my_function($products);

print_r($products);
?>

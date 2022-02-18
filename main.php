<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'products.php';
require_once 'index.php';

$fullName = $_GET["fullName"] ?? '';
$email = $_GET["email"] ?? '';
$tel = $_GET["tel"] ?? '';
$zip = $_GET["zip"] ?? '';
$city = $_GET["city"] ?? '';
$address = $_GET["address"] ?? '';

if(empty($email && $fullName && $tel && $zip && $city && $address)){
    echo "please fill all the field   ";
}
if($email && $fullName && $tel && $zip && $city && $address){
    echo $fullName."<br>".$email."<br>".$tel."<br>".$zip."<br>".$city."<br>".$address."<br>";
}

$selected_products = [];

if (isset($products)) {
    $total_price = 0;
    foreach ($products as $category => $items) {
        foreach ($items as $item) {
            if (isset($_GET[$item->name]) && !empty($_GET[$item->name])) {
                $selected_products[] = [
                    'name' =>$_GET[$item->name],
                    'price' => $item->price
                ];

            }
        }
    }

}





















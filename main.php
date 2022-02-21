<?php
require_once 'products.php';
ini_set('display_errors','Off');


// selected product
$ero = " €";
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
                $total_price += $item->price;
                echo "<div id='listOf_order'><p> $item->name $item->price$ero </p></div>";
            }
        }
    }
    echo "<p id='total_price'> <br> Total_Price : $total_price$ero<br></p>";
}

if(empty($selected_products)){
    $message = "Please Select an item";
    header("location: index.php?message=". $message);
}

$fullName = $_GET["fullName"];
$email = $_GET["email"];
$tel = $_GET["tel"];
$zip = $_GET["zip"];
$city = $_GET["city"];
$address = $_GET["address"];

//validation
if (!empty($email && $fullName && $tel && $zip && $city && $address)) {
           if((!is_numeric($zip) ) || (strlen($zip) != 4)){
                $message = 'Please Put the correct Zip code of your place. ';
                 header("location: index.php?message=".$message);
            }
            if((!is_numeric($tel))){
                $message = 'Please Put the correct Phone Number';
                header("location: index.php?message=". $message);
            }
            $emails = "@email.com";
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $message = $email.' Is invalid email';
                header("location: index.php?message=". $message);
            }
            echo "<div id='contact_form'>$fullName <br>$email <br> $tel <br> $zip <br> $city <br> $address <br> </div> ";
            echo '<div id="success">Your Order is successfully !</div>';
            echo '<div id="success">Within one week you will receive your item  !</div>';
  }


























<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_GET["name"];
echo $name;

$products = new stdClass();//create a new
$products->vegetable = array("tomato", "onion", "potato");
$products->fruit = array("orange", "banana", "lemon");

foreach ($products as $key => $value) {
    $type =  $key."<br>";
    echo $type;
    foreach ($value as $i) {
    $items =  ($i)."<br>";
    echo $items;
    }
}

















<?php
include_once('main.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>ORDER FORM</title>
</head>
<body>

<main>
    <form action="" method="get">
        <label for="fullName">Full Name</label>
        <input type="text" name="name" id="fullName">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="tel">Telephone</label>
        <input type="number" name="tel" id="tel">

        <label for="zip">Zip Code</label>
        <input type="number" name="zip" id="zip">

        <label for="city">City Name</label>
        <input type="text" name="city" id="city">

        <label for="address">Address</label>
        <input type="text" name="address" id="address">

        <label for="submit">Submit</label>
        <input type="submit" name="submit" id="submit">
    </form>

    <form method="get" action="">
                  <?php
                     if (isset($products)) {
                            foreach ($products as $category => $items) {
                                echo "<div>$category</div>" ;
                                foreach ($items as $item) {
                                   echo " <label for=$item->name >$item->name $item->price</label> 
                                      <input type='checkbox' value=$item->name name=$item->name id=$item->name>";
                               }
                            }
                     }
                  ?>
        <input type='submit' id='submit_btn'>
   </form>
    <div>
        <?php
        if(isset($selected_products)){
            $total_price = 0;
         foreach ($selected_products as $product) {
             print_r("<br>".$product['name']."   ");
                 print_r($product['price']);
             $total_price += $product['price'];
         }
            echo "<p>$total_price</p>";
        }
        ?>
    </div>
</main>

<script src="index.js"></script>
</body>
</html>








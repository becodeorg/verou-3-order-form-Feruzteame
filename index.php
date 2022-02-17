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
           <label for="name">Full Name</label>
           <input type="text" name="name" id="name">

           <label for="email">Email</label>
           <input type="email" name="email" id="email">

           <label for="tele">Telephone</label>
           <input type="number" name="tele" id="tele">

           <label for="zip">Zip Code</label>
           <input type="number" name="zip" id="zip">

           <label for="city">City Name</label>
           <input type="text" name="city" id="city">

           <label for="address">Address</label>
           <input type="text" name="address" id="address">

           <label for="submit">Submit</label>
           <input type="submit" name="submit" id="submit">
       </form>
   </main>



</body>
</html>

<?php
   include_once('view.php')
?>







<?php
require_once 'products.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ORDER FORM</title>
</head>
<body>

<main>

    <p id="message"><?= $_GET['message'] ?? "Happy Shopping !" ?></p>

    <form method="get" action="main.php" id="products">
    <!--First form -->
        <fieldset id="step-1"">

            <?php
            $ero = " €";
            if (isset($products)) {
                foreach ($products as $category => $items) {
                    echo "<div class='category'>$category</div>" ;
                    foreach ($items as $item) {
                        echo " <input type='checkbox' class='check_box' value=$item->name name=$item->name id=$item->name>
                             <label for=$item->name >$item->name <span>$item->price $ero</span> </label> ";
                    }
                }
            }

            ?>
            <div>
                <button type="button" class="next-btn">Next</button>
            </div>
        </fieldset>

        <fieldset id="step-2">
            <div>
                <input type="text" name="fullName" id="fullName" class="personal_form" placeholder="Full-Name" >
                <input type="email" name="email" id="email" class="personal_form" placeholder="Email" ><br>
                <input type="number" name="tel" id="tel" class="personal_form" placeholder="Telephone" >
                <input type="number" name="zip" id="zip" class="personal_form" placeholder="Zip Code"><br>
                <input type="text" name="city" id="city" class="personal_form" placeholder="City" >
                <input type="text" name="address" id="address" class="personal_form" placeholder="Address" ><br>
                <button type="button" class="back-btn">Back</button>
            </div>
     </fieldset>
       <div>
            <button type="submit" id="submit-btn" disabled>Submit</button>
        </div>

    </form>


</main>
<script src="index.js"></script>
</body>
</html>
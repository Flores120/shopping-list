<?php
    $eggs = $_GET["eggs"];
    $milk = $_GET["milk"];
    $cheese = $_GET["cheese"];
    $ham = $_GET["ham"];
    $bread = $_GET["bread"];

    $groceries = array($eggs, $milk, $cheese, $ham, $bread);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>list</title>
  </head>
  <body>
    <h1>My Gorcery List</h1>
    <?php
    $grocery_price = 0;
        foreach ($groceries as $purchase) {
          echo "<li>" .  "The total price so far is: $purchase" . "</li>";
          $grocery_price = $grocery_price + $purchase;
        }
        echo "<h2>" . "Your total price is: $grocery_price" . "</h2>";
     ?>
  </body>
</html>

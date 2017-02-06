<?php
    $groceries = array("eggs", "milk", "bread");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>list</title>
  </head>
  <body>
    <h1>My Gorcery List</h1>
    <ul>
      <?php
          foreach ($groceries as $purchase) {
            echo "<li>" . $purchase . "</li>";
          }
       ?>
    </ul>
  </body>
</html>

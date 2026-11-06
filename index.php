<?php
require "order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chez Session Bistro </title>
   <link rel="stylesheet" href="styles.css">
</head>

<body>
   <h1>Chez Session Bistro</h1>
   <form action="process_order.php" method="post">
      <h2>🍰 Dessert</h2>
      <select name="dessert">
         <option value="none">Choose a desert</option>
         <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
         <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
         <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
         <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
      </select>

      <h2>☕ Drink</h2>
      <select name="drink">
         <option value="none">Choose a drink</option>
         <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
         <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
         <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
         <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
         <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
      </select>

      <h2>🥤 Drink Size</h2>
      <label> <input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected("Small"); ?>> Small </label>
      <label> <input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected("Medium"); ?>> Medium </label>
      <label> <input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected("Large"); ?>> Large </label>
      <br>
      <button type="submit">Send to Kitchen 👩‍🍳</button>
      <a class="click" href="index.php">Order Again 🔄️</a>
      <a class="click" href="forget_order.php">Forget Order 🗑️</a>
   </form>

   <div class="insight-card">
      <h3>Live guidance</h3>
      <p><?= htmlspecialchars(completionMessage()); ?></p>
      <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
   </div>

   <div class="insight-card pricing-grid">
      <div>
         <h3>Estimated total</h3>
         <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
      </div>
      <div>
         <h3>Order profile</h3>
         <p><?= htmlspecialchars(orderProfile()); ?></p>
      </div>
   </div>
</body>
</html>
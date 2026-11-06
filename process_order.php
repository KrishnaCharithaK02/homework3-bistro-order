<?php
require "./order_functions.php";
$orderSummary = order();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Your Order</title>
   <link rel="stylesheet" href="styles.css">
</head>

<body>
   <h1>Chez Session • Receipt</h1>
   <div class="receipt-card"><?= $orderSummary; ?></div>
   
   <div class="insight-card">
      <h3>Order feedback</h3>
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
      <p class="insight-note full-width-note"><?= htmlspecialchars(pricingNote()); ?></p>
   </div>

   <p><a href="index.php">Order Again 🔄️</a></p>
</body>
</html>
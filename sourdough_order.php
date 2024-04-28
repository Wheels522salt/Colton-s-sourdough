<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regularFlavor = $_POST["regularFlavor"];
    $miniFlavor = $_POST["miniFlavor"];
    $quantity = $_POST["quantity"];

    $regularPrice = 8; // Regular loaf price
    $miniPrice = 4; // Mini loaf price

    $totalRegularPrice = $regularPrice * $quantity;
    $totalMiniPrice = $miniPrice * $quantity;

    $message = "Thank you for your order!\n\nRegular Size Loaf: $regularFlavor x $quantity = $$totalRegularPrice\nMini Loaf: $miniFlavor x $quantity = $$totalMiniPrice\nTotal: $" . ($totalRegularPrice + $totalMiniPrice);

    echo nl2br($message);
} else {
    echo "Oops! There was a problem with your submission. Please try again.";
}
?>

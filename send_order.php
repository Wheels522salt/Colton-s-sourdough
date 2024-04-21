<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $flavor = $_POST['flavor'];
    $mini_flavor = $_POST['mini_flavor'];
    $mini_quantity = $_POST['mini_quantity'];

    $to = "coltona82012@gmail.com";
    $subject = "New Sourdough Bread Order";
    $body = "Name: $name\nEmail: $email\nFull-sized Loaf Flavor: $flavor\nMini Loaf Flavor: $mini_flavor\nMini Loaf Quantity: $mini_quantity";

    if (mail($to, $subject, $body)) {
        echo "<p>Your order has been placed successfully!</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
}
?>

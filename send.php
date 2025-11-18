<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "rosesims6@gmail.com";
    $subject = "New Bakery Booking from Lavender Bakes";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $order_type = $_POST["order_type"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $customization = $_POST["customization"];

    $message = "
    New Bakery Order:

    Name: $name
    Email: $email
    Phone: $phone

    Order Type: $order_type
    Product: $product
    Quantity: $quantity

    Date: $date
    Time: $time

    Customization:
    $customization
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you choosing our bakery we will be in contact.";
    } else {
        echo "Error: Your order could not be sent.";
    }
}
?>

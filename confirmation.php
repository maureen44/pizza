<?php
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $address = $_POST['address'];
    $method = $_POST['method'];
    $size = $_POST['size'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poppa's Pizza</title>
</head>
<body>
    <h1>Thank you for your order</h1>
    <h2>Order Summary</h2>
    <p>Name:
        <?php echo "$first $last";?>
        <br>
        Address:
        <?php echo "$address"?>
        <br>
        <?php echo "$method"?>
        <br>
        <?php echo "$size"?>
    </p>
    <pre>
    <?php
        var_dump($_POST);
    ?>
    </pre>
    <?php
        //Sending order by email
        $email = "kmaureen44@gmail.com";

        $email_body = "Order Summary --\r\n";
        $email_body .= "Name: $first $last\r\n";
        $email_subject = "New Order Placed";
        $to = $email;
        $headers = "From: $email\r\n";
        $headers = "Reply-To: $email \r\n";
        $success = mail($to, $email_subject, $email_body, $headers);

        //Print final confirmation
        $msg = $success ? "Your order has been successfully placed." : "We're sorry. There was a problem with your order.";
        echo "<p>$msg</p>";
    ?>
</body>
</html>


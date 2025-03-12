<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['action']) && $_GET['action'] == "add") {
    $id = $_GET['id'];
    $quantity = $_GET['quantity'];

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += $quantity;
    } else {
        $_SESSION['cart'][$id] = $quantity;
    }

    header("Location: cart.php");
}

if (isset($_GET['action']) && $_GET['action'] == "remove") {
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);

    header("Location: cart.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<?php include('../includes/header.php');?>

<h1>Your Cart</h1>
<ul>
    <?php
    foreach ($_SESSION['cart'] as $id => $quantity) {
        echo "<li>Item ID: $id | Quantity: $quantity 
        <a href='cart.php?action=remove&id=$id'>Remove</a></li>";
    }
    ?>
</ul>

<a href="checkout.php">Proceed to Checkout</a>

</body>
</html>

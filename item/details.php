<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'casing');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "SELECT * FROM items WHERE id = $id";
$result = $conn->query($sql);
$item = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $item['name']; ?></title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<?php include('../includes/header.php');?>    

<div class="product-details">
    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
    <h2><?php echo $item['name']; ?></h2>
    <p><?php echo $item['description']; ?></p>
    <p><strong>Price:</strong> $<?php echo $item['price']; ?></p>

    <div class="quantity">
        <button onclick="decreaseQuantity()">-</button>
        <input type="number" id="quantity" value="1" min="1">
        <button onclick="increaseQuantity()">+</button>
    </div>

    <button onclick="addToCart(<?php echo $item['id']; ?>)">Add to Cart</button>
</div>

<script>
function increaseQuantity() {
    let quantity = document.getElementById("quantity");
    quantity.value = parseInt(quantity.value) + 1;
}

function decreaseQuantity() {
    let quantity = document.getElementById("quantity");
    if (quantity.value > 1) {
        quantity.value = parseInt(quantity.value) - 1;
    }
}

function addToCart(itemId) {
    let quantity = document.getElementById("quantity").value;
    window.location.href = "cart.php?action=add&id=" + itemId + "&quantity=" + quantity;
}
</script>

</body>
</html>

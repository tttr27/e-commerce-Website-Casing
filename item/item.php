<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'casing');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from database
$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Filter And Search</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
          rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles.css" />
    
</head>
<body>
<?php include('../includes/header.php');?>    
    <div class="wrapper">
        <div id="search-container">
            <input type="search"
                   id="search-input"
                   placeholder="Search product name here.." />
            <button id="search">Search</button>
        </div>
        <div id="buttons">
            <button class="button-value" onclick="filterProduct('all')">All</button>
            <button class="button-value" onclick="filterProduct('iPhone')">
                iPhone
            </button>
            <button class="button-value" onclick="filterProduct('Samsung')">
                Samsung
            </button>
            <button class="button-value" onclick="filterProduct('Huawei')">
                Huawei
            </button>
            <button class="button-value" onclick="filterProduct('OnePlus')">
                OnePlus
            </button>
        </div>
        <div id="products">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-card' data-category='" . strtolower($row['category']) . "'>";
                echo "<a href='details.php?id=" . $row['id'] . "'>";
                echo "<img src='../" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p><strong>Price:</strong> RM" . $row['price'] . "</p>";
                echo "</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>
    </div>
    <!-- Script -->
    <script src="script.js"></script>
</body>
</html>
<?php
// Connect to your database (replace with your connection details)
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Fetch products from the database
$result = mysqli_query($conn, 'SELECT * FROM products');

// Display products in HTML
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="product">';
    echo '<h3>' . $row['name'] . '</h3>';
    echo '<img src="' . $row['image'] . '" alt="Product image">';
    echo '<p>Price: $' . $row['price'] . '</p>';
    echo '<a href="cart.php?add=' . $row['id'] . '">Add to Cart</a>';
    echo '</div>';
}

mysqli_close($conn);

// Start a session to store cart items
session_start();

if (isset($_GET['add'])) {
    // Add product to cart
    $_SESSION['cart'][] = $_GET['add'];
}

// Display cart contents
if (!empty($_SESSION['cart'])) {
    echo '<h2>Your Cart</h2>';
    // Fetch product details from the database again
    // Calculate total price
    // Display cart items and total
} else {
    echo '<p>Your cart is empty.</p>';
}
?>

<?php
include 'config.php';

if (isset($_POST['id'])) {
    $product_id = $_POST['id'];

    // Delete the product from the database
    $query = "DELETE FROM product WHERE product_id = '$product_id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Product deleted successfully
        echo 'Product deleted successfully.';
    } else {
        echo 'Error deleting product.';
    }
} else {
    echo 'Invalid request.';
}
?>

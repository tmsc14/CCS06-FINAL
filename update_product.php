<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted form data
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $category = $_POST['category'];

    // Perform the database update operation
    $query = "UPDATE product SET name = '$name', price = '$price', size = '$size', category = '$category' WHERE product_id = '$product_id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Update successful
        $response = array('success' => true, 'message' => 'Product updated successfully.');
        echo json_encode($response);
    } else {
        // Update failed
        $response = array('success' => false, 'message' => 'Failed to update product.');
        echo json_encode($response);
    }
} else {
    // Invalid request method
    $response = array('success' => false, 'message' => 'Invalid request method.');
    echo json_encode($response);
}
?>

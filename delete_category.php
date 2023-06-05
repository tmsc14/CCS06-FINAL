<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];

    $deleteQuery = "DELETE FROM category WHERE category_id = '$category_id'";
    $deleteResult = mysqli_query($connection, $deleteQuery);

    if ($deleteResult) {
        // Deletion successful
        echo "Category deleted successfully";
    } else {
        // Deletion failed
        echo "Error deleting category";
    }
}
?>

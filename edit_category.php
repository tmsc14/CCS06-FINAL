<?php
include 'config.php';

if (isset($_GET['id'])) {
    $category_id = $_GET['id'];

    // Fetch the category data from the database
    $fetchQuery = "SELECT * FROM category WHERE category_id = '$category_id'";
    $fetchResult = mysqli_query($connection, $fetchQuery);

    if (mysqli_num_rows($fetchResult) > 0) {
        $row = mysqli_fetch_assoc($fetchResult);
        $type = $row['type'];
    } else {
        // Category not found
        echo "Category not found.";
        exit;
    }   
} else {
    // Invalid category ID
    echo "Invalid category ID.";
    exit;
}

if (isset($_POST['update'])) {
    $newType = $_POST['type'];

    // Update the category data in the database
    $updateQuery = "UPDATE category SET type = '$newType' WHERE category_id = '$category_id'";
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        // Show a pop-up message using JavaScript
        echo "<script>alert('Category updated successfully.');</script>";
    } else {
        echo "Error updating category: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <rect>
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="dashboard" aria-current="page" href="dashboard.php">Dashboard</a>
                        <a class="category" href="category.php">Category</a>
                        <a class="product" href="product.php">Products</a>
                        <img class="img2" src="img/logo.png" alt="logo">
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation -->
        <br><br><br><br><br>
        <div class="form-container">
            <h1>Edit Category</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="type" class="form-label">Type of Drink</label>
                    <input type="text" name="type" class="form-control" id="type" value="<?php echo $type; ?>">
                </div>
                <input type="submit" name="update" class="form-control" value="Update">
            </form>
        </div>

        <script>
            // JavaScript code to show the pop-up message
            window.onload = function() {
                var updateButton = document.querySelector('input[name="update"]');
                updateButton.addEventListener('click', function() {
                    alert("Category updated successfully.");
                });
            };
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ddd;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #ffffff;
            color: #000000;
            width: 100%;
            border: 1px solid #ccc;
        }
        .btn-primary:hover {
        background-color: #00FF00;
    }
    </style>
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
        <img class=img2 src="img/logo.png" alt=logo>
      </div>
    </div>
  </div>
</nav>
<!-- navigation -->


<br><br><br><br><br><br><br>




    <?php
    include 'config.php';

    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];

        // Fetch the product details from the database
        $query = "SELECT * FROM product WHERE product_id = '$product_id'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="container">
                <h1>Edit Product</h1>
                <form id="update-form">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                    <div class="form-group">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="price" value="<?php echo $row['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="size" class="form-label">Size</label>
                        <select class="form-select" name="size" id="size">
                            <option value=""></option>
                            <option value="Regular" <?php echo ($row['size'] == 'Regular' ? 'selected' : ''); ?>>Regular</option>
                            <option value="Large" <?php echo ($row['size'] == 'Large' ? 'selected' : ''); ?>>Large</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category" id="category">
                            <option value=""></option>
                            <option value="Iced" <?php echo ($row['category'] == 'Iced' ? 'selected' : ''); ?>>Iced</option>
                            <option value="Hot" <?php echo ($row['category'] == 'Hot' ? 'selected' : ''); ?>>Hot</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" id="update-btn">Update</button>
                </form>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.getElementById("update-btn").addEventListener("click", function() {
                    var productID = document.querySelector("input[name=product_id]").value;
                    var nameInput = document.getElementById("name");
                    var priceInput = document.getElementById("price");
                    var sizeSelect = document.getElementById("size");
                    var categorySelect = document.getElementById("category");

                    if (nameInput.value.trim() === "" || priceInput.value.trim() === "") {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Please fill in all the fields."
                        });
                    } else {
                        Swal.fire({
                            icon: "question",
                            title: "Confirmation",
                            text: "Are you sure you want to update this product?",
                            showCancelButton: true,
                            confirmButtonText: "Yes",
                            cancelButtonText: "No"
                        }).then(function(result) {
                            if (result.isConfirmed) {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "update_product.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        var response = JSON.parse(xhr.responseText);
                                        if (response.success) {
                                            Swal.fire({
                                                icon: "success",
                                                title: "Success",
                                                text: "Product updated successfully."
                                            }).then(function() {
                                                location.reload();
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: "error",
                                                title: "Error",
                                                text: response.message
                                            });
                                        }
                                    }
                                };
                                xhr.send("product_id=" + encodeURIComponent(productID) + "&name=" + encodeURIComponent(nameInput.value) + "&price=" + encodeURIComponent(priceInput.value) + "&size=" + encodeURIComponent(sizeSelect.value) + "&category=" + encodeURIComponent(categorySelect.value));
                            }
                        });
                    }
                });
            </script>
            <?php
        } else {
            echo '<div class="error-message">Product not found.</div>';
        }
    } else {
        echo '<div class="error-message">Invalid request.</div>';
    }
    ?>

</body>
</html>

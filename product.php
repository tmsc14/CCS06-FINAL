<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="button.css">
    <style>

        .error {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ff0000;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            z-index: 9999;
        }
        rect{
            position: absolute;
            width: 1920px;
            height: 109px;
            left: 0px;
            top: 0px;

            background: #311D1D;
        }

        .img1{
            position: absolute;
            width: 1920px;
            height: 335px;
            left: 0px;
            top: 109px;

            background: url(image.png);
            mix-blend-mode: multiply;
        }

        .img2{
            position: absolute;
            width: 91.22px;
            height: 95.72px;
            left: 1798px;
            top: 13px;
        }

        nav{
            background: #311D1D;
        }
        .dashboard{
            position: absolute;
            width: 185px;
            height: 45px;
            left: 86px;
            top: 51px;

            font-family: 'Gabriela';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            line-height: 45px;
            text-decoration: none;

            color: #FFFFFF;
        }

        .product{
            position: absolute;
            width: 147px;
            height: 45px;
            left: 445px;
            top: 51px;
            text-decoration: none;

            font-family: 'Gabriela';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            line-height: 45px;

            color: #FFFFFF;
        }

        .category{
            position: absolute;
            width: 152px;
            height: 45px;
            left: 765px;
            top: 51px;
            text-decoration: none;

            font-family: 'Gabriela';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            line-height: 45px;

            color: #FFFFFF;
        }

        .success-message {
            display: none;
            position: relative;
            margin-top: 10px;
            background-color: #06e387;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
        }

        .error-message {
            display: none;
            position: relative;
            margin-top: 10px;
            background-color: #ff0000;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
        } 
        .edit-btn,
            .delete-btn {
                display: inline-block;
                padding: 6px 12px;
                font-size: 14px;
                font-weight: 500;
                line-height: 1.6;
                text-align: center;
                text-decoration: none;
                white-space: nowrap;
                cursor: pointer;
                user-select: none;
                background-color: #007bff;
                border: 1px solid #007bff;
                color: #ffffff;
                border-radius: 4px;
                transition: background-color 0.3s, border-color 0.3s;
            }

            .edit-btn:hover,
            .delete-btn:hover {
                background-color: #0056b3;
                border-color: #0056b3;
            }

            .delete-btn {
                margin-left: 8px;
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .delete-btn:hover {
                background-color: #ac303f;
                border-color: #ac303f;
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

<a class="logout-btn" href="index.php">Logout</a>

<br><br><br><br><br><br>

<!-- product form -->
<div class="form-container">
<form id=product-form action="product.php" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Product ID</label>
        <input type="text" name="product_id" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" id="formGroupExampleInput2">
    </div>

    <label for="form-select" class="form-label">Size</label>
    <select class="form-select" name="size" aria-label="Default select example">
        <option value="1"></option>
        <option value="2">Regular</option>
        <option value="3">Large</option>
    </select>
<br>
    <label for="form-select" class="form-label">Category</label>
    <select class="form-select" name="category" aria-label="Default select example">
        <option value="1"></option>
        <option value="2">Iced</option>
        <option value="3">Hot</option>
    </select>
<br>
    <input type="submit" name="submit" class="form-control">
</form>
</div>
<!-- product form -->

<br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>


<?php
include 'config.php';


if (isset($_REQUEST["submit"])) {
    if (empty($_REQUEST["product_id"]) || empty($_REQUEST["name"]) || empty($_REQUEST["price"]) || empty($_REQUEST["size"]) || empty($_REQUEST["category"])) {
        echo '<div class="error-message">Please fill in all the required fields.</div>';
    } else {
        $product_id = $_REQUEST["product_id"];
        $name = $_REQUEST["name"];
        $price = $_REQUEST["price"];
        $size = $_REQUEST["size"];
        $category = $_REQUEST["category"];

        $ins = "INSERT INTO product (product_id, name, price, size, category) VALUES ('$product_id','$name', '$price', '$size', '$category')";
        $query = mysqli_query($connection, $ins);

        if ($query) {
            echo '<div class="success-message">Product added successfully.</div>';
        } else {
            echo '<div class="error-message">Error adding product.</div>';
        }
    }
}

// Fetch all data from the database
$query = "SELECT * FROM product";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<table class="table">';
    echo '<thead><tr><th>Product ID</th><th>Name</th><th>Price</th><th>Size</th><th>Category</th><th>Actions</th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row["product_id"].'</td>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["price"].'</td>';
        echo '<td>'.$row["size"].'</td>';
        echo '<td>'.$row["category"].'</td>';
        echo '<td>';
        echo '<button class="edit-btn" onclick="editProduct('.$row["product_id"].')">Edit</button>';
        echo '<button class="delete-btn" onclick="deleteProduct('.$row["product_id"].')">Delete</button>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo '<div class="error-message">No products found.</div>';
}
?>


<script>
    // Show the success message if it exists
    var successMessage = document.querySelector('.success-message');
    if (successMessage) {
        successMessage.style.display = 'block';
    }

    // Show the error message if it exists
    var errorMessage = document.querySelector('.error-message');
    if (errorMessage) {
        errorMessage.style.display = 'block';
    }

    function editProduct(productId) {
        // Redirect to the edit page with the product ID
        window.location.href = 'edit_product.php?id=' + productId;
    }

    function deleteProduct(productId) {
        if (confirm("Are you sure you want to delete this product?")) {
            // Send an AJAX request to delete the product with the given ID
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Successful deletion, reload the page
                        location.reload();
                    } else {
                        console.error('Error deleting product.');
                    }
                }
            };
            xhr.open('POST', 'delete_product.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + productId);
        }
    }
</script>
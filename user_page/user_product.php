<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/cafe/product.css">
    <link rel="stylesheet" href="/cafe/button.css">
    <link rel="stylesheet" href="user_product.css">
    <style>
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
        .table {
            width: 75%;
            border-collapse: collapse;
            margin: 0 auto; /* Center the table horizontally */
        }
    
        .table th, .table td {
            padding: 8px;
            text-align: left;
        }
        
        .table th {
            background-color: #fff;
        }
        
        .table tbody tr {
            background-color: #fff;
        }
               
        .table tbody tr:hover {
            background-color: #f5f5f5;
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
        <a class="dashboard" aria-current="page" href="user_dashboard.php">Dashboard</a>
        <a class="category" href="user_category.php">Category</a>
        <a class="product" href="user_product.php">Products</a>
        <img class=img2 src="/cafe/img/logo.png" alt=logo>
      </div>
    </div>
  </div>
</nav>
<!-- navigation -->

<a class="logout-btn" href="/cafe/index.php">Logout</a>

<br><br><br><br><br><br>


<br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>


<?php
    define('DB_SERVER', "localhost");
    define('DB_USERNAME',"root");
    define('DB_PASSWORD',"");
    define('DB_NAME',"cafe");
            
    $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// Fetch all data from the database
$query = "SELECT * FROM product";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<table class="table">';
    echo '<thead><tr><th>Product ID</th><th>Name</th><th>Price</th><th>Size</th><th>Category</th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row["product_id"].'</td>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["price"].'</td>';
        echo '<td>'.$row["size"].'</td>';
        echo '<td>'.$row["category"].'</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo '<div class="error-message">No products found.</div>';
}
?>

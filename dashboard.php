<?php
@include '<login>config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login/css/style.css">
    <link rel="stylesheet" href="user_page/user_category.css">
    <style>
            rect{
            position: absolute;
            width: 1920px;
            height: 109px;
            left: 0px;
            top: 0px;

            background: #311D1D;
        }
      </style>
</head>
<body>
<rect>

<img class="img1" src="img/cafe.png" alt="">
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

<!-- profile -->

<div class="container" style="position: absolute; top: 450px; left: 325px;">
   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="index.php" class="btn btn-logout">logout</a>
   </div>
</div>

<!-- profile -->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- category table -->
    <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Category ID</th>
          <th>Type of Drink</th>
        </tr>
      </thead>
      <tbody>
        <!-- Fetch and display the categories from the database -->
        <?php
            define('DB_SERVER', "localhost");
            define('DB_USERNAME',"root");
            define('DB_PASSWORD',"");
            define('DB_NAME',"cafe");
            
            $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

            if (!$connection) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $selectQuery = "SELECT * FROM category";
            $result = mysqli_query($connection, $selectQuery);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['category_id'] . '</td>';
                echo '<td>' . $row['type'] . '</td>';
                echo '<td>';
                echo '</td>';
                echo '</tr>';
            }

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



mysqli_close($connection);
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
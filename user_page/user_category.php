<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous">
  <link rel="stylesheet" href="/cafe/category.css">
  <link rel="stylesheet" href="/cafe/style.css">
  <link rel="stylesheet" href="user_category.css">
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
          <img class="img2" src="/cafe/img/logo.png" alt="logo">
        </div>
      </div>
    </div>
  </nav>
  <!-- navigation -->

  <a class="logout-btn" href="/cafe/index.php">Logout</a>

  <br><br><br><br><br><br>

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

mysqli_close($connection);
?>

        
      </tbody>
    </table>
  </div>
  <!-- category table -->

<br><br><br>

<script src="category.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
</body>
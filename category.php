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
  <link rel="stylesheet" href="category.css">
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

  <a class="logout-btn" href="index.php">Logout</a>

  <br><br><br><br><br><br>
  <!-- category form -->
  <div class="form-container">
    <form action="category.php" method="post">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label"><b>Category ID</label>
        <input type="text" name="category_id" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Type of Drink</label>
        <input type="text" name="type" class="form-control" id="formGroupExampleInput2">
      </div>
      <input type="submit" name="submit" class="form-control">
    </form>
  </div>
  <!-- category form -->

<br><br><br>

  <!-- category table -->
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Category ID</th>
          <th>Type of Drink</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Fetch and display the categories from the database -->
        <?php
        include 'config.php';

        if(isset ($_REQUEST["submit"])){
          if (empty($_REQUEST["category_id"]) or empty($_REQUEST["type"])){
              echo '<div class="error-message">Please fill in all the required fields.</div>';
          }else{
              $category_id = $_REQUEST["category_id"];
              $type = $_REQUEST["type"];
      
              $ins = "insert INTO category (category_id, type) values ('$category_id', '$type')";
              $query = mysqli_query($connection,$ins);
              }
      }
        $selectQuery = "SELECT * FROM category";
        $result = mysqli_query($connection, $selectQuery);

        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td>' . $row['category_id'] . '</td>';
          echo '<td>' . $row['type'] . '</td>';
          echo '<td>';
          echo '<button class="delete-btn btn btn-danger" onclick="deleteCategory(' . $row['category_id'] . ')">Delete</button>';
          echo '<a class="edit-btn btn btn-primary" href="edit_category.php?id=' . $row['category_id'] . '">Edit</a>';
          echo '</td>';
          echo '</tr>';
        }
        ?>
        
      </tbody>
    </table>
  </div>
  <!-- category table -->

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

</html>

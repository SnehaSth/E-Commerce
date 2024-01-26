<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="style.css" rel="stylesheet" />

    <title>Assigment</title>
  </head>
  <body>
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">NeedBasics</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Contact</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Sections
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Fruits</a></li>
                  <li><a class="dropdown-item" href="#">Vegetables</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>

            <ul class="navbar-nav mb-2">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span class="badge bg-success"><?php echo $_SESSION['product_counter'] ?></span> Cart</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="col-md-12">
        <div class="small-container cart-page">
            <table>
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            <?php 
 if (isset($_SESSION['product_name'])){
    $filtered_array = array_unique($_SESSION['product_name']);
    $filtered_price = array_unique($_SESSION['product_price']);
    $filtered_image = array_unique($_SESSION['product_image']);
    $total=0.00;

foreach($filtered_array as $row){
  $item_repeated = array_count_values($_SESSION['product_name']);
  $find_position_in_array = array_search($row,$_SESSION['product_name']);
  echo "<tr>";
  echo '<td><img style="height: 100px;" src="'. $_SESSION['product_image'][$find_position_in_array].'" alt=""></td>';
  echo "<td>$row</td>";
  echo "<td>$item_repeated[$row]</td>";
  echo "<td> $ " . $_SESSION['product_price'][$find_position_in_array] . " CAD</td>";
  $subtotal = floatval($item_repeated[$row]) * floatval($_SESSION['product_price'][$find_position_in_array]);
    echo "<td> $ $subtotal CAD</td>";
  echo "<tr>";
  $total += $subtotal;

}
    echo "<tr>";
                        echo "<td colspan='3'></td>"; // Empty cells for alignment
                        echo "<td><strong>Total</strong></td>";
                        echo "<td><strong>$ $total CAD</strong></td>";
                        echo "</tr>";
 }


           ?>
            </tbody>
            </table>
        </div>

    

    <div class="footer">
        <p>&copy; 2024 Grocery store. All rights reserved.By Sneha Shrestha</p>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
    
</body>
</html>
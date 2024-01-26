<?php session_start(); 


if(isset($_POST['submit'])){

    if(isset($_SESSION['product_counter'])){
        $_SESSION['product_counter']=$_SESSION['product_counter']+1;
       
      
    }else{
        $_SESSION['product_counter']=1;
        $_SESSION['product_name']=array();
        $_SESSION['product_price']=array();
        $_SESSION['product_image']=array();
    }

    $_SESSION['product_name'][$_SESSION['product_counter']]=$_POST['product_name'];
    $_SESSION['product_price'][$_SESSION['product_counter']]=$_POST['product_price'];
    $_SESSION['product_image'][$_SESSION['product_counter']]=$_POST['product_image'];
    

    

}

if(isset($_POST['destroy'])){
session_destroy();
}




?>
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
                <a class="nav-link active" aria-current="page" href="cart.php">
                  <span class="badge bg-success"><?php  if(isset($_SESSION['product_counter'])){  echo $_SESSION['product_counter']; }else{ echo "0"; } ?></span> Cart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="hero-area">
      <div class="row">
        <div class="col-md-6 txt">
          <h1>Welcome to NeedBasics</h1>
          <br />
          <h4>This is a small shop in Toronto</h4>
          <br />
          <button class="btn btn-outline-success">Shop Now</button><br />
        </div>

        <div class="col-md-6 img">
          <img src="./img/grocery.jpg" class="img-fluid" alt="" />
        </div>
      </div>
    </div>

    <div class="product-area">
      <h2>Grocery Items</h2>
      <div class="row">
     <div class="col-md-4 milk">
         <img src="./img/milk.png" class="img-fluid" alt="" />
          <h4>Skimmed Milk</h4>
          <h5>CAD $4.50</h5>
          <form action="" method="POST">
          <input type="hidden" name="product_name" value="Skimmed Milk">
          <input type="hidden" name="product_price" value="4.50">
          <input type="hidden" name="product_image" value="./img/milk.png">
          <button class="btn btn-success" type="submit" name="submit" >Add To Cart</button>
          <button type="submit" name="destroy" >Reset</button>

          </form>
    </div>
    <div class="col-md-4 milk">
    <img src="./img/almondmilk.png" class="img-fluid" alt="" />
          <h4>Almond milk</h4>
          <h5>CAD $6.50</h5>
          <form action="" method="POST">
          <input type="hidden" name="product_name" value="Almond Milk">
          <input type="hidden" name="product_price" value="6.50">
          <input type="hidden" name="product_image" value="./img/almondmilk.png">
          <button class="btn btn-success" type="submit" name="submit" >Add To Cart</button>

          </form>
    </div>
    <div class="col-md-4 milk">
    <img src="./img/coke.webp" class="img-fluid" alt="" />
          <h4>Coke</h4>
          <h5>CAD $2.20</h5>
          <form action="" method="POST">
          <input type="hidden" name="product_name" value="Coke">
          <input type="hidden" name="product_price" value="2.20">
          <input type="hidden" name="product_image" value="./img/coke.webp">
          <button class="btn btn-success" type="submit" name="submit" >Add To Cart</button>
          <button type="submit" name="destroy" >Reset</button>

          </form>
    </div>
</div>

<div class="row">
    <div class="col-md-4 milk">
    <img src="./img/Apple.webp" class="img-fluid" alt="" />
          <h4>Apple</h4>
          <h5>CAD $5.15</h5>
          <form action="" method="POST">
          <input type="hidden" name="product_name" value="Apple">
          <input type="hidden" name="product_price" value="5.15">
          <input type="hidden" name="product_image" value="./img/Apple.webp">
          <button class="btn btn-success" type="submit" name="submit" >Add To Cart</button>

          </form>
    </div>
    <div class="col-md-4 milk">
    <img src="./img/Mango.jpg" class="img-fluid" alt="" />
          <h4>Skimmed Milk</h4>
          <h5>CAD $4.00</h5>
          <form action="" method="POST">
          <input type="hidden" name="product_name" value="Mango">
          <input type="hidden" name="product_price" value="4.00">
          <input type="hidden" name="product_image" value="./img/Mango.jpg">
          <button class="btn btn-success" type="submit" name="submit" >Add To Cart</button>

          </form>
    </div>
    <div class="col-md-4 milk">
    <img src="./img/strawberry.webp" class="img-fluid" alt="" />
          <h4>Strawberry</h4>
          <h5>CAD $3.50</h5>
          <form action="" method="POST">
          <input type="hidden" name="product_name" value="Strawberry">
          <input type="hidden" name="product_price" value="3.50">
          <input type="hidden" name="product_image" value="./img/strawberry.webp">
          <button class="btn btn-success" type="submit" name="submit" >Add To Cart</button>

          </form>
    </div>
</div>


      
      </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Grocery store. All rights reserved.By Sneha Shrestha</p>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>






<?php 
 
if(isset($_SESSION['product_name'])){

    $filtered_array=array_unique($_SESSION['product_name']);
 
    foreach($filtered_array as $row){

        $item_repeated=array_count_values($_SESSION['product_name']);

         echo $row."---".$item_repeated[$row]."<br>";

        
    }

}




?>
    
</body>
</html>
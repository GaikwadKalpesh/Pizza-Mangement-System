<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Index</title>
  </head>
  <body>
    
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\bell pepper pizza.jpg"  class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">bell Paper Pizza</h5>
                <p class="card-text">Price: Rs.150</p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="pepper_pizza">
                <input type="hidden" name="Price" value="150">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\california .jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">california Pizza</h5>
                <p class="card-text">Price: Rs.200</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="california_pizza">
                <input type="hidden" name="Price" value="200">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\cheesy vegetable pizza1.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">cheesy vegetable pizza</h5>
                <p class="card-text">Price: Rs.149</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="cheesy_vegetable_pizza">
                <input type="hidden" name="Price" value="149">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\chicago pizza1.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">chicago pizza</h5>
                <p class="card-text">Price: Rs.99</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="chicago_pizza">
                <input type="hidden" name="Price" value="99">
              
              </div>
            </div>
          </form>
        </div>
        <br>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\deep-dish-pizza.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">Deep-dish-pizza</h5>
                <p class="card-text">Price: Rs.125</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="Deep_dish_pizza">
                <input type="hidden" name="Price" value="125">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\detroit pizza.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">Detroitt Pizza</h5>
                <p class="card-text">Price: Rs.89</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="Detroitt_pizza">
                <input type="hidden" name="Price" value="89">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\four cheese pizza.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">cheese pizza</h5>
                <p class="card-text">Price: Rs.111</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="cheese_pizza">
                <input type="hidden" name="Price" value="111">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\greek pizza.webp" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">greek Pizza</h5>
                <p class="card-text">Price: Rs.199</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="greek_pizza">
                <input type="hidden" name="Price" value="199">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\magarite pizza.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">Magarite Pizza</h5>
                <p class="card-text">Price: Rs.199</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="magarite_pizza">
                <input type="hidden" name="Price" value="149">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\new york-style pizza.webp" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">new york-style Pizza</h5>
                <p class="card-text">Price: Rs.129</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="new_york_style_pizza">
                <input type="hidden" name="Price" value="129">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\rustic pizza.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">Rustic Pizza</h5>
                <p class="card-text">Price: Rs.79</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="rustic_pizza">
                <input type="hidden" name="Price" value="79">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="scary-catering-pizza-other-horror-snacks-halloween-198380543.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">scary-catering-pizza</h5>
                <p class="card-text">Price: Rs.109</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="scary_catering_pizza">
                <input type="hidden" name="Price" value="109">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\sicilian pizzaa.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">sicilian Pizza</h5>
                <p class="card-text">Price: Rs.179</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="silcilian_pizza">
                <input type="hidden" name="Price" value="179">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\tandoori paneer piza.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">tandoori paneer Pizza</h5>
                <p class="card-text">Price: Rs.250</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="tandoori_paneer_pizza">
                <input type="hidden" name="Price" value="250">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\tomato pizza copy.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">tomato Pizza</h5>
                <p class="card-text">Price: Rs.149</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="tomato_pizza">
                <input type="hidden" name="Price" value="149">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\Elk-Burger.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">EIK Burger</h5>
                <p class="card-text">Price: Rs.120</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="EIK_burger">
                <input type="hidden" name="Price" value="120">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\IMG-20210810-WA0005s.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">Lamb and Tomato </h5>
                <p class="card-text">Price: Rs.270</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="Lamb_burger">
                <input type="hidden" name="Price" value="270">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\IMG-20210810-WA0009.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">cheese chicken burger  </h5>
                <p class="card-text">Price: Rs.270</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="cheese_burger">
                <input type="hidden" name="Price" value="250">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\IMG-20210810-WA0010.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">black been burger </h5>
                <p class="card-text">Price: Rs.220</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="black_been_burger">
                <input type="hidden" name="Price" value="220">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\IMG-20210810-WA0011.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">Curnchy chiken burger </h5>
                <p class="card-text">Price: Rs.120</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="curnchy_burger">
                <input type="hidden" name="Price" value="120">
              
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
           <div class="card" >
             <img src="images\IMG-20210810-WA0012.jpg" class="card-img-top">
             <div class="card-body text-center">
                <h5 class="card-title">Corn burger </h5>
                <p class="card-text">Price: Rs.99</p> 
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="corn_burger">
                <input type="hidden" name="Price" value="99">
              
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
   </body>
 
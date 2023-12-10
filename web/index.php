<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            background-color: #ECFFDC;
        }
        header {
            
        z-index: auto;
        width: 100%;
        position:static;
        }
        .btn{
            padding-top: 90px;
        }

 .mission1 {
    text-align: center;
    max-width: 800px; 
    margin: 0 auto; 
    padding: 20px;
}

.mission-head {
    font-size: 60px; 
}
.mission-head span {
    color: #32CD32;
}

.mission-txt {
    margin-top: 30px; 
    font-size: 18px;
}
#cart-icon {
    font-size: 1.8rem;
    cursor: pointer;
}
.cart .item{
    transition: 0.5s;
    border-bottom: 1px solid var(--light);
}
.cart{
    position: fixed;
    top: 0;
    right: -100%;
    width: 360px;
    min-height: 100vh;
    padding: 20px;
    background: #C8F7C8;
    box-shadow: -2px 0 4px hsl(0 4% 15% /10%);
    z-index: 999;
    transition: 0.3s;
    overflow-y: scroll;
    height: 500px;

}
.cart.active{
    right: 0;
}
.cart-img{
    width: 35%;
    height: 35%;
    object-fit: contain;
    padding: 10px;
}
.detail-box{
    display: grid;
    row-gap: 0.5rem;

}
.cart-product-title{
    font-size: 1rem;
    text-transform: uppercase;
}
.cart-price{
    font-weight: 500;

}
.cart-quantity{
    border: 1px solid var(--text-color);
    outline-color: green ;
    width: 2.4rem;
    text-align: center;
    font-size: 1rem;

}
.cart-remove{
    font-size: 24px;
    color: var(red);
    cursor: pointer;

}
.total{
    display: flex;
    justify-content: flex-end;
    margin-top: 1.5rem;
    border-top: 1px solid var(--text-color);

}
.total-title{
    font-size: 1rem;
    font-weight: 600;
}
.total-price{
    margin-left: 0.5rem;

}
.btn-buy{
    display: flex;
    margin: 1.5rem auto 0 auto;
    padding: 12px 20px;
    border: none;
    background: lightgreen;
    color: black;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;

}
.btn-buy:hover{
    background-color:red;
}
#close-cart{
    position: absolute;
    top: 1rem;
    right:0.8rem;
    color: black;
    cursor:pointer;

}
.cart-title{
    text-align: center;
    font-size: 1.5rem;
    font-weight: 600;
}
.cart-box{
    display: grid;
    grid-template-columns: 32% 50% 18%;
    align-items: center;
    gap: 1rem;

}
.section-title {
    font-size: 60px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 1.5rem;
    margin-top: 7rem;
}
section .hometxt h1{
    position: relative;
    margin-top: 50px;
    text-align: left;
    font-size: 70px;
    color: black;
}
section header h1 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    text-align: center;
  }
  section .hometxt p{
    width: 600px;
    position: absolute;
    top: 60%;
    left: 4%;
    line-height: 26px;
    text-align: justify;
}
.section-title span {
    color:#32CD32 ;
}
.shop-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-items: center;
    padding: 20px;
    
}
header .shopping{
    position: relative;
    text-align: right;
}
header .shopping img{
    width: 40px;
}
header .shopping span{
    background: red;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    position: absolute;
    top: -5px;
    left: 80%;
    padding: 3px 10px;
}


.product-box {
    text-align: center;
    position: relative;
}
.product-box :hover{
    padding: 10px;
    border: 1px solid var(--text-color);
    transition: 0.4s;
}

.product-img {
    width: 100%;  Ensure all images have the same width 
    height: auto;  Maintain the aspect ratio of the images 
    
}

.product-title {
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
}

.price {
    font-size: 16px;
    color: #555;
    font-weight: 600;
}

.product-img {
    width: 100%;
    height: auto;
    margin-bottom: 0.5rems;
}
footer {
  background-color: #6CB26C;
  color: #fff;
  padding: 20px;
  text-align: center;
  width: 100%;
  margin: 0 auto;
  padding: 20px;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto
}

.footer-item {
  width: 33.3%;
  padding-top: 1px;
}

.footer-item h4 {
  margin-bottom: 10px;
}

.footer-item p {
  margin-bottom: 0;
}

.footer-item a {
  color: black;
  text-decoration: none;
}



    </style>
</head>
<body>
    <section>
        <header>
          <a class="logo" href="#"><img src="EcoShop (2).png" alt="Logo" width="100px" height="100px"></a>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">Sign up</a></p>
        
    <?php endif; ?> </li>
            <i class='bx bxs-shopping-bag' id = "cart-icon"></i>
          </ul>
          <div class= "cart">
            <h2 class="cart-title">My Cart</h2>
            <div class="cart-content">

         </div>
                <div class ="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">Rs0</div>                   
                </div>
                <button type ="button" class="btn-buy">Buy Now</button>

                <i class='bx bx-x' id="close-cart"></i>
          </div>
        </header>
       

        <div class="hometxt"id = "home">
            <h1>SHOP ALL YOUR FAVOURITE<br><span>ECO PRODUCTS</span> IN ONE<br>PLACE</h1>
            <!--<p>Welcome to our Eco Shop, your one-stop destination for all your sustainable and environmentally friendly needs. 
                We are passionate about offering a curated selection of high-quality products that are ethically sourced and designed with the planet in mind. From eco-friendly home essentials to organic beauty products and eco-conscious fashion, we strive to provide you with options that help reduce your carbon footprint without compromising on style or functionality.<br><br>Start shopping consciously today!</p>
    -->
        </div>

        <div class="background_img">
            <img src="background.png" alt="">
        </div>
        <div class="background_img2">
            <img src="Ecoproduct.png" width="150px" alt="">
        </div>
        <div class="btn">
            <p class="shop" onclick="scrollToProducts()">Shop Now</p>
        </div>
      </section>
      

      <!--About section-->

      <div class="about">
        <div class="box">
            <div class="card">
                <img src="about1.png" alt="img1">
            </div>
            <div class="card">
                <img src="about2.png" alt="img2">
            </div>
            <div class="card">
                <img src="about3.png" alt="img3">
            </div>
        </div>
     
        <div class="mission1" id = "about">
        <h1 class="mission-head">About<span> Us</span></h1>
        <p class="mission-txt">Eco Shop is an online store that sells sustainable and eco-friendly products. We believe that everyone has a role to play in protecting the environment, and we are committed to providing our customers with products that are good for the planet.

<br>We source our products from a variety of ethical and sustainable suppliers, and we work hard to ensure that our products are made with the least amount of environmental impact. We also offer a variety of recycling and composting programs, so that our customers can easily dispose of their waste in a responsible way.

<br>We believe that eco-friendly products should be accessible to everyone, and we offer our products at competitive prices. We also offer a variety of financing options, so that our customers can afford to make the switch to sustainable products.

<br>We are committed to providing our customers with a positive shopping experience, and we offer a variety of customer service options. We are always available to answer questions and help our customers find the products they need.</p>   
</div>
        
    <div class="mission1">
        <h1 class="mission-head">Our <span>Mission</span></h1>
        <p class="mission-txt">At EcoShop, our mission is to promote sustainability and environmental consciousness by offering a
            curated selection of eco-friendly products. We believe that every small step towards adopting eco-conscious practices can make a significant impact on the health of our planet.<br> We are dedicated to supporting eco-conscious brands and local artisans who prioritize environmentally friendly production methods and materials. By showcasing their products on EcoShop, we strive to create a community of like-minded individuals who share our passion for protecting the environment.

Together, we can make a positive difference and foster a sustainable future for generations to come. Join us on this journey towards a greener world, one eco product at a time.</p>
    </div>
    


      <!--products section-->

      <div class="shop-container" id = "products">
        <h2 class="section-title">Shop <span>Products</span></h2>
   

            <div class = "shop-content">
                <div class = "product-box">
                <img src="product images\bottle.jpg" alt="" class = "product-img">
                <h2 class = "product-title">Reusable Water Bottle BPA free</h2>
                <span class ="price">Rs700</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>  
            <div class = "product-box">
                <img src="product images\bag.png" alt="" class = "product-img">
                <h2 class = "product-title">Organic Cotton Tote Bag</h2>
                <span class ="price">Rs600</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
                
            </div>    
            <div class = "product-box">
                <img src="product images\brush.jpg" alt="" class = "product-img">
                <h2 class = "product-title">Bamboo Toothbrushes</h2>
                <span class ="price">Rs300</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
                
            </div>    
            <div class = "product-box">
                <img src="product images\cleaner.jpg" alt="" class = "product-img">
                <h2 class = "product-title">Eco-Friendly Cleaning Supplies</h2>
                <span class ="price">Rs700</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
               
            </div>    
            <div class = "product-box">
                <img src="product images\wraps.jpeg" alt="" class = "product-img">
                <h2 class = "product-title">Beeswax Wraps</h2>
                <span class ="price">Rs900</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
               
            </div>    
            <div class = "product-box">
                <img src="product images\bulbs.jpg" alt="" class = "product-img">
                <h2 class = "product-title">LED Bulb energy efficient</h2>
                <span class ="price">$500</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
               
            </div>    
            <div class = "product-box">
                <img src="product images\books.jpg" alt="" class = "product-img">
                <h2 class = "product-title">Recycled Notebooks</h2>
                <span class ="price">Rs400</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
                
            </div>    
            <div class = "product-box">
                <img src="product images\charger.jpg" alt="" class = "product-img">
                <h2 class = "product-title">Solar-Powered Charger</h2>
                <span class ="price">Rs1200</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
                
            </div>    
            <div class = "product-box">
                <img src="product images\trash.jpg" alt="" class = "product-img">
                <h2 class = "product-title">Compostable Trash bags</h2>
                <span class ="price">Rs300</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
                
            </div>   
            <div class = "product-box">
                <img src="product images\cutlery.jpg" alt="" class = "product-img">
                <h2 class = "product-title">Bio degradable cutlery</h2>
                <span class ="price">Rs800</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>     
        </div>
    </div>
    <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Contact Eco-Shop</h4>
        <p>
          <strong>Phone:</strong> 123-456-7890<br>
          <strong>Email:</strong> ecoshop@gmail.com<br>
          <strong>Address:</strong> 123 Main Street, colombo 002
        </p>
      </div>
      <div class="col-md-4">
        <h4>Follow Us</h4>
        <ul class="list-unstyled">
          <li><a href="https://www.facebook.com/example">Facebook</a></li>
          <li><a href="https://twitter.com/example">Twitter</a></li>
          <li><a href="https://www.instagram.com/example">Instagram</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Copyright</h4>
        <p>By D.P.K Perera for WAD (it20779498) .</p>
      </div>
    </div>
    </div>
</footer>
<script>
    function scrollToProducts() {
  const productsSection = document.getElementById("products");
  const headerOffset = 100;
  const elementPosition = productsSection.getBoundingClientRect().top;
  const offsetPosition = elementPosition - headerOffset;

  window.scrollTo({
    top: offsetPosition,
    behavior: "smooth",
  });
}

document.addEventListener("DOMContentLoaded", function () {
  const shopNowButton = document.querySelector('.btn');

  shopNowButton.addEventListener("click", scrollToProducts);
});
</script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title> All Product | INFOTECH CLOTHING</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
 
  .category-container {
      text-align: center;
      padding: 10px;
      background-color: #e74c3c; /* Light red background */
      box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      transition: height 0.3s ease-in-out;
     
  }

  .minimized {
      height: 50px;
      overflow: hidden;
  }

  .category-btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 1px;
      font-size: 16px;
      text-decoration: none;
      color: #fff;
      background-color: #c0392b; /* Darker red */
      border-radius: 2px;
      cursor: pointer;
      transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
  }

  .category-btn:hover {
      transform: scale(1.05);
      background-color: #992d22; /* Darker background on hover */
  }
  
</style>
</head>
    <body>
  
      <div class="container">
        <div class="navbar">
        <div class="logo">
          <img src="logo.png" width="75px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href=""></a></li>
            <li><a href="Product.php">Product</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="acc.php">Account</a></li>
            <?php
                    // Check if a user is logged in
                    session_start();
                    if (isset($_SESSION['username'])) {
                        // Display the logged-in username
                        echo '<li><span>' . $_SESSION['username'] . '</span></li>';
                        // Logout
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }
            ?>
          </ul>
        </nav>

        <!-- cart -->
        <div class="cart-icon" onclick="toggleCart()">
          <i class="fas fa-shopping-cart"></i>
          <span class="cart-count" id="cartCount">0</span>
        </div>

        <div class="cart-container" id="cartContainer">
          <div class="cart-header">
            <h3 class="cart-title" id="cartTitle">My Cart</h3>
              <button class="close-btn" onclick="toggleCart()">&times;</button>
              <span class="cart-count" id="cartCountHeader">0</span>
          </div>
          <div class="cart-items" id="cartItems">
          </div>
          <div class="checkout-button-container">
            <button class="checkout-button" onclick="checkout()">Checkout</button>
          </div>
          
        </div>

        <img src="menu.png" class="menu-icon"  onclick="menutoggle()">
     
      </div>
      </div>
     
      <div class="category-container minimized">
        <a href="Product.php" class="category-btn" onclick="selectCategory('All Products')">All Products</a>
        <a href="Clothes.php" class="category-btn" onclick="selectCategory('T-Shirt')">T-Shirt</a>
        <a href="Sando.php" class="category-btn" onclick="selectCategory('Sando')">Sando</a>
        <a href="Hoodies.php" class="category-btn" onclick="selectCategory('Hoodies')">Hoodies</a>
        <a href="Shorts.php" class="category-btn" onclick="selectCategory('Shorts')">Shorts</a>
        <a href="Hat.php" class="category-btn" onclick="selectCategory('Hat')">Hat</a>
        <a href="Pillow.php" class="category-btn" onclick="selectCategory('Pillow')">Pillow</a>
        <a href="Mug.php" class="category-btn" onclick="selectCategory('Mug')">Mug</a>
        <!-- Add more categories as needed -->
    </div>
    
    <!-- Content of your website goes here -->
    <div class="row">
      <div class="col-4">
        <img src="featured 1.jpeg">
        <h4>White Couple Coders</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          </div>
        <p>140</p>
        <button class="addToCart" onclick="addToCart('White Couple Coders', 140, 'featured 1.jpeg', 'plus')">Add to Cart</button>
      </div>
      
      <div class="col-4">
        <img src="featured 2.jpeg">
        <h4> Black Couple Coders</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          </div>
        <p>140</p>
        <button class="addToCart" onclick="addToCart('Black Couple Coders', 140, 'featured 2.jpeg', 'plus')">Add to Cart</button>
      </div>
      
       <div class="col-4">
        <img src="featured 3.jpeg">
        <h4> Black Couple Coders(With Brand Name) </h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          </div>
        <p>150</p>
        <button class="addToCart" onclick="addToCart('Black Couple Coders (With Brand Name)', 150, 'featured 3.jpeg', 'plus')">Add to Cart</button>
      </div>
      
       <div class="col-4">
         <img src="featured 4.jpeg">
         <h4> White Couple Coders (With Brand Name)</h4>
         <div class="rating">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star-half"></i>
         </div>
         <p>150</p>
         <button class="addToCart" onclick="addToCart('White Couple Coders (With Brand Name)', 150, 'featured 4.jpeg', 'plus')">Add to Cart</button>
       </div>

       <div class="row">
      <div class="col-4">
        <img src="1.png">
        <h4>Cheezy Fire Wall</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          </div>
        <p>100</p>
        <button class="addToCart" onclick="addToCart('Cheezy Fire Wall', 100, '1.png', 'plus')">Add to Cart</button>
      </div>
      
      <div class="col-4">
        <img src="2.png">
        <h4>Worm Keller</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          </div>
        <p>120</p>
        <button class="addToCart" onclick="addToCart('Wormm Keller', 120, '2.png', 'plus')">Add to Cart</button>
      </div>
      
       <div class="col-4">
        <img src="3.png">
        <h4> Elite Phishing</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          </div>
        <p>250</p>
        <button class="addToCart" onclick="addToCart('Elite Phishing', 2500, '3.png', 'plus')">Add to Cart</button>
      </div>
      
       <div class="col-4">
         <img src="4.png">
         <h4> Alpha Trojan</h4>
         <div class="rating">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star-half"></i>
         </div>
         <p>130</p>
         <button class="addToCart" onclick="addToCart('Alpha Trojan', 130, '4.png', 'plus')">Add to Cart</button>
       </div>
     </div>
     
      <div class="row">
        <div class="col-4">
          <img src="5.png">
          <h4> Atomic 01</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>150</p>
          <button class="addToCart" onclick="addToCart('Atomic 01', 150, '5.png', 'plus')">Add to Cart</button>
        </div>
     
        <div class="col-4">
          <img src="6.png">
          <h4> Teamplay Coders </h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>200</p>
          <button class="addToCart" onclick="addToCart('Teamplay Coders', 200, '6.png', 'plus')">Add to Cart</button>
        </div>
     
        <div class="col-4">
          <img src="7.png">
          <h4> Final Robocap Boss</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>150</p>
          <button class="addToCart" onclick="addToCart('Final Robocap Boss', 150, '7.png', 'plus')">Add to Cart</button>
        </div>
     
        <div class="col-4">
          <img src="8.png">
          <h4> Ninja Thiefaklong</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>
          <p>150</p>
          <button class="addToCart" onclick="addToCart('Ninja Thiefaklong', 150, '8.png', 'plus')">Add to Cart</button>
        </div>
      </div>
       <div class="row">
         <div class="col-4">
           <img src="9.png">
           <h4> Darling at home </h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
           </div>
           <p>180</p>
           <button class="addToCart" onclick="addToCart('Darling at home', 180, '9.png', 'plus')">Add to Cart</button>
         </div>
      
         <div class="col-4">
           <img src="10.png">
           <h4> Proffesor X-Code </h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
           </div>
           <p>190</p>
           <button class="addToCart" onclick="addToCart('Proffesor X-Code', 190, '10.png', 'plus')">Add to Cart</button>
         </div>
      
         <div class="col-4">
           <img src="11.png">
           <h4>Happy Skatertask</h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
           </div>
           <p>150</p>
           <button class="addToCart" onclick="addToCart('Happy Skatertask', 100, '11.png', 'plus')">Add to Cart</button>
         </div>
      
         <div class="col-4">
           <img src="12.png">
           <h4> Pythonatics</h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half"></i>
           </div>  
           <p>300</p>
           <button class="addToCart" onclick="addToCart('Pythonatics', 300, '12.png', 'plus')">Add to Cart</button>
         </div>

         <div class="row">
         <div class="col-4">
          <img src="Pacnonymous.jpg">
          <h4> Pacnonymous</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>  
          <p>130</p>
          <button class="addToCart" onclick="addToCart('Pacnonymous', 130, 'Pacnonymous.jpg', 'plus')">Add to Cart</button>
        </div>
        <div class="col-4">
          <img src="Sure No Error.jpg">
          <h4> Locked On</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>  
          <p>130</p>
          <button class="addToCart" onclick="addToCart('Locked On', 100, 'Sure No Error.jpg', 'plus')">Add to Cart</button>
        </div>
        <div class="col-4">
          <img src="Html loves u.jpg">
          <h4> Html loves u</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>  
          <p>150</p>
          <button class="addToCart" onclick="addToCart('Html loves u', 150, 'Html loves u.jpg', 'plus')">Add to Cart</button>
        </div>
        <div class="col-4">
          <img src="Javaparel.jpg">
          <h4> Javaparel</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>  
          <p>150</p>
          <button class="addToCart" onclick="addToCart('Javaparel', 150, 'Javaparel.jpg', 'plus')">Add to Cart</button>
        </div>

        <div class="row">
        <div class="col-4">
          <img src="Watdahil.jpg">
          <h4> Watdahil</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>  
          <p>200</p>
          <button class="addToCart" onclick="addToCart('Watdahil', 200, 'Watdahil.jpg', 'plus')">Add to Cart</button>
        </div>

        <div class="col-4">
                  <img src="mug.jpg">
                  <h4> Sure No Error</h4>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <p>200</p>
                  <button class="addToCart" onclick="addToCart('Sure No Error', 200, 'mug.jpg', 'plus')">Add to Cart</button>
                </div>
     </div>
    </div>
  </div>
  </div>
  </div>
    
    <script>
        function selectCategory(category) {
            alert('You selected ' + category);
            // You can replace the alert with your desired functionality, such as navigating to a new page or updating content.
        }
    </script>
       
         
    <!-- Footer Section -->
    <footer>
      <div class="footer-container">
          <div class="footer-social">
            <a href="https://www.facebook.com/JMBaniqued132220?mibextid=ZbWKwL" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/JayJay107167?t=lEj-N98HlXjKHOfVPV4ozg&s=09" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/aight_josh1once" class="social-icon"><i class="fab fa-instagram"></i></a>
          </div>
          <p>&copy; 2024 Infotech Clothing. All rights reserved.</p>
      </div>
    </footer>
    <<script>
      var MenuItems = document.getElementById("MenuItems");
   
      MenuItems.style.maxHeight = "0px";
      
      function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
          MenuItems.style.maxHeight = "200px";
        }
        else
        {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

<script>
  var cartContainer = document.getElementById("cartContainer");
  var cartCount = 0;

  function toggleCart() {
    var cartContainer = document.getElementById("cartContainer");
    cartContainer.style.display = (window.getComputedStyle(cartContainer).display === "block") ? "none" : "block";

    var cartCountHeader = document.getElementById("cartCountHeader");
    cartCountHeader.style.display = (cartContainer.style.display === "block") ? "none" : "inline";
  }

    function addToCart(itemName, itemPrice, imageUrl, action) {
        if (action === 'plus') {
            cartCount++;
        } else {
            cartCount--;
        }
        updateCartCount();

        var cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");
        cartItem.innerHTML = `
            <img src="${imageUrl}" alt="${itemName}">
            <span>${itemName} - ₱${itemPrice}</span>
            <button class="remove-btn" onclick="removeFromCart(this)"><i class="fas fa-trash-alt"></i></button>
        `;
        document.getElementById("cartItems").appendChild(cartItem);
    }

    function removeFromCart(item) {
        item.parentElement.remove();
        cartCount--;
        updateCartCount();
    }

  function updateCartCount() {
      var countElement = document.getElementById("cartCount");
      var cartCountHeader = document.getElementById("cartCountHeader");

      countElement.textContent = cartCount;
      cartCountHeader.textContent = cartCount;
  }
</script>

<script>
  function submitForm() {
      alert("Message sent!");
  }

  function checkout() {
      alert("Done Checkout");
  }

</script>


    </body>
</html>
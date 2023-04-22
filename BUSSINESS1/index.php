<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>SHREE JI GEMS</title>
</head>
<body>
<section id = "header" >
        <a href="index.html"><img src="photos/bg1.png" length="50" width="100" class = "logo" alt=""></a>
            <div class="contioner">
            <ul id = "navbar">
                <li><a class="active" href="index.php"> HOME</a></li>
                <li><a href="shop.php">  SHOP</a></li>
                <li><a href="login.php" class="lgn-bt">LOGIN</a></li>
                <!--<li><a href="login.html" class="lgn-bt"> LOGIN</a></li>-->
                <li><a href="about.php">  ABOUT</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                  <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
          <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
          <i id="bar" class="fas fa-outdent"> </i>
        </div>
    </section>

    <!-- login signup html css and js -->






    <!-- login/signup popup container -->
  <!-- <div class="popup-container" id="popup-container">
    <div class="popup">
      <div class="tabs">
        <button class="tab active" data-tab-target="#login-form-element">Login</button>
        <button class="tab" data-tab-target="#signup-form-element">Sign up</button>
      </div>
      <form class="tab-content active" id="login-form-element" onsubmit="login(event)" action="login.php" method="post">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="paswd" required>
        <button type="submit">Login</button>
      </form>
      <form class="tab-content" id="signup-form-element" onsubmit="signup(event)" action="signup.php" method="post">
        <h2>Signup</h2>
      <form id="signup-form-element" method="POST" onsubmit="signup(event)" action="signup.php"  method="post">
        <div class="form-group">
            <label for="signup-name">Username</label>
            <input type="text" name="username" id="signup-name" placeholder="Username">
          </div>

        
        <div class="form-group">
          <label for="signup-email">Email</label>
          <input type="email" id="signup-email" name="Email" required>
        </div>
        <div class="form-group">
            <label for="signup-number">Mobile no.</label>
            <input type="numebr" id="signup-number" name="contact" required>
       
        </div>
        <div class="form-group">
            gender :
            Male <input type="radio" name="gender" class="gender" value="M"> Female <input type="radio"
                name="gender" class="gender" value="F">
        </div>
        <div class="form-group">
            <label for="paswd" class="title">password:</label>
            <input type="password" class="paswd" name="paswd" placeholder="password">
            
        </div>
        <div class="form-group">
            <label for="paswd" class="title"> confirm:</label>
            <input type="password" class="paswd" name="confirmpaswd" placeholder="password">
        </div>
        <br><button type="submit" name="sb" class="submitbtn">submit</button></br>
        <button id="close-popup-button">&times;</button>
      </form>
</form>
    </div>
  </div>
  <style>
    /* login/signup popup container styles */
.popup-container {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}

.popup {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.tabs {
  display: flex;
  margin-bottom: 20px;
}

.tab {
  padding: 10px 20px;
  background-color: cyan;
  color: white;
  font-weight: bold;
  cursor: pointer;
  border: none;
  border-radius: 5px 5px 0 0;
}

.tab.active {
  background-color: white;
  color: black;
}

.tab-content {
  display: none;
}

.tab-content.active {
  display: block;
}

#close-popup-button {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  color: gray;
  border: none;
  background-color: transparent;
  cursor: pointer;
}

/* login/signup form styles */
form {
  display: flex;
  flex-direction: column;
}

h2 {
  margin-top: 0;
}

label {
  margin-bottom: 5px;
}

input {
  margin-bottom: 10px;
  padding: 5px;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
}

button[type="submit"] {
  margin-top: 10px;
  padding: 10px;
  background-color: cyan;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: white;
  color: black;
}

/* media query to adjust popup container width for smaller screens */
@media screen and (max-width: 480px) {
  .popup {
    width: 80%;
  }
}

  
  </style> 
  <script>// get elements
    const loginBtn = document.querySelector('.lgn-bt');
    const popupContainer = document.querySelector('.popup-container');
    const popup = document.querySelector('.popup');
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
    const closePopupBtn = document.querySelector('#close-popup-button');
    const loginForm = document.querySelector('#login-form');
    const signupForm = document.querySelector('#signup-form');
    
    // show login/signup popup
    loginBtn.addEventListener('click', () => {
      popupContainer.style.display = 'block';
      popup.classList.add('active');
      tabs[0].classList.add('active');
      tabContents[0].classList.add('active');
    });
    
    // close login/signup popup
    closePopupBtn.addEventListener('click', () => {
      popupContainer.style.display = 'none';
    });
    
    // switch between login and signup tabs
    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => {
        tabs.forEach(tab => tab.classList.remove('active'));
        tab.classList.add('active');
        tabContents.forEach(content => content.classList.remove('active'));
        tabContents[index].classList.add('active');
      });
    });
    
    // handle login form submission
    loginForm.addEventListener('submit', e => {
      e.preventDefault();
      // perform login validation here
      // if login is successful, redirect to index.html
      window.location.href = 'index.html';
    });
    
    // handle signup form submission
    signupForm.addEventListener('submit', e => {
      e.preventDefault();
      // perform signup validation here
      // if signup is successful, show success message and clear form
      alert('Signup successful!');
      signupForm.reset();
    });
    
    </script>   
    


 -->






   <section id="hero1">
    <div class="maindiv">
    <h1 >Super value deals On all products!</h1>
    <p>Get up to 40% off on your first purchase</p>
    <button class="button">Shop now</button>
</div>
   </section>
   <section id="product1" class="sectionp1">
    <h2>Featured Products</h2>
    <p>New Hand Picked Desgins</p>
    <div class="pro-contioner">
        <div class="pro1">
            <img src="https://lauriedonovan.com/wp-content/uploads/2015/04/Ruby-1s-291197.jpg" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/stone.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/2.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/3.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/4.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/5.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/16.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/19.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
    </div>
   </section>
   <section id="banner" class="sectionm1">
    <h1><span>7</span> days return policy with easy Exchanges!</h1>
    <h2>Top Deals up to <span>70%</span> off</h2>
    <button class="normal">Explore now</button>
   </section>
   <section id="product1" class="sectionp1">
    <h2>New Arrivals </h2>
    <p>Gems Which Will Make You Fall In Love</p>
    <div class="pro-contioner">
        <div class="pro1">
            <img src="images/25.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/20.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/10.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/11.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/12.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/13.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/14.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
        <div class="pro1">
            <img src="images/15.jfif" alt="">
            <div class="des">
                <span>Ruby</span>
                <h5>1.07 carat Round Cut,6.07mm</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$780</h4>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>


            </div>
        </div>
    </div>
   </section>
   <section id="sm-banner" class="sectionp1">
    <div class="bannerbox">
        <h3>Crazy Deals</h3>
        <h1>Buy 2 and get free delivery</h1>
        <button class="white">learn more</button>
    </div>
    <div class=" bannerbox bannerbox2">
        <h3>Buy in Bulk</h3>
        <h1> and get Lower Prices</h1>
        <button class="white">Buy Now</button>
    </div>
   </section>
   <section id="banner3">
   <div class=" bannerbox bannerboxa">
    <h2>New Collection:</h2>
    <h1>With all new desgins</h1>
</div>
<div class=" bannerbox bannerboxb">
    <h1>Connect With Us:</h1>
    <h2>Shreejigems@gmail.com</h2>
</div>
<div class=" bannerbox bannerboxc">
    <h1>Hassle free-Transaction:</h1>
    <h2>Secured Payments.</h2>
</div>
</section>
<section id="newsletter" class="sectionp1  sectionm1">
    <div class="newstext">
        
        <h3>sign-up for Newsletters</h3>
        <p>Get E-mail updates about our latest shop and <span>Speical Offers</span></p>
    </div>
    <div class="form">
        <form action="connect.php" method="post">
        <input type="text" placeholder= "Your email address" id="email" name="email"><br>
        <button type="submit" class="normal" name="sb">Sign Up</button><br>
    </form>
    </div>

</section>
<footer class="sectionp1">
<div class="col">
    <img class="logo" src="photos/bg1.png"length="150" width="150" alt="">
    <h4>Contact</h4>
    <p><strong>Address: </strong>2583-84, ghee walo ka rasta, Johri Bazar, Jaipur</p>
    <p><strong>phone: </strong>(+91) 9784352249,9664078593</p>
    <p><strong>hours: </strong>10:00 to 18:00, Mon-Sat</p>
    <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
            <i class = "fab fa-facebook-f"></i>
            <i class = "fab fa-instagram"></i>
            <i class = "fab fa-twitter"></i>
            <i class = "fab fa-pinterest-p"></i>
            <i class = "fab fa-youtube"></i>
        </div>  
    </div>
</div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Privacy policy</a>
            <a href="#">Delivery Information</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Carta</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track my order</a>
            <a href="#">Help</a>
        </div>
        
        <div class="col install">
            <h4>Install app</h4>
            <p>From app store or Google Play</p>
            <div class="row">
                <img src="photos/apple-app-store-logo.jpg"length="100" width="100" alt="">
                <img src="photos/Google-Play-Logo.png" length="100" width="120" alt="">
            </div>
            <h4>Secured payment gateways</h4>
            <img src="photos/gt.jpeg" length="300" width="300" alt="">
        </div>
        
        <div class="copywright">
            <p>©2023 Shree Ji Gems Limited - Registered in India - Registered office: 2583-84, ghee walo ka rasta, Johri Bazar, Jaipur Phone number: +91 9664078593</p>
        </div>
</footer>
<script src="script.js"></script>
</body>
</html>
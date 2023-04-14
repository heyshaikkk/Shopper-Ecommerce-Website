<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Website Title</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>          
  <link rel="stylesheet" href="style13.css">
  <link rel="stylesheet" href="css/jquery.countdown.css" />
  <script src="productslider.js"></script>
  <style>
  form {
  border: 4px solid #f1f1f1;
}

/* Add some padding and a grey background color to containers */
.container {
  padding: 20px;
  background-color: #f1f1f1;
}

/* Style the input elements and the submit button */
input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Add margins to the checkbox */
input[type=checkbox] {
  margin-top: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: black;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
logo h3{
    color: black;
    text-decoration: none;
}
    </style>
</head>
<body>
  <header>
    
    <div class="logo">
      <a href=""><h3>Shopper.com</h3></a>
    </div>
    <nav class="main-nav">
      <ul>
        <li><a href="men.html">Men</a></li>
        <li><a href="women.html">Women</a></li>
        <li><a href="kids.html">Kids</a></li>
        <li><a href="living.html">Living</a></li>
        <li><a href="beauty.html">Beauty</a></li>
      </ul>
    </nav>
    <div class="search-box">
      <input type="text" placeholder="Search...">
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    <div class="profile">
      <ul> 
        <li><a href="vishnu.php"><i class="fa fa-user"></i></a></li>
        <li><a href="favour.html"><i class="fa fa-heart"></i></a></li>
        <li><a href="checkout.html"><i class="fa fa-shopping-bag"></i></a></li>
      </ul>
    </div>
  </header>

 
  <div class="slideshow-container">

    <div class="mySlides fade">
      
      <img src="images/adbanner1.jpg" style="width:100%; height: 500px;">
    
    </div>
    
    <div class="mySlides fade">
      
      <img src="images/adbanner1.jpg" style="width:100%; height: 500px;" >
      
    </div>
    
    <div class="mySlides fade">
      
      <img src="images/adbanner3.jpg" style="width:100%; height: 500px;">
      
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

    <h2 class="deal"> DEAL OF THE DAY </h2>

<div class="row">
  <div class="column">
   <a href=""><img src="images/deal1.jpg" alt="Snow" style="width:100%">
   </div></a> 
  <div class="column">
    <a href=""><img src="images/deal2.jpg" alt="Forest" style="width:100%">
    </a> </div>
  <div class="column">
    <a href=""><img src="images/deal3.jpg" alt="Mountains" style="width:100%">
    </a></div>
  <div class="column">
   <a href=""> <img src="images/deal4.jpg" alt="Mountains" style="width:100%"></a>
  </div>
  <div class="column">
   <a href=""><img src="images/deal5.jpg" alt="Mountains" style="width:100%"></a> 
  </div>
  <div class="column">
    <a href=""><img src="images/deal6.jpg" alt="Mountains" style="width:100%"></a>
  </div>
</div>

<center>
<form action="action_page.php">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
    <p>Shopper.com</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form></center>
<span class="poster"> 
 <img src="images/gg.jpg" alt="Poster" class="responsive">
</span>
<footer>
  <div class="footer-content">
    <div class="footer-section about">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut blandit massa. Nulla vestibulum mi at quam dignissim, ut posuere sapien bibendum. Duis fermentum felis et quam faucibus auctor.</p>
    </div>
    <div class="footer-section links">
      <h2>Quick Links</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="footer-section contact">
      <h2>Contact Us</h2>
      <ul>
        <li><i class="fa fa-envelope"></i> info@myecommercewebsite.com</li>
        <li><i class="fa fa-phone"></i> +1 (555) 123-4567</li>
        <li><i class="fa fa-map-marker-alt"></i> 123 Main St, Anytown, USA</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 My Ecommerce Website</p>
  </div>
</footer>



</body>
</html>

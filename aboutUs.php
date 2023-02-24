<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="./slider.css" rel="stylesheet">
    <title>AboutUS</title>
    <link rel="shortcut icon" href="./My project.png" type="image/svg+xml">
    <script src="functionality.js" defer></script>
</head>
<body>
    <div id="section">
        <nav class="navbar">
            <div id="header">
                
                <div id="logo">
                    <img src="./images/My project.png" alt="logo">
                </div>
                 <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                 </a>
                <div id="heading">
                   <div class="navbar-links">
                <ul>
                    <li>
                        <a href="./home.php">Home</a>
                    </li>
                    <li>
                        <a href="./aboutUs.php">About Us</a>
                    </li>
                    <li>
                        <a href="./menu.php">Menu</a>
                    </li>
                    <li>
                        <a href="./booking.php">Booking</a>
                    </li>
                    <li>
                        <a href="./login.php">Log In</a>
                    </li>
                   
                </ul>
                </div>
                </div>
            </nav>


<section aria-label="Newest Photos" class="sliderSection">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button = "prev"><img src="./images/previouspic.png"></button>
        <button class="carousel-button next" data-carousel-button = "next"><img src="./images/nextpic.png"></button>

    <ul data-slides>
        <li class="slide" data-active>
            <img src="./historiku/1.jpg" alt="image1">
        </li>
        <li class="slide">
            <img src="./historiku/2.jpg" alt="image2">
        </li>
        <li class="slide">
            <img src="./historiku/3.jpg" alt="image3">
        </li>
        <li class="slide">
            <img src="./historiku/4.jpg" alt="image4">
        </li>
        <li class="slide">
            <img src="./historiku/5.jpg" alt="image5">
        </li>
        <li class="slide">
            <img src="./historiku/6.jpg" alt="image6">
        </li>
        <li class="slide">
            <img src="./historiku/7.jpg" alt="image7">
        </li>
        
    </ul>
</div>
    </section>





























    <div id="footer">
        <div id="f1">
          <h3>Restaurant Ora</h3>
          <p>Restaurant Ora is the ideal place <br>to spend time with family and children.</p>
          <a>
            <img src="./images/facebook.png">
          </a>
            
          <a>
              <img src="./images/instagram.png">
            </a>
          
            <a>
              <img src="./images/twitter-sign.png">
            </a>
            <a>
              <img src="./images/pinterest-circular-logo-symbol.png">
            </a>
      
        </div>
    
        

        <div id="f2">
         
             <h3>Contact Us</h3>
          <p><b>Address:</b>Podujevë-Merdare 4-th kilometer, Podujevë, Kosovo, 11000</p>
          <p><b>Mobile number:</b>+383 44 166 775</p>
          <p><b>Email:</b>restaurantora1958@gmail.com</p>
          <p><b>Rating:</b> 3.4 (2,900 Reviews)</p>
          


        </div>
      
  </div>
</body>
</html>
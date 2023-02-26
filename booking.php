<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="functionality.js" defer></script>
    <link href="./style.css" rel="stylesheet">
    <title>Booking</title>
    <link rel="shortcut icon" href="./My project.png" type="image/svg+xml">

</head>
<body>

    <div id="sectionB">
    <?php
            include 'Model.php';
            $model = new Model();
            $booking = $model->booking();
            ?>
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
                <ul>
                <li>
                        <a href="./home.php">Home</a>
                    </li>
                    <li>
                        <a href="./aboutUs.php">About Us</a>
                    </li>
                    <li>
                        <a href="./staff.php">Our Staff</a>
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
        
        <form class="booking" method="post">
            <div id="f-div">
            <h3 id="booking-title">Book a Table</h3>
            <input type="text" placeholder="Enter Name" id="namefield" name="name">
            <p id="username-error1">Please enter a valid name!</p>
            <input type="email" placeholder="Enter Email" id="emailfield" name="emailfield" >
            <p id="email-error">Please enter a valid email!</p>
            <select id="input-field" name="persons"> 
                <option value="1 Person">Person</option>
                <option value="2 Persons">2 People</option>
                <option value="3 Persons">3 People</option>
                <option value="4 Persons">4 People</option>
                <option value="5 Persons">5 People</option>
            </select>
            <input type="date" name="date">
            <textarea placeholder="Message" id="tA"class="tAr" name="message"></textarea>
            <p id="firstname-error">Please enter a message!</p>
            <button id="btn-booking" name="submit">Book The Table</button>
            </div>
          </form>
          </div>
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
            <div class="wrapper">
                <h3>Contact Us</h3>
                <p><b>Adress:</b> Podujevë-Merdare 4-th kilometer</p>
                <p><b>Mobile number:</b>+383 44 166 775</p>
                <p><b>Email:</b>restaurantora1958@gmail.com</p>
                <p><b>Rating:</b> 3.4 (2,900 Reviews)</p>
            </div>
        </div>
    </div>
      
  </div>

  <script>
     var username = document.getElementById("namefield");
        var usernameError1 = document.getElementById("username-error1");
    
    username.addEventListener('input', function (e){
    
        var userpattern = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
        var currentValue = e.target.value;
        var vlera = userpattern.test(currentValue);
    
        if(vlera){
            usernameError1.style.display = 'none';
        }else{
            usernameError1.style.display  = 'block';
        }
        })
    
    // 

    var email = document.getElementById("emailfield");
        var emailError = document.getElementById("email-error");
    
    password.addEventListener('input', function (e){
    
        var userpattern1 =/^[\w.+-]+@[\w.-]+.[a-zA-Z]{2,}$/;
        var currentValue1 = e.target.value;
        var vlera1 = userpattern1.test(currentValue1);
    
    
        if(vlera1){
            emailError.style.display = 'none';
        }else{
            emailError.style.display  = 'block';
        }
        })

  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet" />
    <title>Register</title>
    <link rel="shortcut icon" href="./My project.png" type="image/svg+xml" />
  </head>
  <body>
    <div id="sectionL">

    <?php
            include 'Model.php';
            $model = new Model();
            $insert = $model->insert();
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

          <div class="formulariR">
          <form action="" method="post">
            <h2>Register Here</h2>
            <input
              type="text" placeholder="Enter Username" name="name" id="firstnamefield"  />
            <p id="firstname-error">Please enter a valid first name!</p>
            <input type="text" placeholder="Enter Lastname" id="lastnamefield" />
            <p id="lastname-error">Please enter a valid last name!</p>
            <input name="email" type="email" placeholder=" Enter Email" id="emailfield" />
            <p id="email-error">Please enter a valid email!</p>
            <input
              type="password"
              name="password"
              placeholder="Enter Password"
              id="passwordfield"
            />
            <p id="password-error">Please enter a valid password!</p>
            <input name="submit" type="submit" class="btn-2" value="Register"/>
            <p>Already have an account?</p>
            <a href="./login.php" id="a-1">Log In</a>
          </div>
        </div>
        </form>
      </div>

    <div id="footer">
      <div id="f1">
        <h3>Restaurant Ora</h3>
        <p>
          Restaurant Ora is the ideal place <br />to spend time with family and
          children.
        </p>
        <a>
          <img src="./images/facebook.png" />
        </a>

        <a>
          <img src="./images/instagram.png" />
        </a>

        <a>
          <img src="./images/twitter-sign.png" />
        </a>
        <a>
          <img src="./images/pinterest-circular-logo-symbol.png" />
        </a>
      </div>

      <div id="f2">
        <h3>Contact Us</h3>
        <p>
          <b>Address:</b>Podujevë-Merdare 4-th kilometer, Podujevë, Kosovo,
          11000
        </p>
        <p><b>Mobile number:</b>+383 44 166 775</p>
        <p><b>Email:</b>restaurantora1958@gmail.com</p>
        <p><b>Rating:</b> 3.4 (2,900 Reviews)</p>
      </div>
    </div>
    <script>
      var username = document.getElementById("firstnamefield");
      var usernameError = document.getElementById("firstname-error");

      username.addEventListener("input", function (e) {
        var userpattern = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
        var currentValue = e.target.value;
        var vlera = userpattern.test(currentValue);

        if (vlera) {
          usernameError.style.display = "none";
        } else {
          usernameError.style.display = "block";
        }
      });

      //
      //
    

      var lastname = document.getElementById("lastnamefield");
      var lastnameError = document.getElementById("lastname-error");

      username.addEventListener("input", function (e) {
        var userpattern = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
        var currentValue = e.target.value;
        var vlera = userpattern.test(currentValue);

        if (vlera) {
          lastnameError.style.display = "none";
        } else {
          lastnameError.style.display = "block";
        }
      });

      var password = document.getElementById("passwordfield");
      var passwordError = document.getElementById("password-error");

      password.addEventListener("input", function (e) {
        var userpattern1 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        var currentValue1 = e.target.value;
        var vlera1 = userpattern1.test(currentValue1);

        if (vlera1) {
          passwordError.style.display = "none";
        } else {
          passwordError.style.display = "block";
        }
      });

      //
      var email = document.getElementById("emailfield");
      var emailError = document.getElementById("email-error");

      password.addEventListener("input", function (e) {
        var userpattern1 = /^[\w.+-]+@[\w.-]+.[a-zA-Z]{2,}$/;
        var currentValue1 = e.target.value;
        var vlera1 = userpattern1.test(currentValue1);

        if (vlera1) {
          emailError.style.display = "none";
        } else {
          emailError.style.display = "block";
        }
      });
    </script>
  </body>
</html>

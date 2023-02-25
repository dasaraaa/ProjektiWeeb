<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="functionality.js" defer></script>
    <title>Menu</title>
    <link rel="shortcut icon" href="./My project.png" type="image/svg+xml">
</head>
<body>

<?php
include 'Model.php';
$model = new Model();
$rows = $model->menufetch();
?>

    <!-- <div id="sectionM"> -->

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

        <div class="menu1"
       
        >
        <div class="menu-item">
            <img src="<?php echo $rows[0]['Image'];?>" id="fish" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[0]['Name'];?></p>
            <p class="menu-desc"><?php echo $rows[0]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[0]['Price'];?> </p>
        </div>       
   
        <div class="menu-item" >
            <img src="<?php echo $rows[1]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[1]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[1]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[1]['Price'];?></p>
        </div>
 
        <div class="menu-item" >
            <img src="<?php echo $rows[2]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[2]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[2]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[2]['Price'];?></p>
        </div>
  
        <div class="menu-item" >
            <img src="<?php echo $rows[3]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[3]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[3]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[3]['Price'];?></p>
        </div>

        <div class="menu-item" >
            <img src="<?php echo $rows[4]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[4]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[4]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[4]['Price'];?></p>
        </div>
    
        <div class="menu-item" >
            <img src="<?php echo $rows[5]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[5]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[5]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[5]['Price'];?></p>
        </div>
   
        <div class="menu-item" >
            <img src="<?php echo $rows[6]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[6]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[6]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[6]['Price'];?></p>
        </div>
         
        <div class="menu-item" >
            <img src="<?php echo $rows[7]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[7]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[7]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[7]['Price'];?></p>
        </div>

        <div class="menu-item" >
            <img src="<?php echo $rows[8]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[8]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[8]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[8]['Price'];?></p>
        </div>

        <div class="menu-item" >
            <img src="<?php echo $rows[9]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[9]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[9]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[9]['Price'];?></p>
        </div>

        <div class="menu-item" >
            <img src="<?php echo $rows[10]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[10]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[10]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[10]['Price'];?></p>
        </div>

        <div class="menu-item" >
            <img src="<?php echo $rows[11]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[11]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[11]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[11]['Price'];?></p>
        </div>

        <div class="menu-item" >
            <img src="<?php echo $rows[12]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[12]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[12]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[12]['Price'];?></p>
        </div>
        <div class="menu-item" >
            <img src="<?php echo $rows[13]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[13]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[13]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[13]['Price'];?></p>
        </div>
        
        <div class="menu-item" >
            <img src="<?php echo $rows[14]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[14]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[14]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[14]['Price'];?></p>
        </div>
        <div class="menu-item" >
            <img src="<?php echo $rows[15]['Image'];?>" id="fli" class="menu-pic" height="200px">
            <p class="menu-name" ><?php echo $rows[15]['Name'];?></p>
            <p class="menu-desc" ><?php echo $rows[15]['Description'];?></p>
            <p class="menu-price"><?php echo $rows[15]['Price'];?></p>
        </div>
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


      
  <!-- </div> -->
</body>
</html>
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
    <title>Our Staff</title>
    <link rel="shortcut icon" href="./My project.png" type="image/svg+xml">


    <style>

.staff1 {
  margin-left: 90px;
  border-radius: 20px;
  margin-top: 30px;
  display: grid;
  grid-template-columns: 300px 300px;
  column-gap: 20px;
  row-gap: 20px;
}
.staff-item {
  background-color: white;
  text-align: center;
  opacity: 0.9;
  cursor: pointer;
  box-shadow: 0px 5px 10px black;
  position: relative;
}
.staff-item p {
  color: darkgray;
}
.staff-item {
  border-radius: 10px;
  transition: 0.3s;
}
.staff-item:hover {
  opacity: 1;
  color: white;
  transform: scale(1.2);
}

.staff-pic {
  border-radius: 0px;
  width: 100%;
}
.staff-name {
  font-weight: 700;
  font-size: 25px;
  margin-top: 5px;
}

.staff-rating {
  width = 30px;
}
.staff1 {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 3rem;
  margin: 2% 5%;
}


</style>
</head>
<body>

<?php
include 'Model.php';
$model = new Model();
$rows = $model->stafffetch();
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

        <div class="staff1"
        style="
        margin-left:15vw;
         margin-top: 3%;
         border-radius: 0px;
         margin-top: 30px;
         display: grid;
         grid-template-columns: 300px 300px 300px;
         column-gap: 70px;
         row-gap: 40px; 
          margin-bottom: 50px;
         "
        >
        <div class="staff-item">
            <img src="<?php echo $rows[0]['Image'];?>" class="staff-pic" height="200px">
            <p class="staff-name" ><?php echo $rows[0]['Name'];?></p>
            <p class="staff-desc"><?php echo $rows[0]['Description'];?></p>
            <img src="<?php echo $rows[0]['Rating'];?>"class="staff-price" width = "100px"> 
        </div>         
   
        <div class="staff-item">
            <img src="<?php echo $rows[1]['Image'];?>" class="staff-pic" height="200px">
            <p class="staff-name" ><?php echo $rows[1]['Name'];?></p>
            <p class="staff-desc"><?php echo $rows[1]['Description'];?></p>
            <img src="<?php echo $rows[1]['Rating'];?>"class="staff-price" width = "100px"> 
        </div>   
 
        <div class="staff-item">
            <img src="<?php echo $rows[2]['Image'];?>" class="staff-pic" height="200px">
            <p class="staff-name" ><?php echo $rows[2]['Name'];?></p>
            <p class="staff-desc"><?php echo $rows[2]['Description'];?></p>
            <img src="<?php echo $rows[2]['Rating'];?>"class="staff-price" width = "100px"> 
        </div>   
        
        <div class="staff-item">
            <img src="<?php echo $rows[3]['Image'];?>" class="staff-pic" height="200px">
            <p class="staff-name" ><?php echo $rows[3]['Name'];?></p>
            <p class="staff-desc"><?php echo $rows[3]['Description'];?></p>
            <img src="<?php echo $rows[3]['Rating'];?>"class="staff-price" width = "100px"> 
        </div>   

        <div class="staff-item">
            <img src="<?php echo $rows[4]['Image'];?>" class="staff-pic" height="200px">
            <p class="staff-name" ><?php echo $rows[4]['Name'];?></p>
            <p class="staff-desc"><?php echo $rows[4]['Description'];?></p>
            <img src="<?php echo $rows[4]['Rating'];?>"class="staff-price" width = "100px"> 
        </div>   

        <div class="staff-item">
            <img src="<?php echo $rows[5]['Image'];?>" class="staff-pic" height="200px">
            <p class="staff-name" ><?php echo $rows[5]['Name'];?></p>
            <p class="staff-desc"><?php echo $rows[5]['Description'];?></p>
            <img src="<?php echo $rows[5]['Rating'];?>"class="staff-price" width = "100px"> 
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
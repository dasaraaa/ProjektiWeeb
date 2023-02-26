<?php

$server = "localhost";
$username = "root";
$password = '';
$database = "ProjektiWeb";

$data=mysqli_connect($server,$username,$password,$database);

if($data===false){
  die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $password=$_POST["password"];

  $sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";

  $result=mysqli_query($data,$sql);

  $row = mysqli_fetch_array($result);


  if($row["usertype"]=="user"){

    $_SESSION["username"]=$username;
    header("location:home.php");

  }

  elseif($row["usertype"]=="admin"){

    $_SESSION["username"]=$username;
    header("location:dashboard.php");
    
  }

}
function login(){
    if(isset($_POST['Login'])){
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        if(empty($email) || empty($password)){
            echo "You haven't filled out the form";
            exit();
        }

        $query = "SELECT * FROM USERS WHERE Email = '" . $email . "'AND Password ='" . $password . "'";
        $rez = mysqli_query($this -> conn, $query);
        $info = mysqli_fetch_array($rez);

        if(mysqli_num_rows($rez) > 0){
            $_SESSION['Username'] = $info['Username'];

            if(mysqli_num_rows($rez) > 0) {
                $_SESSION['usertype'] = 'admin';
                $usertype = $_SESSION['usertype'];
                echo "<script>alert('Welcome to our galaxy, $usertype');</script>";
                echo "<script>window.location.href = '/dashboard.php';</script>";              
            }else{
                $_SESSION['usertype'] = 'user';
                echo "<script>alert('Incorrect username or password')</script>";
                echo "<script>window.location.href = '/home.php';</script>";
            }

        }else {
            echo "<script>alert('Incorrect username or password');</script>";

        }
    }
}

?>





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
    <script src="functionality.js" defer></script>
    <title>LogIn</title>
    <link rel="shortcut icon" href="./My project.png" type="image/svg+xml">
</head>
<body>
    <div id="sectionL">

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
        <div class="formulari">
            <form action="thelogin.php" method="post">
            <h2>Login Here</h2>
            <input type="text" name="username" placeholder="Enter Username" class="inputs" id="username">
            <p id="username-error">Please enter a valid Username!</p>
            <input type="password" name="password"  placeholder="Enter Password" class="inputs" id="password">
            <p id="password-error">Please enter a valid Password!</p>
            <button class="btn" ><a href="./home.php" id="loginbtn">Log In</a></button>
            <p class="link">Don't have an account?</p>
            <a href="./register.php" id="a-2">Register</a>
            </a> </p>
            </form>
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
      
  </div>
  <script>

   var username = document.getElementById("username");
var usernameError = document.getElementById("username-error");

username.addEventListener('input', function (e){

var userpattern = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
var currentValue = e.target.value;
var vlera = userpattern.test(currentValue);

if(vlera){
    usernameError.style.display = 'none';
}else{
    usernameError.style.display  = 'block';
}
})

var password = document.getElementById("password");
var passwordError = document.getElementById("password-error");

password.addEventListener('input', function (e){

var userpattern1 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
var currentValue1 = e.target.value;
var vlera1 = userpattern1.test(currentValue1);


if(vlera1){
    passwordError.style.display = 'none';
}else{
    passwordError.style.display  = 'block';
}
})



  </script>
</body>
</html>
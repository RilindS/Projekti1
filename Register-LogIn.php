<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "users.php";
    if (array_key_exists($username, $users) && $users[$username]["password"] == $password) {
        $_SESSION["username"] = $username;
        $_SESSION["login_time"] = time();

        if ($users[$username]["role"] == "admin") {
            $_SESSION["role"] = "admin";
        } else {
            $_SESSION["role"] = "user";
        }
        header("Location: home.php");
        exit();
    } else {
        echo "Të dhënat nuk janë të sakta. Ju lutem provoni përsëri.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Register-LogIn.css">
</head>
<body>
  
        <div class="wrapper">
          <h2>Registration</h2>
          <form action="#">
            <div class="input-box">
              <input type="text" id="username" placeholder="Enter your name" >
            </div>
            <div class="input-box">
              <input type="text" id="email"placeholder="Enter your email" >
            </div>
            <div class="input-box">
              <input type="password" id="password" placeholder="Create password" >
            </div>
            <div class="input-box">
              <input type="password" id="confirmpassword" placeholder="Confirm password" >
            </div>
            <div class="input-box button">
              <input type="Submit" value="Register Now">
            </div>
            <div class="text">
              <h3>Already have an account? <a href="#wrapper">Login now</a></h3>
            </div>
          </form>
        </div>


        <div id="wrapper">
            <h2>Log in</h2>
            <form action="#">

              <div class="input-box">
                <input type="text" placeholder="Enter your email" >
              </div>
              <div class="input-box">
                <input type="password" placeholder="Create password">
              </div>
              <div class="input-box button">
                <input type="Submit" value="Register Now">
              </div>
            </form>
            </div>

            
        
</body>
</html>

<?php
    
    
    
    ?>
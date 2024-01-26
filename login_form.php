<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:homeAdmin.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:homeUser.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form id="form" action="" method="post" onsubmit="return validateForm()">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email"  id="email" placeholder="enter your email">
      <div class="error-message" id="emailError"></div>

      <input type="password" name="password" id="password"  placeholder="enter your password">
      <div class="error-message" id="passwordError"></div>

      <!-- <button  name="submit"  class="form-btn" type="button" onclick="validateForm()">register</button> -->
       <input type="submit" name="submit" value="login now" class="form-btn" > 
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>
<script>
    function validateForm(){
        let email=document.getElementById('email').value;
        let emailError=document.getElementById('emailError');

        let password=document.getElementById('password').value;
        let passwordError=document.getElementById('passwordError');

        emailError.innerText='';
        passwordError.innerText='';

        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(email.trim()==""||!emailRegex.test(email)){
                emailError.innerText="email invalid";
                return false;
            }
            if(password.trim()==""){
                passwordError.innerText='Password is empty';
                return false;
            }
            return true;
    }
</script>
</body>
</html>
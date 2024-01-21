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
      $error[] = 'Email-i ose password-i jane gabim!';
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form id="form" action="" method="post" onsubmit="return validateForm()">
      <h3>LOGIN</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email"  id="email" placeholder="Shkruaj email-in">
      <div class="error-message" id="emailError"></div>

      <input type="password" name="password" id="password"  placeholder="Shkruaj password-in">
      <div class="error-message" id="passwordError"></div>

      <!-- <button  name="submit"  class="form-btn" type="button" onclick="validateForm()">register</button> -->
       <input type="submit" name="submit" value="kycu" class="form-btn" > 
      <p>Don't have an account? <a href="register_form.php">Create account</a></p>
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
                emailError.innerText="Email-i eshte invalid";
                return false;
            }
            if(password.trim()==""){
                passwordError.innerText='Password-i eshte i zbrazet';
                return false;
            }
            return true;
    }
</script>
</body>
</html>
<?php
include 'Perdoruesit.php';
include_once 'PerdoruesitRepository.php';

if (isset($_POST['submitbtn'])) {
    $emri = $_POST['emri'];
  
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $aplikim = new Perdoruesit($emri, $email,$password);

    $aplikimetrepository = new PerdoruesitRepository();
    $aplikimetrepository->insertPerdoruesit($aplikim);
    header("location:dashboard.php");
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Insert.css"> 

    <head>
    </head>
    <body>
        <h3 id="h3">Jeni duke shtuar nje Perdorues</h3>
        <form action="" method="post">  
            <p>Emri:</p>
            <input type="text" name="emri" ><br>
     
            <P>Email:</P>
            <input type="email" name="email" ><br>
            <p>Passwordi:</p>
            <input type="text" name="password" ><br>
           
           
            <input type="submit" name="submitbtn" value="Submit">
        </form>
    </body>
</html>
<?php
include 'DatabaseConnection.php';


$dbConnection = new DatabaseConnection();

$conn = $dbConnection->startConnection();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/Javascript">

    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <title>HOME</title>
</head>
<body>
    <header class="headerContainer">
        <div class="logoAndCatalog">
            <img src="images/taxi-logo.png" alt="logo" width="20%">
        </div>
        <div class="links">
            <!-- <a href="home.php" class="btn">LOG OUT</a> -->
            <!-- <a href="dashboard.php">DASHBOARD</a>   -->
            <a href="login_form.php" >LOG IN</a>   
             <a href="home.php" id="active">HOME</a> 
            <a href="about.php">ABOUT</a>   
             <!-- <a href="shtoKompanin.php">SHTO KOMPANI</a> -->

              <a href="order.php">ORDER</a>
              <a href="contact.php">CONTACT</a> 
              <a href="aplikimi.php">APLIKO PER PUNE</a>  
        </div>
     </header>
     <main>
      
      <div class="bg-photo">
          <h1 id="h1-bgphoto">WELCOME TO ONE OF THE LARGEST <span>TAXI</span> FLEETS OF <span>PRISHTINA</span></h1>
              
                  
      </div>
      <!-- <h1 class="welcome" style="text-align:center;font-size:13px;">Welcome Admin : <span><?php echo $_SESSION['admin_name'] ?></span></h1> -->


      <div class="Sherbimet">
          <h1>BASHKEPUNIMI ME NE OFRON:</h1>
          <div class="box">
              <div class="border-box"><img src="images/24-7.png" class="icons">Sherbim 24/7</div>
              <div class="border-box"><img src="images/operator.png" class="icons">6 operator aktiv</div>
              <div class="border-box"><img src="images/shield.png" class="icons">Siguri maksimale</div>
              <div class="border-box"><img src="images/taxiicon.png" class="icons" >Komoditet</div>
              <div class="border-box"><img src="images/euro.png" class="icons">Cmime Konkuruese</div>
          </div>
      </div> 
          <h1 id="p-h1">PARTNERET TANE KRYESORE JANE:</h1>
        
            <div class="photos">
            
             
                <?php 
                $sql = "SELECT * FROM images ORDER BY id DESC";
                 $res = $conn->query($sql);

                if ($res->rowCount() > 0) {
                    while ($images = $res->fetch(PDO::FETCH_ASSOC)) {  
                ?>
                <div class="rubrika" >
             	<img src="images/<?=$images['image_url']?>" alt="" class="img" height="500px" width="450px" >
                 <div class="button">
                  <button onclick="location.href='order.php'" type="button" class="blue-button">REZERVO TAXI</button>
              </div>
            </div>
             
      <?php } }?>
  </div>
</main>
    <footer>
        <div class="f">
            <h2>ABOUT US</h2>
            <h2>LINKS</h2>
            <h2>CONTACT</h2>
            
        </div>
        <div class="footermain">
                <div class="footerleft">
                    <p>Ne si kompani e re ne treg ofrojme sherbime te taksise me baze ne kryeqytet. Ju garantojme per siguri, seriozitet dhe komditet nga bashkepunimi me ne.</p>
                </div>
                <div class="footercenter">
                <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="" width="32px" height="32px"></a>
                <a href="https://www.instagram.com/"><img src="images/instagram.png" alt="" width="32px" height="32px"></a>
                <a href="https://www.google.com/"><img src="images/google-logo-img.png" alt="" width="32px" height="32px"></a>
                    
                    
                </div>
                <div class="footerright">
                    <p>+383 044/123/456</p>
                    <p>+383 049/123/456</p>
                    <p>0800/123/45</p>
            </div>
            </div>
            <div class="fundi">
                <p>Copyright 2023 Taxi Service Prishtina. All rights reserved.</p>
                
            </div>
        </footer>


</main>
</body>
</html>
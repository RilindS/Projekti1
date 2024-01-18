<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="footer.css">
    <title>CONTACT US</title>
</head>
<body>
    <header class="headerContainer">
        <div class="logo">
            <img src="images/taxi-logo.png" alt="logo" width="20%">
        </div>
        <div class="links">
            <a href="home.php" id="active">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="order.php">ORDER</a>
            <a href="contact.php">CONTACT</a>
            <a href="aplikimi.php">APLIKO PER PUNE</a>
        </div>
     </header>

     <main>

        <div class="h1">
            <h1 id="h1-main">CONTACT US</h1>
        </div>
        <div class="container">
            <form action="form">
          
              <label for="fname">Emri</label>
              <input type="text" id="fname" name="firstname" placeholder="Emri juaj..">
          
              <label for="lname">Mbiemri</label>
              <input type="text" id="lname" name="lastname" placeholder="Mbiemri..">

              <label for="lname">Email</label>
              <input type="text" id="Email" name="email" placeholder="Emaili juaj..">
          
              <label for="subject">Ne rast se keni ndonje ankese, ju lutem shkruani ne detaje ne rubriken e meposhtme</label>
              <textarea id="subject" name="subject" placeholder="Paraqit ankesen tende.." style="height:200px"></textarea>
          
              <input type="submit" value="Submit">
          
            </form>
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
        <?php
    
    
    
    ?>
</body>
</html>
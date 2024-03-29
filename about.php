<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title>ABOUT US</title>
</head>
<body>
    <header class="headerContainer">
        <div class="logo">
            <img src="images/taxi-logo.png" alt="logo" width="20%">
        </div>
        <div class="links">
            <a href="login_form.php" >LOG IN</a>
            <a href="home.php" >HOME</a>
            <a href="about.php" id="active">ABOUT</a>
            <a href="order.php">ORDER</a>
            <a href="contact.php">CONTACT</a>
            <a href="aplikimi.php">APLIKO PER PUNE</a>
        </div>
     </header>

     <main>
        
        <h1 id="h1-about">ABOUT US</h1>
     <div class="container">
        <p class="paragrafi">
            Mirësevini në faqen tonë, një destinacion virtual ku bashkohen shërbimet e transportit më të përshtatshme dhe të besueshme. Ne jemi një kompani taksish e orientuar nga një ekip pasionant i profesionistëve të transportit, të përkushtuar për të ofruar një përvojë të jashtëzakonshme për udhëtarët tanë. Me një flotë të përzgjedhur me kujdes të makinave të reja dhe shoferë me përvojë, ne sigurojmë udhëtime të rehatshme dhe të sigurta për klientët tanë. Përmes teknologjisë moderne, ofrojmë një platformë të lehtë për përdorim për rezervime online, duke garantuar që udhëtimi juaj të jetë i përshtatshëm dhe i organizuar me kujdes. Misja jonë është të sjellim një standard të lartë të shërbimit taksive, duke shërbyer komunitetin lokal dhe duke përgjigjur nevojave të çdo udhëtari me përkushtim dhe kujdes të veçantë. Ju ftojmë të përjetoni një udhëtim të paharrueshëm me ne dhe të bëheni pjesë e familjes së taksive tonë të përkushtuar.</p>
    </div>

<div id="kontenti">
        <header>
        <h2>Slide Show: shfaqja e imazheve </h2>
        <img id="slideshow" />
        </header>
        <!-- <button onclick="changeImg()">Next</button> -->
    </div>
    <style type ="text/css">
    #kontenti {
        display: flex ;
        flex-direction: column;
        justify-content: end;
        align-items: center;
        font-family: 'Segoe UI light', Tahoma;
        width: 500px;
        margin:0 auto;
    }
    #kontenti img {
        max-width: 700px;
        height: 400px;
    }
    button{ 
        border-radius: 100%;
        border-style: inherit;
        width: 40px;
        height: 40px;
        font: 10pt;
    }
    button:hover{
        background-color: rgb(189, 186, 186);
    }
    </style>
<script>
        let i = 0;
        let imgArray = ['images/blue-taxi1.png','images/golden-taxi2.png','images/Pink-taxi2.png','images/urban-taxi.png'];

        function changeImg(){
            document.getElementById('slideshow').src = imgArray[i];

            if(i< imgArray.length -1){
                i++;
            }
            else{
                i=0;
            }
            setTimeout("changeImg()", 2600);
        }
        document.addEventListener(onload, changeImg());
        
    </script>
     
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
        
</body>
</html>
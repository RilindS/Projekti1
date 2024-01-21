<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="order.css">
  
    <title>YOUR ORDER</title>
</head>
<body>
    <header class="headerContainer">
        <div class="logoAndCatalog">
            <img src="images/taxi-logo.png" alt="logo" width="20%">
        </div>
        <div class="links">
            <a href="login_form.php" >LOG IN</a>
            <a href="home.php" >HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="order.php" id="active">ORDER</a>
            <a href="contact.php">CONTACT</a>
            <a href="aplikimi.php">APLIKO PER PUNE</a>
            

        </div>
     </header>

     <div class="backgroundphoto">
        <h1 class="h1-background">ORDER</h1>
     </div>

     <main>
     <div class="rezervimi">
                <h1>REZERVO UDHETIMIN TEND</h1>
            <form id="myForm" action="rezervimi_databaz.php" method="post">
          
                <div class="input-field">
                    <p>Emri dhe Mbiemri</p>
                    <input id="NameAndLastName" name="name"type="text" placeholder="Emri dhe Mbiemri juaj">
                </div>
                <div class="error-message" id="NameAndLastNameError" ></div>

                <div class="input-field">
                    <p>Email</p>
                    <input id="email" type="email"  name="email"placeholder="Shkruaj email adresen tuaj:">
                </div>
                <div class="error-message" id="emailError"></div>

                <div class="input-field">
                    <p>Numri kontaktues</p>
                    <input id="Nrcontact" type="number" name="Nrcontact" placeholder="Shkruaj numrin e telefonit:">
                </div>
                <div class="error-message" id="NrcontactError"></div>

                <div class="input-field">
                    <p>Shkruaj vendndodhjen tuaj</p>
                    <input id="location" type="text" name="location" placeholder="Tregoni ku gjendeni:">
                </div>
                <div class="error-message" id="locationError"></div>
                <div class="btn-group">
                    
                </div>
                <button name="submit"class="porosia-butoni" type="submit" onclick="validateForm()">Dergo Porosine</button>

            <div>        
            <p><small>Pasi te keni permbushur kerkesat e mesiperme, do te pranoni me email detajet e porosise suaj.</small></p>
        </form> 
    </div>
        </div>
        <section class="table-section">
            <h1 class="main-h1">CMIMORJA SIPAS LOKACIONIT DHE DESTINACIONIT</h1>
            <table>
                <tbody>
                <tr>
                    <td class="td-Titulli">NR</td>
                    <td class="td-Titulli">LOKACIONI</td>
                    <td class="td-Titulli">DESTINACIONI</td>
                    <td class="td-Titulli">CMIMI (EUR)</td>
                </tr>
        
                <tr>
                <td class="white-rows-table"></td>
                <td class="white-rows-table"></td>
                <td class="white-rows-table"></td>
                <td class="white-rows-table"></td>
            </tr>
        
            <tr>
                <td>1</td>
                <td>PRISHTINE</td>
                <td>RRETHINE</td>
                <td>TAXIMETER</td>
            </tr>
            <tr>
                <td class="white-rows-table">2</td>
                <td class="white-rows-table">PRISHTINE</td>
                <td class="white-rows-table">MITROVICE</td>
                <td class="white-rows-table">15 EUR</td>
            </tr>
            <tr>
                <td>3</td>
                <td>PRISHTINE</td>
                <td>PEJE</td>
                <td>40 EUR</td>
            </tr>
            <tr>
                <td class="white-rows-table">4</td>
                <td class="white-rows-table">PRISHTINE</td>
                <td class="white-rows-table">PRIZREN</td>
                <td class="white-rows-table">50 EUR</td>
            </tr>
            <tr>
                <td>5</td>
                <td>PRISHTINE</td>
                <td>FERIZAJ</td>
                <td>40 EUR</td>
            </tr>
            <tr>
                <td class="white-rows-table">6</td>
                <td class="white-rows-table">PRISHTINE</td>
                <td class="white-rows-table">GJILAN</td>
                <td class="white-rows-table">30 EUR</td>
            </tr>
            <tr>
                <td>7</td>
                <td>PRISHTINE</td>
                <td>KAMENICE</td>
                <td>40 EUR</td>
            </tr>
            <tr>
                <td class="white-rows-table">8</td>
                <td class="white-rows-table">PRISHTINE</td>
                <td class="white-rows-table">AEROPORT</td>
                <td class="white-rows-table">15 EUR</td>
            </tr>
            <tr>
                <td>9</td>
                <td>PRISHTINE</td>
                <td>PODUJEVE</td>
                <td>25 EUR</td>
            </tr>
            <tr>
                <td class="white-rows-table">10</td>
                <td class="white-rows-table">PRISHTINE</td>
                <td class="white-rows-table">VUSHTRRI</td>
                <td class="white-rows-table">20 EUR</td>
            </tr>
            <tr>
                <td>11</td>
                <td>PRISHTINE</td>
                <td>DEQAN</td>
                <td>60 EUR</td>
            </tr>
            <tr>
                <td class="white-rows-table">12</td>
                <td class="white-rows-table">PRISHTINE</td>
                <td class="white-rows-table">RUGOVE</td>
                <td class="white-rows-table">65 EUR</td>
            </tr>
            <tr>
                <td>13</td>
                <td>PRISHTINE</td>
                <td>BREZOVICE</td>
                <td>55 EUR</td>
            </tr>
                </tbody>
            </table>
        </section>
            
        <!-- <div id="kontenti">
            <header>
                <h2>Shiqo foto te taxive tane</h2>
                <img id="slideShow"/>
            </header>
             <button class ="ndrrimi-fotove" type="button"  onclick="chganeImg()">Next</button> 
        </div>  -->
   
 
       
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
        <script>
               
            let i=0;
            let imgArray =['blue-taxi2.png','e-taxi-tesla.png','golden-taxi.png','online-taxi.png','Pink-taxi.png','urban-taxi.png'];
       
            function changeImg(){
                
                document.getElementById('slideshow').scr=imgArray[i];
                    if(i<imgArray.length-1){
                        i++;
                    }
                    else{
                        i=0;
                        }
            }
                document.addEventListener(onload,changeImg());
       

            function validateForm() {
    let NameAndLastName = document.getElementById('NameAndLastName').value;
    let NameAndLastNameError = document.getElementById('NameAndLastNameError');

    let email = document.getElementById("email").value;
    let emailError = document.getElementById('emailError');

    let Nrcontact = document.getElementById('Nrcontact').value;
    let NrcontactError = document.getElementById('NrcontactError');

    let location = document.getElementById('location').value;
    let locationError = document.getElementById('locationError');

    NameAndLastNameError.innerText = '';
    emailError.innerText = '';
    NrcontactError.innerText = '';
    locationError.innerText = '';

    let regxNameAndLastName = /[a-zA-Z]/;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    let NrcontactRegex =  /[0-9]/;
    let locationRegex = /[a-zA-Z]/;

    if (NameAndLastName.trim() === "" || !regxNameAndLastName.test(NameAndLastName)) {
        NameAndLastNameError.innerText = 'invalid name and LastName';
        return;
    }

    if (!emailRegex.test(email)) {
        emailError.innerText = 'invalid email';
        return;
    }

    if (!NrcontactRegex.test(Nrcontact)) {
        NrcontactError.innerText = 'Invalid nrContact';
        return;
    }

    if (!locationRegex.test(location)) {
        locationError.innerText = 'invalid location';
    }

}   
       </script>
</body>
</html>
<?php
    
    
    
    ?>
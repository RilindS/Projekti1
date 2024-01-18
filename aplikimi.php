<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKO PER PUNE</title>
    <link rel="stylesheet" href="aplikimi.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

</head>
<body>
    <header class="headerContainer">
        <div class="logoAndCatalog">
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
    <div class="bgphoto">
        <h2 id="h2-background">APLIKO PER PUNE</h2>
    </div>

    <main>
        <div class="Aplikimi">
            <h1>Apliko per pozitat e hapura*</h1>
            <p id="shoferi"><small>Ne rast aplikimi per shofer, leja e qarkullimit duhet te jete me e vjeter se 3 vjet!</small></p>

            <select id="open-positions">
                <option value="" disabled selected>Pozitat aktive</option>
                        <option value="Shofer">Shofer/e</option>
                        <option value="Bazist">Bazist/e</option>
                        <option value="Autolarje">Autolarje</option>
            </select>
            <form action="#">
                <div class="input-field">
                    <p>Emri</p>
                    <input id="emri" type="text" placeholder="Emri juaj">
                </div>
                <div class="error-message" id="emriError"></div>

                <div class="input-field">
                    <p>Mbiemri</p>
                    <input id="mbiemri" type="text" placeholder="Mbiemri juaj">
                </div>
                <div class="error-message" id="mbiemriError"></div>

                <div class="input-field">
                    <p>Email</p>
                    <input id="email" type="email" placeholder="Shkruaj email adresen tuaj:">
                </div>
                <div class="error-message" id="emailError"></div>

                <div class="input-field">
                    <p>Nenshtetesia</p>
                    <input id="nenshtetesia" type="text" placeholder="Prejardhja juaj:">
                </div>
                <div class="error-message" id="nenshtetsiaError"></div>

                <div class="input-field">
                    <p>Data e lindjes</p>
                    <input id="datalindjes" type="date" >
                </div>
                <div class="error-message" id="datalindjesError"></div>

                 <div class="input-field">
                    <p>Qyteti</p>
                    <select id="qytetet">
                        <option value="" disabled selected>Zgjidh një qytet</option>
                        <option value="Prishtine">Prishtine</option>
                        <option value="Peje">Peje</option>
                        <option value="GJilan">Gjilan</option>
                        <option value="Mitrovice">Mitrovice</option>
                        <option value="Ferizaj">Ferizaj</option>
                        <option value="Prizren">Prizren</option>
                        <option value="Podujeve">Podujeve</option>
                        <option value="Fushe Kosove">Fushe Kosove</option>
                    </select>
                </div>
                <div class="error-message" id="qytetiError"></div>

                <div id="input-field">
                    <p>Adresa</p>
                    <textarea id="address" name="adress" cols="70" rows="3"></textarea>
                </div>
                <div class="error-message" id="addressError"></div>


               
                
                <div class ="field button-field">
                    <button class="porosia-butoni" type="button" onclick="validateForm()">Dergo Aplikimin</button>
                </div>
                

            </form>
        </div>
    </main>
    <?php
    
    
    
    ?>
    <script>

        function validateForm(){
            let emri=document.getElementById('emri').value;
            let emriError=document.getElementById('emriError');

            let mbiemri=document.getElementById('mbiemri').value;
            let mbiemriError=document.getElementById('mbiemriError');

            let email=document.getElementById('email').value;
            let emailError=document.getElementById('emailError');

            let nenshtetesia=document.getElementById('nenshtetesia').value;
            let nenshtetsiaError=document.getElementById('nenshtetsiaError');

            let datalindjes=document.getElementById('datalindjes').value;
            let datalindjesError=document.getElementById('datalindjesError');

           let qytetet=document.getElementById('qytetet').value;
           let qytetiError=document.getElementById('qytetiError');

            let address=document.getElementById('address').value;
            let addressError=document.getElementById('addressError');

            
            emriError.innerText='';
            mbiemriError.innerText='';
            emailError.innerText='';
            nenshtetsiaError.innerText='';
            datalindjesError.innerText='';
            addressError.innerText='';
            qytetiError.innerText='';

            let regxname= /[a-zA-Z]/ ;

            if(emri.trim()=='' || !regxname.test(emri)){
                emriError.innerText='invalid emri';

                return;
            }
            let LastnameRegex=/[a-zA-Z]/;
            if(mbiemri.trim()==''||! LastnameRegex.test(mbiemri)){
                mbiemriError.innerText="mbiemri invalid";
            return;
            }
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(email.trim()==""||!emailRegex.test(email)){
                emailError.innerText="email invalid";
                return ;
            }
            let NenshtetesiaRegex= /[a-zA-Z]/ ;
            if(nenshtetesia.trim()==""|| !NenshtetesiaRegex.test(nenshtetesia)){
                nenshtetsiaError.innerText="nenshtetsia invalid";
                return;
            }
            if(datalindjes.trim()==""){
                datalindjesError.innerText="dataLindjes invalid";
                return;
            }
            if(qytetet.trim()==''){
                qytetiError.innerText='qyteti invalid';
                return;
            }
            if(address.trim()==""){
                addressError.innerText="adresa invalid";
                return;
            }

        }
    </script>
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
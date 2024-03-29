<?php
include_once 'Contacti.php';
include_once 'ContactRepository.php';
$errors = array();
if (isset($_POST['submit'])) {
    $emri = $_POST['firstname'];    
    $mbiemri = $_POST['lastname'];
    $email = $_POST['email'];
    $ankesa = $_POST['subject'];

  
if(empty($emri) || empty($mbiemri) || empty($email) || empty($ankesa) ){
            $errors[] = "All fields are required!";

}else{

    $kontakti = new Contacti($emri, $mbiemri, $email,$ankesa);

    $contactRepository = new ContactRepository();
    $contactRepository->insertKontakti($kontakti);
    header("location:contact.php");
}
}
?>
<?php if (!empty($errors)) { ?>
        <div class="error-message" id="allFieldsError">
            <?php foreach ($errors as $error) {
                echo $error . "<br>";
            } ?>
        </div>
    <?php } ?>

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
            <a href="login_form.php" >LOG IN</a>
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="order.php">ORDER</a>
            <a href="contact.php" id="active">CONTACT</a>
            <a href="aplikimi.php">APLIKO PER PUNE</a>
        </div>
     </header>

     <main>

        <div class="h1">
            <h1 id="h1-main">CONTACT US</h1>
        </div>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          
              <label for="fname">Emri</label>
              <input type="text" id="fname" name="firstname" placeholder="Emri juaj..">
              <div class="error-message" id="fnameError"></div>

              <label for="lname">Mbiemri</label>
              <input type="text" id="lname" name="lastname" placeholder="Mbiemri..">
              <div class="error-message" id="lnameError"></div>

              <label for="lname">Email</label>
              <input type="text" id="Email" name="email" placeholder="Emaili juaj..">
              <div class="error-message" id="EmailError"></div>

              <label for="subject">Ne rast se keni ndonje ankese, ju lutem shkruani ne detaje ne rubriken e meposhtme</label>
              <textarea id="subject" name="subject" placeholder="Paraqit ankesen tende.." style="height:200px"></textarea>
              <div class="error-message" id="subjectError"></div>

            <div >
            <button name="submit" class="porosia-butoni" type="submit" onclick="return validateForm()">Submit</button>

            </div>
          
            </form>
          </div>
          <script>

            function validateForm(){
                let fname=document.getElementById('fname').value;
            let fnameError=document.getElementById('fnameError');

            let lname=document.getElementById('lname').value;
            let lnameError=document.getElementById('lnameError');

            let Email=document.getElementById('Email').value;
            let EmailError=document.getElementById('EmailError');

            let subject=document.getElementById('subject').value;
            let subjectError=document.getElementById('subjectError');
            let allFieldsError = document.getElementById('allFieldsError');

            let hasErrors = false; 


            fnameError.innerText='';
            lnameError.innerText='';
            EmailError.innerText='';
            subjectError.innerText='';  
            allFieldsError.innerText = '';

        
            let regxname= /[a-zA-Z]/ ;

            if( !regxname.test(fname)){
                fnameError.innerText='emri invalid ';
                hasErrors = true;

                return false;
            }
            let LastnameRegex=/[a-zA-Z]/;
            if(! LastnameRegex.test(lname)){
                lnameError.innerText="mbiemri invalid";
                hasErrors = true;

            return false;
            }
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(Email)){
                EmailError.innerText="email jo korrekt";
                hasErrors = true;

                return false ;
            }
            if (hasErrors) {
            allFieldsError.innerText = 'All fields are required ';
            return false;
        } else {
            // Kontrolli nëse forma është dorëzuar duke shtypur butonin "Submit"
            if (document.getElementById('submit').clicked) {
                return true;
            } else {
                return false;
            }
        }
      

         
    }
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
        <?php
    
    
    
    ?>
</body>
</html>
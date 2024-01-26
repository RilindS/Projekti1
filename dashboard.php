<<<<<<< HEAD
<?php 

include "DatabaseConnection.php";
include_once "aplikimetRepository.php";
include ("ContactRepository.php");
include("RezervimiRepository.php");
include("PerdoruesitRepository.php");

$strep = new aplikimetRepository();
$allAplikimet = $strep->getAllAplikimetPunes();

$stre1 = new ContactRepository();
$allKontaktat = $stre1->getAllKontakti();

$stre2 = new RezervimiRepository();
$allRezervimi = $stre2->getAllRezervimiet();


$stre3 = new PerdoruesitRepository();
$allPerdoruesit = $stre3->getAllPerdurusit();

?>


<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <h3>Lista E Userave</h3>
                <th>Emri</th>
                <th>Email</th>
                <th>Passwordi</th>
                <th>user_type</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($allPerdoruesit as $Perdorusi) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $Perdorusi['name'];?></td>
                        <td><?php echo $Perdorusi['email'];?></td>
                        <td><?php echo $Perdorusi['password'];?></td>
                        <td><?php echo $Perdorusi['user_type'];?></td>
                        <td><a href='editP.php?id=<?php echo $Perdorusi['id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='deleteP.php?id=<?php echo $Perdorusi['id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
    </body>
</html>
<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <h3>Rezervimet e Taksit</h3>
                <th>Emri</th>
                <th>Email</th>
                <th>NrKontaktues</th>
                <th>Lokacioni</th>
         
            </tr>
            </thead>
            <tbody>
                <?php foreach($allRezervimi as $rezervim) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $rezervim['emri'];?></td>
                        <td><?php echo $rezervim['email'];?></td>
                        <td><?php echo $rezervim['nrkontaktues'];?></td>
                        <td><?php echo $rezervim['vendndodhja'];?></td>
                 
                     
                        <td><a href='editR.php?id=<?php echo $rezervim['id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='deleteR.php?id=<?php echo $rezervim['id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
    </body>
</html>

<!DOCTYPE html>
<html>
    <body>
        <table border="1" >
            <thead>
            <tr>
                <h3>Aplikimet e Punes OOP</h3>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Emaili</th>
                <th>Nenshtetsia</th>
                <th>Qyteti</th>
                <th>Adresa</th>
                <th>Mundesit</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($allAplikimet as $student) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $student['emri'];?></td>
                        <td><?php echo $student['mbiemri'];?></td>
                        <td><?php echo $student['email'];?></td>
                        <td><?php echo $student['nenshtetsia'];?></td>
                        <td><?php echo $student['qyteti'];?></td>
                        <td><?php echo $student['adresa'];?></td>
                     
                        <td><a href='edit.php?id=<?php echo $student['id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?id=<?php echo $student['id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
    </body>
</html>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <h3>Lista E Kontakteve</h3>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Emaili</th>
                <th>Ankesa</th>
         
            </tr>
            </thead>
            <tbody>
                <?php foreach($allKontaktat as $student) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $student['fname'];?></td>
                        <td><?php echo $student['lname'];?></td>
                        <td><?php echo $student['email'];?></td>
                        <td><?php echo $student['subject'];?></td>
                      
                        <td><a href='editC.php?id=<?php echo $student['id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='deleteC.php?id=<?php echo $student['id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
    </body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>
<body>
<h1>DASHBOARD</h1>

    <?php
    
        echo '<h3 class="h3-title">REZERVIMET E BERA NGA KLIENTET:</h3>';
        // Lidhja me bazën e të dhënave
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Merrni të dhënat nga baza e të dhënave
        $sql = "SELECT * FROM rezervimi_taksit";
        $result = $conn->query($sql);

        // Shfaqeni të dhënat në faqen HTML
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="content">';
                echo "<p><strong>Emri dhe Mbiemri:</strong> " . $row["emri"] . " " .  "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Nr. Telefonit:</strong> " . $row["nrkontaktues"] . "</p>";
                echo "<p><strong>Qyteti:</strong> " . $row["vendndodhja"] . "</p>";
                echo '</div>';
                echo "<hr>";

            }
        } else {
            echo '<p class="paragrafi">Nuk ka ndonje ankese te paraqitur</p>';
        }

        // Mbyll lidhjen me bazën e të dhënave
        $conn->close();
        ?>

        
    <div id="contactList">
    <?php
    //   echo "<hr>";

    
    echo '<h3 class="h3-title">ANKESAT:</h3>';

        // Lidhja me bazën e të dhënave
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Merrni te dhenat nga baza e te dhenave
        $sql = "SELECT * FROM kontakti";
        $result = $conn->query($sql);

        // Shfaqeni te dhenat ne faqen HTML
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="content">';
                echo "<p><strong>Emri:</strong> " . $row["fname"] . " " . $row["lname"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Ankesa:</strong> " . $row["subject"] . "</p>";               
                echo '</div>';
                echo "<hr>";

            }
        } else {
            echo '<p class="paragrafi">Nuk ka ndonje ankese te paraqitur</p>';
        }
        // echo "<hr>";

        echo '<h3 class="h3-title">APLIKIMET PER PUNE:</h3>';
        

        // Mbyll lidhjen me bazën e të dhënave
        $conn->close();
        ?>
         <?php
        // Lidhja me bazën e të dhënave
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Merrni të dhënat nga baza e të dhënave
        $sql = "SELECT * FROM aplikimetpunes";
        $result = $conn->query($sql);

        // Shfaqeni të dhënat në faqen HTML
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="content">';
                echo "<p><strong>Emri dhe Mbiemri:</strong> " . $row["emri"] . " " . $row["mbiemri"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Nenshtetsia:</strong> " . $row["nenshtetsia"] . "</p>";
                echo "<p><strong>Qyteti:</strong> " . $row["qyteti"] . "</p>";
                echo "<p><strong>Adresa:</strong> " . $row["adresa"] . "</p>";
                echo '</div>';
                echo "<hr>";

                

            }
        } else {
            echo '<p class="paragrafi">Nuk ka ndonje aplikim te paraqitur</p>';
        }

        // Mbyll lidhjen me bazën e të dhënave
        $conn->close();
       
        ?>


         
    </div>
</body>
</html>
>>>>>>> df2a0e106d4fb9444de6fcbe5d20a18340137904

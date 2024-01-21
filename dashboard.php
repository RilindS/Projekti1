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
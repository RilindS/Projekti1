
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tash je ne dashBoard </h1>
    <h3>Mund ti shikosh   </h3>
    <h3>Ankesat</h3>
    <h3>Aplikimet per shofer</h3>
    <h3>Rezervimet</h3>
    <div id="contactList">
    <?php
      echo "<hr>";

      echo "<p><strong>Keto jane ANKESAT</strong></p>";
      echo "<hr>";
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
        $sql = "SELECT * FROM kontakti";
        $result = $conn->query($sql);

        // Shfaqeni të dhënat në faqen HTML
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Emri:</strong> " . $row["fname"] . " " . $row["lname"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Ankesa:</strong> " . $row["subject"] . "</p>";
                echo "<hr>";

            }
        } else {
            echo "<p>Nuk ka ndonje ankes te paraqitur</p>";
        }
        echo "<hr>";

        echo "<p><strong>Keto jane aplikimet per SHOFER</strong></p>";
        echo "<hr>";

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
                echo "<p><strong>Emri dhe Mbiemri:</strong> " . $row["emri"] . " " . $row["mbiemri"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Nenshtetsia:</strong> " . $row["nenshtetsia"] . "</p>";
                echo "<p><strong>Qyteti:</strong> " . $row["qyteti"] . "</p>";
                echo "<p><strong>Adresa:</strong> " . $row["adresa"] . "</p>";
                echo "<hr>";

            }
        } else {
            echo "<p>Nuk ka ndonje aplikim te paraqitur</p>";
        }

        // Mbyll lidhjen me bazën e të dhënave
        $conn->close();
        echo "<hr>";

        echo "<p><strong>Keto jane Rezervimet e bera nga Klientet</strong></p>";
        echo "<hr>";

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
        $sql = "SELECT * FROM rezervimi_taksit";
        $result = $conn->query($sql);

        // Shfaqeni të dhënat në faqen HTML
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Emri dhe Mbiemri:</strong> " . $row["emri"] . " " .  "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Nenshtetsia:</strong> " . $row["nrkontaktues"] . "</p>";
                echo "<p><strong>Qyteti:</strong> " . $row["vendndodhja"] . "</p>";
                echo "<hr>";

            }
        } else {
            echo "<p>Nuk ka ndonje rezervim tash per tash   </p>";
        }

        // Mbyll lidhjen me bazën e të dhënave
        $conn->close();
        ?>
    </div>
</body>
</html>

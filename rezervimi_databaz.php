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

// Merrni vlerat nga formulari
$emri = $_POST['name'];
$email = $_POST['email'];
$nrkontaktues = $_POST['Nrcontact'];
$vendndodhja = $_POST['location'];


// Shto të dhënat në bazën e të dhënave
$sql = "INSERT INTO rezervimi_taksit (emri, email, nrkontaktues, vendndodhja) VALUES ('$emri', '$email', '$nrkontaktues', '$vendndodhja')";

if ($conn->query($sql) === TRUE) {
    header("Location: homeUser.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Mbyll lidhjen me bazën e të dhënave
$conn->close();
?>
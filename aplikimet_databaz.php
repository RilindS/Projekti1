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
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$email = $_POST['email'];
$nenshtetsia = $_POST['nenshtetesia'];
$qyteti = $_POST['qytetet'];
$adresa = $_POST['address'];

// Shto të dhënat në bazën e të dhënave
$sql = "INSERT INTO aplikimetpunes (emri, mbiemri, email, nenshtetsia, qyteti, adresa) VALUES ('$emri', '$mbiemri', '$email', '$nenshtetsia','$qyteti','$adresa')";

if ($conn->query($sql) === TRUE) {
    header("Location: aplikimi.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Mbyll lidhjen me bazën e të dhënave
$conn->close();
?>
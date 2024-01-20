
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
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];

// Shto të dhënat në bazën e të dhënave
$sql = "INSERT INTO kontakti (fname, lname, email, subject) VALUES ('$fname', '$lname', '$email', '$subject')";

if ($conn->query($sql) === TRUE) {
    header("Location: contact.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Mbyll lidhjen me bazën e të dhënave
$conn->close();
?>

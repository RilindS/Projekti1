
<?php
include 'ContactRepository.php';
$id = $_GET['id'];//e merr id e studentit prej url

$strep = new ContactRepository();
$kontakt = $strep->getKontaktById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Perditso te dhenat e kontaktit</h3>
    <form action="" method="post">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
        <input type="text" name="fname"  value="<?php echo $kontakt['fname']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <input type="text" name="lname"  value="<?php echo $kontakt['lname']?>"> <br> <br>
        <input type="text" name="email"  value="<?php echo $kontakt['email']?>"> <br> <br>
        <input type="text" name="subject"  value="<?php echo $kontakt['subject']?>"> <br> <br>

        <input type="submit" name="buton" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['buton'])){
    $id = $kontakt['id']; //merret nga studenti me siper
    $emri = $_POST['fname']; //merret nga formulari
    $mbiemri = $_POST['lname'];
    $email = $_POST['email'];
    $ankesa = $_POST['subject'];


    $strep->editKontakt($id,$emri,$mbiemri,$email,$ankesa);
    header("location:dashboard.php");
}

?>
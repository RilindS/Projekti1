
<?php
include("PerdoruesitRepository.php");
$id = $_GET['id'];//e merr id e studentit prej url

$strep = new PerdoruesitRepository();
$Perdorus = $strep->getPerdoruesiById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit Perdorusin</h3>
    <form action=" #" method="post">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
        <input type="text" name="name"  value="<?php echo $Perdorus['name']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <input type="email" name="email"  value="<?php echo $Perdorus['email']?>"> <br> <br>
        <input type="password" name="password"  value="<?php echo $Perdorus['password']?>"> <br> <br>
        <input type="text" name="user_type"  value="<?php echo $Perdorus['user_type']?>"> <br> <br>

        <input type="submit" name="buton" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['buton'])){
    $id = $Perdorus['id']; //merret nga studenti me siper
    $name = $_POST['name']; //merret nga formulari
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];


    $strep->editPerdoruesi($id,$name,$email,$password,$user_type);
    header("location:dashboard.php");
}

?>
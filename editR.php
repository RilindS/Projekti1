
<?php
include 'RezervimiRepository.php';
$id = $_GET['id'];//e merr id e studentit prej url

$strep = new RezervimiRepository();
$rezervim = $strep->getRezerviminById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edito Rezervimin</h3>
    <form action="" method="post">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
        <input type="text" name="emri"  value="<?php echo $rezervim['emri']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <input type="text" name="email"  value="<?php echo $rezervim['email']?>"> <br> <br>
        <input type="text" name="nrkontaktues"  value="<?php echo $rezervim['nrkontaktues']?>"> <br> <br>
        <input type="text" name="vendndodhja"  value="<?php echo $rezervim['vendndodhja']?>"> <br> <br>

        <input type="submit" name="submit" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
    $id = $rezervim['id']; //merret nga studenti me siper
    $emri = $_POST['emri']; //merret nga formulari
    $email = $_POST['email'];
    $nrkontaktues = $_POST['nrkontaktues'];
    $vendndodhja = $_POST['vendndodhja'];

    echo $id;
    $strep->editRezervimi($id,$emri,$email,$nrkontaktues,$vendndodhja);
    header("location:dashboard.php");
}

?>
<?php
include ("ContactRepository.php");
$id = $_GET['id'];//e merr id prej url

$strep = new ContactRepository();
$strep->deleteKontakt($id);

header("location:dashboard.php");
?>
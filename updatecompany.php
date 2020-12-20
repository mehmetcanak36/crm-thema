<?php 
include "functions_company.php";

$did=$_GET['did'];
$dName = $_POST["name"];
$dEmail= $_POST["email"];
$dAddress =$_POST["address"];
$telephone=$_POST['phone'];


//echo $did,"  ", $dName,"  ",$dEmail,"      ",$dAddress,"   ",$telephone;
updatedepartment($did,$dName,$dEmail,$dAddress,$telephone);
header('Location: company.php');

?>
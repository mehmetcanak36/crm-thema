<?php 
include "functions_company.php";
$dName = $_POST["name"];
$dEmail= $_POST["email"];
$dAddress =$_POST["address"];
$telephone=$_POST['phone'];


//echo $dName,"  ",$dEmail,"  ",$dAddress,"  ",$telephone;
addTable($dName,$dEmail,$telephone,$dAddress);
header('Location: company.php');

?>
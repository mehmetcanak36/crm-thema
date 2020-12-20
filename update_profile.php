<?php 
include "function_profile.php";

$smid=$_GET['id'];
$smName = $_POST["name"];
$smLastName = $_POST["lastname"];
$smUserName= $_POST["username"];
$smPassword =$_POST["password"];


//echo $customerid,"  ", $customerName,"  ",$customerLastName,"   ",$customerEmail,"      ",$customerAddress,"   ";
updateprofile($smid,$smName,$smLastName,$smUserName,$smPassword);
header('Location: mainpage.php');

?>
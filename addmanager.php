<?php 
include "function_manager.php";
$table="manager";
//$conn=connect();
$dName = $_POST["name"];
$dLastName = $_POST["lastname"];
$dEmail= $_POST["email"];
$dAddress =$_POST["address"];


//echo $dName,$dLastName,$dEmail,$dAddress;
addTable($dName,$dLastName,$dEmail,$dAddress);
header('Location: manager.php');

?>
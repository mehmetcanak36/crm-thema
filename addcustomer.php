<?php 
include "functionscustomer.php";
$table="customer";
//$conn=connect();
$customerName = $_POST["name"];
$customerLastName = $_POST["lastname"];
$customerEmail= $_POST["email"];
$customerAddress =$_POST["address"];
$telephone=$_POST['phone'];


//echo $customerName,$customerLastName,$customerEmail,$customerAddress,$telephone;
addTable($customerName,$customerLastName,$customerEmail,$customerAddress,$telephone);
header('Location: add-customer.php');

?>
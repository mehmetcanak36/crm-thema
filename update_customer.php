<?php 
include "functionscustomer.php";
$table="customer";
$conn=connect();
$customerid=$_GET['id'];
$customerName = $_POST["name"];
$customerLastName = $_POST["lastname"];
$customerEmail= $_POST["email"];
$customerAddress =$_POST["address"];
$telephone=$_POST['phone'];


//echo $customerid,"  ", $customerName,"  ",$customerLastName,"   ",$customerEmail,"      ",$customerAddress,"   ",$telephone;
updatecustomer($customerid,$customerName,$customerLastName,$customerEmail,$customerAddress,$telephone);
header('Location: add-customer.php');

?>
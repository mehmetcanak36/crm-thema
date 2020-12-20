<?php 
include "function_manager.php";
$table="manager";

$mid=$_GET['mid'];
$mName = $_POST["name"];
$mLastName = $_POST["lastname"];
$mEmail= $_POST["email"];
$mAddress =$_POST["address"];


//echo $customerid,"  ", $customerName,"  ",$customerLastName,"   ",$customerEmail,"      ",$customerAddress;
updatemanager($mid,$mName,$mLastName,$mEmail,$mAddress);
header('Location: manager.php');

?>
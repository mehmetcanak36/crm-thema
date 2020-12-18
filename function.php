<?php 
function connect(){
    try{ 
 
        $servername = "localhost";
        $database = "crm";
        $username = "root";
        $password = "";
        $connect = mysqli_connect($servername, $username, $password, $database) or die (mysql_error());
       
        if (!$connect) {
            die("Connection failed: " .mysqli_connect_error());
        }
        
       }catch(Exception $e){
           echo "hata :" ,$e ;
       }
    return $connect;
}
function listTable($table){
    $conn=connect();
    $query="SELECT * FROM $table";
    $data=mysqli_query($conn,$query);

    return $data;
}
function addTable($cname,$lastname,$email,$adres,$phone){
    $conn=connect();
    $query="INSERT INTO customer(cName,cLastName,cEmail,cAddress,cPhone)
    VALUE('$cname','$lastname','$email','$adres','$phone')";
    $data=mysqli_query($conn,$query);
}
function deletecustomer($id){
    $conn=connect();
    $query="DELETE FROM customer where id = $id";
    $data = mysqli_query($conn,$query);
    header("Location: customer.php");
    return $data; 
}
function updatecustomer($id,$customerName,$customerLastName,$dcustomerEmail,$costumerAddress,$customerManager,
    $customerdepartment){
    $conn=connect();
    $query="UPDATE customer SET cName='$customerName',cLastName='$customerLastName',
    cEmail='$dcustomerEmail',cAddress='$costumerAddress',manager_id='$customerManager'
    ,deopartment_id='$customerdepartment' WHERE id='$id'";
    $data=mysqli_query($conn,$query);
    header("Location: department.php");
}

function getData($id){
    $conn=connect();
    $query="SELECT * FROM customer WHERE id=$id";
    $data=mysqli_query($conn,$query);
    return $data;
}

function control($username,$password){
  $conn=connect();
   $query="SELECT smUserName,smPassword FROM systemmanager WHERE smUserName = '$username' and smPassword ='$password'";
   $data=mysqli_query($conn,$query);
   foreach($data as $d){
       if($d['smUserName']==$username){
           return true;
       }
       else{
           return false;
       }
   }
}
function getdatatable($table) {
    $conn=connect();
    $conn=connect();
    $query="SELECT * FROM $table";
    $data=mysqli_query($conn,$query);

    return $data;
}



?>
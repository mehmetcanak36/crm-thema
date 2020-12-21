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
    $query="SELECT *FROM customer
    LEFT JOIN department ON  customer.department_id =  department.did
    LEFT JOIN manager ON  customer.manager_id = manager.mid";
    $data=mysqli_query($conn,$query);

    return $data;
}
function addTable($cname,$lastname,$email,$adres,$phone,$m,$d,$image){
    $conn=connect();
    $query="INSERT INTO customer(cName,cLastName,cEmail,cAddress,cPhone,manager_id,department_id,cimagename)
    VALUE('$cname','$lastname','$email','$adres','$phone','$m','$d','$image')";
    $data=mysqli_query($conn,$query);
}
function deletecustomer($id){
    $conn=connect();
    $query="DELETE FROM customer where id = $id";
    $data = mysqli_query($conn,$query);
    header("Location: clist.php");
    return $data; 
}
function updatecustomer($id,$customerName,$customerLastName,$dcustomerEmail,$costumerAddress,$customerPhone,$cmanager,$cdepartment){
    $conn=connect();
    $query="UPDATE customer SET cName='$customerName',cLastName='$customerLastName',
    cEmail='$dcustomerEmail',cAddress='$costumerAddress',cPhone='$customerPhone',manager_id='$cmanager',department_id='$cdepartment'
     WHERE id='$id'";
    $data=mysqli_query($conn,$query);
    header("Location: clist.php");
}

function getData($id){
    $conn=connect();
    $query="SELECT *
    FROM customer
    INNER JOIN department ON  customer.department_id =  department.did
    INNER JOIN manager ON  customer.manager_id = manager.mid
    WHERE id=$id";
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
function deletedepartment($id){
    $conn=connect();
    $query="DELETE FROM department where did = $id";
    $data = mysqli_query($conn,$query);
    header("Location: company.php");
    return $data; 
}

?>
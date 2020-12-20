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
function addTable($dname,$email,$phone,$adres){
    $conn=connect();
    $query="INSERT INTO department(dName,dAddress,dEmail,dPhoneNumber)VALUE('$dname','$adres','$email','$phone')";
    $data=mysqli_query($conn,$query);
}
function deletedepartment($id){
    $conn=connect();
    $query="DELETE FROM department where did = $id";
    $data = mysqli_query($conn,$query);
    header("Location: company.php");
    return $data; 
}
function updatedepartment($id,$departmentName,$departmentEmail,$departmentAddress,$departmentPhoneNumber){
    $conn=connect();
    $query="UPDATE department SET dName='$departmentName',
    dAddress='$departmentAddress',dEmail='$departmentEmail',dPhoneNumber='$departmentPhoneNumber' WHERE did='$id'";
    $data=mysqli_query($conn,$query);
    header("Location: company.php");
}

function getData($id){
    $conn=connect();
    $query="SELECT * FROM department WHERE did=$id";
    $data=mysqli_query($conn,$query);
    return $data;
}

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
    header("Location: clist.php");
    return $data; 
}
function updateprofile($id,$smName,$smLastName,$username,$password){
    $conn=connect();
    $query="UPDATE systemmanager SET smName='$smName',smLastName='$smLastName',
    smUserName='$username',smPassword='$password'
     WHERE ID='$id'";
    $data=mysqli_query($conn,$query);
    
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
function getdatatab($table) {
    $conn=connect();
    $query="SELECT * FROM $table";
    $data=mysqli_query($conn,$query);

    return $data;
}



?>
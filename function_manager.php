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
function addTable($cname,$lastname,$email,$adres){
    $conn=connect();
    $query="INSERT INTO manager(mName,mLastName,mEmail,mAddress)
    VALUE('$cname','$lastname','$email','$adres')";
    $data=mysqli_query($conn,$query);
}
function deletemanager($id){
    $conn=connect();
    $query="DELETE FROM manager where mid = $id";
    $data = mysqli_query($conn,$query);
    header("Location: manager.php");
    return $data; 
}
function updatemanager($id,$mName,$mLastName,$mEmail,$mAddress){
    $conn=connect();
    $query="UPDATE manager SET mName='$mName',mLastName='$mLastName',
    mEmail='$mEmail',mAddress='$mAddress'
     WHERE mid='$id'";
    $data=mysqli_query($conn,$query);
    header("Location: manager.php");
}

function getData($id){
    $conn=connect();
    $query="SELECT * FROM manager WHERE mid=$id";
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
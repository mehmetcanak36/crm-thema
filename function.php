


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
    $query="SELECT * FROM $table";
    $data=mysqli_query($conn,$query);

    return $data;
}

?>
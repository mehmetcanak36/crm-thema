<?php
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

?>
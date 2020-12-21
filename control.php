<?php include "function.php"?>



<?php 
$username=$_GET['username'];
$password=$_GET['password'];
#echo $password,$username;
$data=control($username,$password);

if($data == true){
    header('Location: mainpage.php');
}
else{
    header('Location: login.php');
}
/*foreach($data as $d){
        print_r( $d['smUserName'],$d['smPassword']);
       # header('Location: mainpage.php');    
} */


?>
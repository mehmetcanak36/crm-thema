
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
?>


<?php 
include "function.php";
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
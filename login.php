<?php

$servername = "localhost";
 $username = "root"; 
 $password = ""; 
 $dbname = "chalchitra"; 



$email=$_POST['email'];
$pass=$_POST['password'];


$e_pass=md5($pass);
$conn= mysqli_connect($servername,$username,$password,$dbname); 
if(!$conn){
echo ("conneciton failed:". mysqli_connect_error()); 
}   
$sql = "SELECT id FROM user WHERE Email='$email' AND Password='$e_pass'"; 
$result = mysqli_query($conn,$sql);  


if(mysqli_num_rows($result)>0){
    
     header('location:success.php');
     
    } 
    else {
         header('location:failed.html');
    }
?>


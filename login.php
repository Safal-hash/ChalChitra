<?php 
$servername = "localhost";
 $username = "root"; 
 $password = ""; 
 $dbname = "mydb"; 



$uname=$_POST['username'];
$pass=$_POST['password']; 
$conn= mysqli_connect($servername,$username,$password,$dbname); 
if(!$conn){
echo ("conneciton failed:". mysqli_connect_error()); 
}   
$sql = "SELECT id FROM user WHERE username='$uname' AND Password='$pass'"; 
$result = mysqli_query($conn,$sql);  


if(mysqli_num_rows($result)>0){
     header('location:https://www.youtube.com/watch?v=k-P6P_-rdjg');
     session_start(); 
    } 
    else {
         header('location:failed.html');
    }
    ?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$email = $_POST['email'];
$pass = $_POST['password'];
$uname = $_POST['username'];



$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO user (Email, username, Password)
VALUES ('$email', '$uname','$pass' )";

if (mysqli_query($conn,$sql)){
    header("location:login.php");
}
else{
    echo "tujhse nahi hoga lawdeya";
}




?>

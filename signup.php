<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "chalchitra"; 



$email=$_POST['email'];
$pass=$_POST['password'];


$e_pass=md5($pass);



$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    echo "Database connection failed";
    return false;
}


$sql = "INSERT INTO user (Email, Password)
VALUES ('$email','$e_pass' )";

if (mysqli_query($conn,$sql)){
    echo '<div class="alert alert-success" role="alert">
    A simple success alert—check it out!
  </div>';
  sleep(2);
    header("location:login.html");
}
else{
    header("location:failed.php");
    
}




?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

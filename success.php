<?php 

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "chalchitra"; 



$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
  echo "Database connection failed";
  return false;
}

$sql_temp = "SELECT * from temp";
$result_temp =mysqli_query($conn,$sql_temp);


$datas = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($datas as $data){
    $email= htmlspecialchars($data['Email']);
    $pass= htmlspecialchars($data['password']);
}

$e_pass=md5($pass);

$sql_temp_del = "DELETE * from temp";
$result_temp_del = mysqli_query($conn, $result_temp_del);

$sql = "INSERT Into user (Email, Password) VALUES ($email, $e_pass)";
$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>

<body style="background-color:black ;">
    <div class="position-relative">
        <img src="images/a.jpg" alt="" style="width: 1920px; height: 800px; overflow:hidden; filter:brightness(.6)">
    
        <div class="position-absolute px-4" style="top: 370px;">
            <H1 class="text-white" style="font-size: 60px;">THE <font style="color: #c75300;">KASHMIR </font>FILES</H1>
            <p class=" w-50 text-white" style="font-size: 25px;">The Kashmir Files is a 2022 Indian Hindi-language drama
                film, written and directed by Vivek Agnihotri.
                Produced by Zee Studios The film is based on the <font style="color:#c75300"><B>exodus</B></font> of
                Kashmiri Pandits during the Kashmir
                insurgency,which it portrays as a <font style="color:#c75300"><b>genocide</b></font> with a fictional
                storyline. It stars Anupam Kher,
                Darshan Kumar, Pallavi Joshi and Mithun Chakraborty.</p>

        </div>
        <div class="position-absolute px-4" style="bottom: 80px;">
            <a href="videos/vid.mp4"> <button type="button" class="btn btn-light" style="width: 200px; height:50px"><img
                        src="images/play.png" alt="" style="width: 30px;"> <b
                        style="font-size: 20px;">Play</b></button></a>
            <a href="https://en.wikipedia.org/wiki/The_Kashmir_Files"> <button type="button" class="btn btn mx-3"
                    style="width: 200px; height:48px; background-color:#c75300"><b style="font-size: 20px;">More
                        Info</b></button> </a>

        </div>
    </div>
    <div>
        
    </div>





    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
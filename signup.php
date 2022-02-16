<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-transparent">
        <a href="index.html" class="navbar-brand mx-4" style="
          color: #c41422;
          font-family: 'The Nautigal', cursive;
          font-size: 45px;
        ">ChalChitra</a>
        <a class="border-0 rounded-pill mx-5 px-5" style=" color: #c41422" type="submit" href="login.html">
            <h5>
                SignIn
            </h5>
        </a>
    </nav>
    <hr class="mt-0" style="border-top: 3px dotted black" />



    <div class="position-relative" style="height: 600px">
        <!--text-->

        <div class="position-absolute top-50 start-50 translate-middle col-3">
            <?php

if ($_SERVER['REQUEST_METHOD']== 'POST'){
     
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

$email_check = "SELECT ID FROM user WHERE Email='$email'";
$result = mysqli_query($conn,$email_check);

if(mysqli_num_rows($result)>0){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Email already exists!!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['pass']=$e_pass;
header('location:esewa.html');
}






}
?>
            <font>STEP 1 OF 3</font>
            <h1 style="font-size: 26px">
                So Finally You Are Here! <br />Your Fav TV Shows Are Just Few Minutes
                Away.
            </h1>

            <h1 style="font-size: 16px; color: #808080">
                Enter a Email And A Secure Password Then We Are Good To <br />Go
            </h1>
            <!--Form-->
            <form action="signup.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter Your Email" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Enter a Password (A Secure One)" />
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-danger" style="font-size: 20px; width: 200px">
                        Submit
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!--Footer-->

    <hr class="mt-5 p-0" style="border-top: 2px solid white" />

    <div class="position-absoulte mt-5" style="background-color: #808080; height: 162px; font-size: 17px;">
        <div class="d-flex mx-5">
            <h5 class="font-weight-bold col-3">Useful Links</h5>

        </div>
        <br>

        <div class="d-flex mx-5">
            <font class="font-weight-bold col-3">Privacy Policies</font>
            <font class="font-weight-bold col-3">About Us</font>
            <font class="font-weight-bold col-3">Our Team</font>
            <font class="font-weight-bold col-3">Get Help</font>
        </div>
        <br>
        <div class="d-flex mx-5">
            <font class="font-weight-bold col-3">Terms Of Use</font>
            <font class="font-weight-bold col-3">Contact Us</font>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
</body>

</html>
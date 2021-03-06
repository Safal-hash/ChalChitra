
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap"
      rel="stylesheet"
    />

    <title>Document</title>
  </head>
<body>
  <!--navBar-->
  <div>
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
  </div>
  <hr style="border:2px solid black">
  <div class="position-relative mx-5 " style="height: 600px; ">
    <div class="position-absolute top-50 start-50 translate-middle col-3 text-center">
      <img src="images/cash-coin.svg" alt="" style="width: 30px; height: 30px;" class=""><br> <br>

      <font class="">STEP <strong class="text-danger">2</strong> OUT OF <strong>2</strong></font>

      <h2>Make Your Payment And <font class="text-danger">You Are Ready To Go.</font></h2>

      <h5>The World Of Mind-Blowing Content Is Waiting For You. <br> We accept <font class="text-danger">E-sewa.</font> </h5> <br>



<form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="199" name="tAmt" type="hidden">
    <input value="199" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php echo(rand()); ?>" name="pid" type="hidden">
    <input value="http://localhost/ChalChitra/success.php" type="hidden" name="su">
    <input value="https://www.youtube.com/watch?v=yMySP6-O_SA" type="hidden" name="fu">
    <div class="text-left">
    <button type="submit" class="btn" style="border: 1px solid #808080; width: 400px; font-size: 18px;">Pay <font style="color: green;">Rs.199/-</font></button>
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







 <!--JS-->
 <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
</body>
</html>
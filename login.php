<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/loginform.css">
<link rel="stylesheet" href="css/rsdp.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/iconbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="main">

    <img class="logo" src="images/logo.png" alt="RSDP logo" width="150"></a>
&nbsp;
<h2> RSDP Consultancy</h2>

<div class="navlinks">

<a href="login.php" style="font-size:15px;" text-color="#FFF">Login</a>
<a href="register.php" style="font-size:15px;" text-color="#FFF">Sign Up</a>
</div>


</div>





<div class="links">

<a href="index.php">Home</a>

<a href="institutions.php">Institutions</a>



<a href="aptitudetest.php">Aptitude Test</a>

<a href="reviewform.php">Review</a>
<a href="appointmentform.php">Book a Session</a>



</div>
<center>
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h1> Login </h1>
    <h3> If you already got an account, Please sign in here. If you don't have a user profile continue to the sign up page.</h3>
<form action="validation.php" method="post"
<div class="form-group">
<label> Username </label> &nbsp;&nbsp;&nbsp;
<input type="text" name="user" class="form-control" required>
</div>

<div class="form-group">
<label> Password </label> &nbsp;&nbsp;&nbsp;
<input type="password" name="password" class="form-control" required>
</div>
<br>
<button type="submit" class="btn btn-primary"> Login </button>
<br>
<br>
<a href="adminlogin.php">Login as admin</a>
<p> Not yet a member? <a href="register.php">Sign Up</a> </p>
</form>
</div>
</div>
</div>
</div>

<br>


    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <span class="psw"> <a href="reset1.php">Reset Password</a></span>
  </div>
  </center>
<br>
<br>
<br>






  <div class="footer">

  <a href="aboutus.php" style= "font-size:15px;" text-color="#FFF">About Us</a>
<a href="contactus.php" style="font-size:15px;" text-color="#FFF">Contact Us</a>
<a href="reviewform.php" style="font-size:15px;" text-color="#FFF">Review</a>

<br>

<div class="medialinks">
<a href="https://www.facebook.com/rsdp.consultancy" class="fa fa-facebook"></a>
<a href="https://twitter.com/ConsultancyRsdp" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/channel/UC1tqqEsiRHY0jseWlxbN_zg" class="fa fa-youtube"></a>
</div>



</div>
</body>
</html>

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

      <img class="logo" src="images/logo.png" alt="RSDP logo" width="150">
  &nbsp;
  <h2> RSDP Consultancy</h2>

  <div class="navlinks">

  <a href="login.php" style="font-size:15px;" color="#FFF">Login</a>
  <a href="register.php" style="font-size:15px;" color="#FFF">Sign Up</a>
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
  <img class="logo" src="images/result.png" style="width:100%; height: 300px;">

<h3>Your test has been successfully completed</h3>
<?php
if (!empty($_POST)) {
  $ans1 = $_POST['ans1'];
  $ans2 = $_POST['ans2'];
  $ans3 = $_POST['ans3'];
  $ans4 = $_POST['ans4'];
  $ans5 = $_POST['ans5'];
  $correct = 0;
  if ($ans1 == 2) {
    $correct++;
  }
  if ($ans2 == 193) {
    $correct++;
  }
  if ($ans3 == 72) {
    $correct++;
  }
  if ($ans4 == 100) {
    $correct++;
  }
  if ($ans5 == 1) {
    $correct++;
  }
echo "<h1>You got $correct correct!</h1>";
$grade = ($correct / 5) * 100;
if ($correct == 0) {
  echo "<h2> Better Luck next time!</h2>";
}

elseif ($correct == 5) {
  echo "<h2>You aced it!</h2>";
}
} else {
  echo "<p> take the quiz </p>";
}
?>
</center>
<div class="footer">

<a href="aboutus.php" style= "font-size:15px;" color="#FFF">About Us</a>
<a href="contactus.php" style="font-size:15px;" color="#FFF">Contact Us</a>
<a href="reviewform.php" style="font-size:15px;" color="#FFF">Review</a>

<br>

<div class="medialinks">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-skype"></a>
</div>


</div>

</body>
</html>

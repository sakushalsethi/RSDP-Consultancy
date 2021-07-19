<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="css/rsdp.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/iconbar.css">
<link rel="stylesheet" href="css/aptitudetest.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Aptitude Test</title>

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
<div class="container">
<div class="row col-md-6 col-md-offset-3">
<div class="panel panel-primary">
<div class="panel-heading text-center">

  <h1> Aptitude Test</h1>

</div>
<div class="panel-body">

<form action="aptitudequiz.php" method="post">
<div class="form-group">
<label for="status">I am</label>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<select id="status">
  <option value="postgraduated">post graduated</option>
  <option value="graduated">graduated</option>
  <option value="highschool">high-school passed</option>
</select>
</div>

<br>
<div class="form-group">
  <label for="stream">Subject/Stream</label> &nbsp; &nbsp;&nbsp;
  <select id="stream">
    <option value="mathematics">Mathematics</option>
    <option value="science">Science</option>
    <option value="business">Business</option>
    <option value="history">History</option>
  </select>
</div>

<br>
<input type="submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>
</center>

  <div class="footer">

  <a href="aboutus.php" style= "font-size:15px;" color="#FFF">About Us</a>
<a href="contactus.php" style="font-size:15px;" color="#FFF">Contact Us</a>
<a href="reviewform.php" style="font-size:15px;" color="#FFF">Review</a>

<br>

<div class="medialinks">
<a href="https://www.facebook.com/rsdp.consultancy" class="fa fa-facebook"></a>
<a href="https://twitter.com/ConsultancyRsdp" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/channel/UC1tqqEsiRHY0jseWlxbN_zg" class="fa fa-youtube"></a>
</div>


</div>

</body>
</html>

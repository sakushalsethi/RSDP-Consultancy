<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="css/rsdp.css">
<link rel="stylesheet" href="css/iconbar.css">
<link rel="stylesheet" href="css/footer.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Review Page</title>

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
<div class="row col-md-6 col-md-offset-3">
<div class="panel panel-primary">
<div class="panel-heading text-center">

  <h1> Your feedback is appreciated </h1>
    <h3> Your honest answers will give us the opportunity to improve the level of service provided</h3>
</div>
<div class="panel-body">

<form action="review.php" method="post">
<div class="form-group">
<label for="name">Full Name</label> &nbsp; &nbsp;&nbsp;
<input type="text" class="form-control" id="name" name="name" required />
</div>
<br>
<div class="form-group">
<label for="feedback">Feedback (1-5)</label>&nbsp;&nbsp;&nbsp;
<input type="text" class="form-control" id="feedback" name="feedback" required />
</div>
<br>
</div>
<div class="form-group">
  <label for="comments">Comments</label>
  <textarea name="comments" class="form-control" id="comments" name="comments" style="font-size:1em;" required></textarea>
  <br>
</div>


<br>
<input type="submit" class="btn btn-primary">
</form>

</div>
</center>

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

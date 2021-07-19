
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1">
<title>
  RSDP Consultancy
</title>
<link rel="stylesheet" href="css/rsdp.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/institutions.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="main">

    <img class="logo" src="images/logo.png" alt="RSDP logo" width="150">
&nbsp;
<h2 style="text-shadow: 1px 1px 1.5px #2F4F4F;"> RSDP Consultancy</h2>

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
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('10-15')">$10-$15 Thousands</button>
  <button class="btn" onclick="filterSelection('15-20')"> $15-$20 Thousands</button>
  <button class="btn" onclick="filterSelection('20-25')"> $20-$25 Thousands</button>
  <button class="btn" onclick="filterSelection('25-30')"> $25-$30 Thousands</button>
</div>

<div class="container">
  <div class="filterDiv 10-15">Australian National University (QLD/VIC)</div>
  <div class="filterDiv 15-20">Australian Catholic University (VIC/TAS/NSW)</div>
  <div class="filterDiv 10-15">Charles Sturt University (WA/VIC/QLD)</div>
  <div class="filterDiv 15-20">Macquarie University (NSW/TAS)</div>
  <div class="filterDiv 10-15">Southern Cross University (SA/VIC/NSW) </div>
  <div class="filterDiv 15-20">University of New England (VIC/TAS)</div>
  <div class="filterDiv 20-25">University of New South Wales (NSW)</div>
  <div class="filterDiv 25-30">University of Newcastle (VIC/NSW)</div>
  <div class="filterDiv 10-15">University of Wollongong (WA)</div>
  <div class="filterDiv 20-25">Charles Darwin University (NT/VIC)</div>
  <div class="filterDiv 20-25">Federation University of Australia (VIC/NSW)</div>
  <div class="filterDiv 20-25">University of the Sunshine (NSW/NT)</div>
  <div class="filterDiv 25-30">Flinders University (VIC)</div>
</div>
</center>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>





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

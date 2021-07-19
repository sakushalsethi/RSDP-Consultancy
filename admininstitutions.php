<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1">
<title>
  RSDP Consultancy
</title>
<link rel="stylesheet" href="css/rsdp.css">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/institutions.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="main">

    <img class="logo" src="images/logo.png" alt="RSDP logo" width="150" heigth="150">
&nbsp;
<h2> RSDP Consultancy</h2>

<div class="navlinks">

<a href="login.php" style="font-size:15px;" text-color="#FFF">Login</a>
<a href="register.php" style="font-size:15px;" text-color="#FFF">Sign Up</a>

</div>
</div>









<div class="sidebar">
  <strong><a href="admin.php" style="padding:18px 29px 18px 29px; background:  #005c99;">Dashboard</a></strong>
  <a href="admininstitutions.php"><i class="fa fa-pencil"></i> Update Institutes</a>
  <a href="adminschedule.php"><i class="fa fa-clock-o"></i> Scheduled Appointments</a>
  <a href="adminquiz.php"><i class="fa fa-fw fa-wrench"></i> Update Test Questions</a>
  <a href="adminreview.php"><i class="fa fa-comment-o"></i> Check Reviews</a>
  <a href="index.php" style="padding:18px 29px 18px 29px;"><i class="fa fa-sign-out"></i> Log Out</a>

</div>






<center><br><br><br>

  <h1>Update Institutes list</h1>
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
<center>
<strong><a href="adddlt.php">+ Add Institute<a></strong>&nbsp;&nbsp;&nbsp;&nbsp;
<strong><a href="adddlt.php">- Remove Institute<a></strong>
</center>
</body>
</html>

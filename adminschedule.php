<?php
include_once('schedule2.php');
$query="select * from appointment";
$result=mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Scheduled Appointments</title>
    <link rel="stylesheet" href="css/rsdp.css">
    <link rel="stylesheet" href="css/admin.css">


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
<br>
<hr>
<br>
<br>
	<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="3"><h2>Appointments</h2></th>
		</tr>
			  <th> Name </th>
			  <th> Email </th>
			  <th> Number </th>


		</tr>

		<?php while($rows=mysqli_fetch_assoc($result))
		{
		?>
		<tr> <td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['number']; ?></td>

		</tr>
	<?php
               }
          ?>

	</table>




	</body>
	</html>

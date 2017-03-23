<!DOCTYPE html>
<html>
<head>
	<title>EjiLeader Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<div class="box">
			<a href="/project_webpro/Rooms/index-cus.php"><img src="Images/u.png" height="50" width="300"></a>
			
			<br><br>
	</div>
</head>
<body background="Images/slide5.jpg" style="background-attachment: fixed;">
<div class="box-left">
	<div style="border: none;">
	    <h3></h3>
	        <ul>
	            <li><a href="login.php">Back to login</a></li>
	        </ul>
    </div>
</div>
<div class="box-right">
<br>
<h3>Check information</h3>
<div class="container" style="border: none;">
<form name="checkuser" action = "checkforget.php"  method = "POST">
				<ul><div class="box-left">Username</div>
					<div class="box-right"><input type="text" name="username" class="form-control" placeholder="Username" required></div></ul>			
				<ul><div class="box-left">Firstname</div>
					<div class="box-right"><input type="text" name="fname" class="form-control" placeholder="Firstname" pattern="[A-Za-z].{0,}" required></div></ul>
				<ul><div class="box-left">Lastname</div>
					<div class="box-right"><input type="text" name="lname" class="form-control" placeholder="Lastname" pattern="[A-Za-z].{0,}" required></div></ul>
				<ul><div class="box-left">ID Card</div>
					<div class="box-right"><input type="text" name="idcard" class="form-control" placeholder="ID Card" pattern="[0-9]{13}" minlength="13" maxlength="13" required></div></ul>
				<ul><div class="box-left">Birthday</div>
					<div class="box-right"><input type="date" name="birthday" class="form-control" placeholder="Birthday" required></div></ul>
				<ul><div class="box-left">Email</div>
					<div class="box-right"><input type="email" name="email" class="form-control" placeholder="youremail@youremail.com" required></div></ul>
				


					<div class="box-right"  style="border: none;" >
					<br>
							<ul><input type="submit" name="submit" value="Confirm" class="btn btn-primary btn-block"></ul>
					</div>
			</form>
</div>




</div>
</body>
<footer class="navbar-fixed-bottom">
	<div id="footer">
	<br><br><br>
		<center>
		@
		<?php
			echo date("Y");
			echo " - EjiLeader Resort and Spa";
		?>
		</center>

	</div>
</footer>
</html>
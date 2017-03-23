<!DOCTYPE html>
<html>
<head>
	<title>EjiLeader Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<div class="box">
			<a href="index.php"><img src="Images/u.png" height="50" width="300"></a>
			<br><br>
	</div>
</head>



<script language = "JavaScript">
function checkpass() {
	if(document.resetpass.password.value != document.resetpass.repassword.value){
		alert('Confirm Password Not Match');
		document.resetpass.repassword.focus();     
		return false;
	}  
}

</script>
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
<h3>Reset Password</h3>
<div class="container" style="border: none;">
<form name="resetpass" action = "updatepass.php"  method = "POST">
				<ul><div class="box-left">Password</div>
					<div class="box-right"><input type="password" name="password" class="form-control" placeholder="Password" pattern=".{8,}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></div></ul>
				<ul><div class="box-left">Re-Password</div>
					<div class="box-right"><input type="password" name="repassword" class="form-control" placeholder="Re-Password" pattern=".{8,}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></div></ul>

					<div class="box-right"  style="border: none;" >
					<br>
							<ul><input type="submit" name="submit" value="Reset Password" class="btn btn-primary btn-block" onClick="return checkpass()";></ul>
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
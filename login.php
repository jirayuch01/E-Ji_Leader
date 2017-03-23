<!DOCTYPE html>
<html>
<form action = checkuser.php  method = POST>
<head>
	<title>EjiLeader Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style>
		body{
			color:#555555;
			font-size:0.825em;
			background: #fcfcfc;
			font-family:Arial, Helvetica, sans-serif;
		}

		#exampleBody{
			background-image: url(Images/slide5.jpg);
		}
		.className{
			background-color:white;
			width:500px;
			height:300px;
			position:relative;

			-moz-border-radius:6px;
			-webkit-border-radius:6px;
			border-radius:10px;
		}
		.className p{
			font-size:22px;
			margin:45px 10px 10px;
			color:white;
		}

		div#header { /* ส่วนหัวสำหรับใส่ logo */
	  		background:url("Images/qqqqq.png"); /* พื้นหลังของ logo */
		}

		div#footer { /* ส่วนด้านล่าง */
		  	position:absolute;
		  	width:100%;
		  	left: 0;
		  	bottom:0; /* stick to bottom */ 
		  	text-align:center;
		  	font-size: 14px;
		  	background:url(""); /* พื้นหลังของ footer */
		}
	</style>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
						   
	$(window).resize(function(){

		$('.className').css({
			position:'absolute',
			left: ($(window).width() - $('.className').outerWidth())/2,
			top: ($(window).height() - $('.className').outerHeight())/2
		});
		
	});
	$(window).resize();

});
</script>


</head>

<body id="exampleBody">

<div class="className">
	<div class="container">
		<center>
			<!--<h1><font color="gray">LOGIN</font></h1>-->
			<a href="/project_webpro/Rooms/index-cus.php"><br><center><img src="Images/u.png" height="60" width="300"></center><br><br></a>
		</center>
		<input type="text" name="username" class="form-control" placeholder="Username" required autofocus="">
		<br>
		<input type="password" name="password" class="form-control" placeholder="Password" required><br><br></span>
		<span style="padding-left:150px"><a href="/project_webpro/regis-form.php" ><font color="gray" size="3">Register</font></a>
		<span style="padding-left:20px"><a href="/project_webpro/Rooms/index-cus.php" ><font color="gray" size="3">Go to Home</font></a></span>
		<span style="padding-left:20px"><a href="forget.php" ><font color="gray" size="3">Forget password</font></a></span>
		
		<br><br><br>
		<div align="center">
			<input type="submit" name="submit" value="OK" class="btn btn-lg btn-primary btn-block">
		</div>
	</div>
</div>
</body>
</form>
<footer class="navbar-fixed-bottom">
	<div id="footer">
	<br><br><br>
		@
		<?php
			echo date("Y");
			echo " - EjiLeader Resort and Spa";
		?>
		<br>
	</div>
</footer>


</html>
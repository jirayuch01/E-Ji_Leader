<!DOCTYPE html>
<html>
<head>
	<title>EjiLeader Resort and Spa</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<div class="box">
			<!--<h3  style="display: inline;" align="left"><a href="index-customer.php">EjiLeader Resort and Spa</a></h3>-->
			<a href="/project_webpro/Rooms/index-cus.php"><img src="Images/u1.png" height="50" width="300"></a>
			<span style="padding-left:50%"><h5  style="display: inline;" align="right">Welcome : </h5></span>
			<?php	
				session_start();
				if(!empty($_SESSION['username']))
				{
					echo $_SESSION['username'];
					echo '<span style="padding-left:10px"><a href="logout.php" ><h5 style="display: inline;">Logout</h5></a></span>';
				}else{
					echo "Guest";
					echo '<span style="padding-left:10px"><a href="../login.php" ><h5 style="display: inline;">Go to Login</h5></a></span>';
				}
				
			?>
			
			<br><br>
	</div>
<style type="text/css">
	div#header { /* ส่วนหัวสำหรับใส่ logo */
	  background:url("Images/qqqqq.png"); /* พื้นหลังของ logo */
	}

	div#footer { /* ส่วนด้านล่าง */
	  position:absolute;
	  width:100%;
	  left: 0;
	  bottom:0; /* stick to bottom */ 
	  text-align:center;
	  background:url(""); /* พื้นหลังของ footer */

	}
</style>
</head>
<body background="Images/slide5.jpg" style="background-attachment: fixed;">


</body>
</html>
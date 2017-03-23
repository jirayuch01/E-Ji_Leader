<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 		<link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/layout-c0934f68b4.css" /> 
 		<link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/layout-3752f8b1d8.css" /> 



</head>
<script language = "JavaScript">
function checkpass() {
	if(document.adduser.password.value != document.adduser.repassword.value){
		alert('Confirm Password Not Match');
		document.adduser.repassword.focus();     
		return false;
	}  
}

</script>

<body>
<?php
	$connect = new mysqli("localhost","root","","projectwebpro");
	require("menu-admin.php");
	require("header-nofooter.php");
?>
	<div class="box-left">
	<br><br>
<?php
			menu_admin();
?>
	</div>
	  	<div align="box-left"> 
	    	<div class="container"> 
	    		<div id="hero-banner-hosted">
<div class="tab-content"> 
<div id="tab-hotel" class="tab-pane active">
<div class="oneline-searchbox" style="width:100%px;height:280%;"> 
	<div class="box-right"  style="border: none;" >
		<div style="border: none;" >
			<form name="adduser" action = "addbg.php"  method = "POST">
				<ul><div class="box-left">Username</div>
					<div class="box-right"><input type="text" name="username" class="form-control" placeholder="Username" required></div></ul>			
				<ul><div class="box-left">Password</div>
					<div class="box-right"><input type="password" name="password" class="form-control" placeholder="Password" pattern=".{8,}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></div></ul>
				<ul><div class="box-left">Re-Password</div>
					<div class="box-right"><input type="password" name="repassword" class="form-control" placeholder="Re-Password" pattern=".{8,}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></div></ul>
				<ul><div class="box-left">Firstname</div>
					<div class="box-right"><input type="text" name="fname" class="form-control" placeholder="Firstname" pattern="[A-Za-z].{0,}" required></div></ul>
				<ul><div class="box-left">Lastname</div>
					<div class="box-right"><input type="text" name="lname" class="form-control" placeholder="Lastname" pattern="[A-Za-z].{0,}" required></div></ul>
				<ul><div class="box-left">Sex</div></ul>
					<input type=radio name="Gender" value="M" required>Male
					<input type=radio name="Gender" value="F" required>Female
				</ul>
				<ul><div class="box-left">ID Card</div>
					<div class="box-right"><input type="text" name="idcard" class="form-control" placeholder="ID Card" pattern="[0-9]{13}" minlength="13" maxlength="13" required></div></ul>
				<ul><div class="box-left">Birthday</div>
					<div class="box-right"><input type="date" name="birthday" class="form-control" placeholder="Birthday" required></div></ul>
				<ul><div class="box-left">Address</div> 
					<div class="box-right"><input type="text" name="address" class="form-control" placeholder="Address" required></div></ul>
				<ul><div class="box-left">Telephone</div>
					<div class="box-right"><input type="tel" name="telephone" class="form-control" placeholder="0123456789" pattern="[0-9]{10}" minlength="10" maxlength="10" required></div></ul>
				<ul><div class="box-left">Email</div>
					<div class="box-right"><input type="email" name="email" class="form-control" placeholder="youremail@youremail.com" required></div></ul>
				<ul><div class="box-left">Position</div>
					<div class="box-right">
					<select name="Position" required>
						<option value="">Select...</option>
						<option value="adm">Admin</option>
						<option value="emp">Employee</option>
					</select></div></ul>


					<div class="box-right"  style="border: none;" >
					<br>
							<ul><input type="submit" name="submit" value="Add" class="btn btn-primary btn-block" onClick="return checkpass()";></ul>
					</div>
			</form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
<div style="padding-left: 90px;">
    <div class="col-md-12" >
        <div class="row footer" >
            <div class="col-md-6 footer-left" align="left" style="background-color: white;">
                <b>EjiLeader Resort and Spa</b><br>
                PSU Phuket, Kathu, Kathu, Phuket 83120<br>
                Telephone : 076276012-(13)&nbsp;&nbsp;Fax : 076276002<br>
                GPS : N8.02999425344937 / E98.8238769795623 
            </div>
            <div class="col-md-6 footer-right" style="background-color: white;">
                <a href="/project_webpro/Rooms/Index-cus.php">
                <img src="Images/u.png" height="80" width="500"></a>
            </div>
        </div>
    </div>
</div>

</html>
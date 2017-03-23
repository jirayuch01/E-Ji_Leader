<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>E-Ji Leader Hotel</title>
</head>
<?php
	include("Header.php");
	include("menu-cus.php");
?>

<div class="box-left">
	<?php
		menu();
	?>
</div>

<div class="box-right">
<form name = frminsert action = 'Insert_print.php' method = "post">
	<body>
	<h1><center>WELCOME</center></h1>
	<p><center>Typing your information below.</center></p>
	<div>
	<ul><div class="box-left"><p align="left"><b>Firstname</div> 
	<div class="box-right" ><input type = "text" name="fname" class="form-control" placeholder="Firstname" style="width: 300px;" required></b></p></div></ul>

	<ul><div class="box-left"><p align="left"><b>Lastname </div>
	<div class="box-right"><input type = "text" name="lname" class="form-control" placeholder="Lastname" style="width: 300px;" required></b></p></div></ul>
	<ul><div class="box-left"><p align="left"><b>Reserve Date </div>
	<div class="box-right"><input type = "date" name="birthday" class="form-control" placeholder="Reserve Date" style="width: 300px;" required></b></p></div></ul>
	<ul><div class="box-left"><p align="left"><b>ID Card </div>
	<div class="box-right"><input type = "text" name="IDCard" class="form-control" placeholder="ID Card" style="width: 300px;" required></b></p></div></ul>
	<ul><div class="box-left"><p align="left"><b>E-mail </div>
	<div class="box-right"><input type = "text" name="email" class="form-control" placeholder="E-mail" style="width: 300px;" required></b></p></div></ul>
	<ul><div class="box-left"><p align="left"><b>Gender : </div>
	<div class="box-right"><input type = "Radio" name = "Gender" value = "M"> Male</div>
	<div class="box-right"><input type = "Radio" name="Gender" value = "F"> Female</div></ul>
	<ul><div class="box-left"><p align="left"><b>Telephone : </div>
	<div class="box-right"><input type = "text" name="Telephone" class="form-control" placeholder="Telephone" style="width: 300px;" required></b></p></div></ul>
	<ul><div class="box-left"><p align="left"><b>Package Tour </div>
	<select name= "activityname" style="width: 300px;" ></b></p>

	<?php
		$connect = mysqli_connect("localhost" , "root" , "" , "projectwebpro");
		$sql     = 'SELECT Activityname 
					FROM tours_detail';
		$result  = mysqli_query($connect, $sql);
		if (!$result) {
			echo mysqli_error().'<br>';
			die('Can not access database!');
		} else {
			while($row = mysqli_fetch_assoc($result)){
					echo '<option value='.$row['Activityname'].'>'.$row['Activityname'].'</option>';
				}
		}
		echo '</select>';
		mysqli_close($connect);	
	?>
	
	</div></ul>
	<br>
	<div class="box-right"><center><input type = "submit" value = "Confirm" class="btn btn-primary btn-block"></center></div>
	</body>
	
</form>
<br><br><br><br>
</div>

<div class="col-md-12 footer" style=" margin: 15px auto; padding: 0px;">
                                <div class="col-md-12" >
                                        <div class="col-md-6 footer-left"  style="background-color: white;">
                                            <b>EjiLeader Resort and Spa</b><br>
                                            PSU Phuket, Kathu, Kathu, Phuket 83120<br>
                                            Telephone : 076276012-(13)&nbsp;&nbsp;Fax : 076276002<br>
                                            GPS : N8.02999425344937 / E98.8238769795623 
                                        </div>
                                        <div class="col-md-6 footer-right" align="center"  style="background-color: white;">
                                            <a href="Index-cus.php"><img src="Images/u.png" height="80" width="500"></a>
                                        </div>
                                </div>
                            </div>  
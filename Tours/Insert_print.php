<form name = frminsert action = 'Insert_printDes.php' method = "post">
<?php

	$fname  = $_POST['fname'];
	$lname  = $_POST['lname'];
	$birthday  = $_POST['birthday'];
	$IDCard  = $_POST['IDCard'];
	$email  = $_POST['email'];
	$Telephone  = $_POST['Telephone'];
	$activityname  = $_POST['activityname'];

	if(isset($_POST['Gender'])){
		$sex  = $_POST['Gender'];
	}else{
		$sex  = $_POST['Gender'];
	}

	$connect = mysqli_connect("localhost" , "root" , "" , "projectwebpro");

	$sql  = "INSERT INTO tours(email,IDCard,fname,lname,ReserveDate,Telephone,sex,activityname) 
		VALUES ('".$email."',
	'".$IDCard."',
	'".$fname."',
	'".$lname."',
	'".$birthday."',
	'".$Telephone."',
	'".$sex."',
	'".$activityname."')";

	$result  = mysqli_query($connect, $sql);
	
	if (!$result) {
		echo mysqli_error().'<br>';
		die('Can not access database!');
	} else {
		echo '<h1><center>ทำการจองเรียบร้อยแล้ว</center></h1>';
		echo '<center><input type = "submit" value = "Detail Tour"></center>';
		}
		mysqli_close($connect);
?>
</form>
 
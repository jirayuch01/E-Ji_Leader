
<?php
	$username = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$idcard = $_POST['idcard'];
	$birthday = $_POST['birthday'];
	$email = $_POST['email'];

	session_start();
	$_SESSION['username'] = $_POST['username'];

	$connect = new mysqli("localhost","root","","projectwebpro");
	$sql = 'select * from admin_system where user_name="'.$username.'" and fname="'.$fname.'" and lname="'.$lname.'" and IDCard="'.$idcard.'" and birthday="'.$birthday.'" and email="'.$email.'"';
	$query = $connect->query($sql);
	$result = $query->fetch_object();
	if(!$result){
		echo "<script>alert('Username not found!');document.location='forget.php'</script>";
	}else{
		echo "<script>document.location='resetpass.php'</script>";
	}
	mysqli_close($connect);
?>
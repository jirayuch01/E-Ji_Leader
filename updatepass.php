
<?php
	
	$connect = mysqli_connect("localhost","root","","projectwebpro");
	session_start();
	
	$sql = 'update admin_system set user_pass = "'.$_POST['password'].'" where user_name = "'.$_SESSION['username'].'"';
	//$result = $connect->query($sql);
	if(mysqli_query($connect, $sql)){
		echo "<script>alert('Reset Password Success');document.location='login.php'</script>";
	}else{
		echo "<script>alert('Reset Password Faile !!!');document.location='login.php'</script>";
	}



	mysqli_close($connect);
?>
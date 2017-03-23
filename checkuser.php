<!DOCTYPE html>
<html>
<head>
</head>
<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$connect = new mysqli("localhost","root","","projectwebpro");

	$sql = 'select * from admin_system where user_name="'.$username.'" and 	user_pass="'.$password.'"';
	$sql2 = 'select Status from admin_system where user_name="'.$username.'"';
	
	$query = $connect->query($sql);
	$result = $query->fetch_object();
	$obj = $query->fetch_object();
	session_start();
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['fname'] = $obj->fname;

	if(!$result){
		echo "<script>alert('Your username or password is wrong !!!');document.location='login.php'</script>";
	}else{
		$query2 = $connect->query($sql2);
		$result2 = $query2->fetch_object();
		$status = $result2->Status;
		switch ($status) {
			case "adm":
				header("Location:index-admin.php");
				break;
			case "emp":
				header("Location:deleteReserve.php");
				break;
			case "cus":
				header("Location:/project_webpro/Rooms/Index-cus.php");
				break;
			
			default:
				header("Location:login.php");
				break;
		}
		
	}
	mysqli_close($connect);
?>
</html>
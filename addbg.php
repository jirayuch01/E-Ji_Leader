
<?php
	
	$connect = mysqli_connect("localhost","root","","projectwebpro");
	$sql = 'INSERT INTO `admin_system`(`id`, `user_name`, `user_pass`, `email`, `IDCard`, `fname`, `lname`, `birthday`, `address`, `Telephone`, `sex`, `Status`) VALUES (null,"'.$_POST['username'].'","'.$_POST['password'].'","'.$_POST['email'].'","'.$_POST['idcard'].'","'.$_POST['fname'].'","'.$_POST['lname'].'","'.$_POST['birthday'].'","'.$_POST['address'].'","'.$_POST['telephone'].'","'.$_POST['Gender'].'","'.$_POST['Position'].'");';
	//$result = $connect->query($sql);
	if(mysqli_query($connect, $sql)){
		echo "<script>alert('Add user Success ^ ^');document.location='adduser.php'</script>";
	}else{
		echo "<script>alert('Add user Faile !!!');</script>";
	}



	mysqli_close($connect);
?>
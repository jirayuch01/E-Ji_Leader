<?php
	$connect = mysqli_connect("localhost","root","","projectwebpro");
	$sql = 'INSERT INTO `admin_system`(`id`, `user_name`, `user_pass`, `email`, `IDCard`, `fname`, `lname`, `birthday`, `address`, `Telephone`, `sex`, `Status`) VALUES (null,"'.$_POST['username'].'","'.$_POST['password'].'","'.$_POST['email'].'","'.$_POST['idcard'].'","'.$_POST['fname'].'","'.$_POST['lname'].'","'.$_POST['birthday'].'","'.$_POST['address'].'","'.$_POST['telephone'].'","'.$_POST['Gender'].'","cus");';
	if(mysqli_query($connect, $sql)){
		echo "<script>alert('Register Complete ^ ^');document.location='login.php'</script>";
	}else{
		echo "<script>alert('Can't register now, Please try agian later !!!');</script>";
	}



	mysqli_close($connect);
?>
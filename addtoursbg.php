<?php
	
	$connect = mysqli_connect("localhost","root","","projectwebpro");
	$sql = 'INSERT INTO `tours_detail`(`idTours`, `Activityname`, `Price`) VALUES (null,"'.$_POST['activityname'].'","'.$_POST['price'].'");';
	if(mysqli_query($connect, $sql)){
		echo "<script>alert('Add New Tours Success ^ ^');document.location='addtours.php'</script>";
	}else{
		echo "<script>alert('Add New Tours Faile !!!');</script>";
	}
	mysqli_close($connect);
?>
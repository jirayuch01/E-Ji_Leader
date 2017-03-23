<?php
	
	$connect = mysqli_connect("localhost","root","","projectwebpro");
	$sql = 'INSERT INTO `rooms`(`idRooms`, `RoomsNo`, `RoomsType`, `RoomsPrice`, `RoomsStatus`) VALUES (null,"'.$_POST['roomsno'].'","'.$_POST['roomstype'].'","'.$_POST['roomsprice'].'","'.$_POST['roomsstatus'].'");';
	if(mysqli_query($connect, $sql)){
		echo "<script>alert('Add New Rooms Success ^ ^');document.location='addrooms.php'</script>";
	}else{
		echo "<script>alert('Add New Rooms Faile !!!');</script>";
	}
	mysqli_close($connect);
?>
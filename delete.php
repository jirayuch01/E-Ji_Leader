<?php
	
	$connect = new mysqli("localhost","root","","projectwebpro");
	$sql = 'delete from customers_booking_rooms where RoomsID ='.$_POST['id'].';';
	//$sql2 = 'update rooms set RoomsStatus = "Available" where RoomsNo = '.$_POST['id'].';';
  	$result = $connect->query($sql);
  	//$result2 = $connect->query($sql2);
  	if($result ){
		echo "<script>alert('Delete Success ^ ^');document.location='deleteReserve.php'</script>";
	}
	else{
		echo "<script>alert('Delete Faile !!!');document.location='deleteReserve.php'</script>";
	}
	mysqli_close($connect);

?>
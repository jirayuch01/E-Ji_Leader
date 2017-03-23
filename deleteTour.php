<?php
	
	$connect = new mysqli("localhost","root","","projectwebpro");
	$sql = 'delete from tours where id ='.$_POST['id'].';';
	//$sql2 = 'update rooms set RoomsStatus = "Available" where RoomsNo = '.$_POST['id'].';';
  	$result = $connect->query($sql);
  	//$result2 = $connect->query($sql2);
  	if($result ){
		echo "<script>alert('Delete Success ^ ^');document.location='deleteReserveTour.php'</script>";
	}
	else{
		echo "<script>alert('Delete Faile !!!');document.location='deleteReserveTour.php'</script>";
	}
	mysqli_close($connect);

?>